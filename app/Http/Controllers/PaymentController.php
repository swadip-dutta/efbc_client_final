<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Price;
use App\Models\Payment;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('verified');
    }



    public function index()
    {
        $pay_list = Payment::all();
        return view('Backend/payment/complete_pay_list', [
            'pay_list' => $pay_list
        ]);
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reg_id = Register::all();
        $price = Price::all();
        return view('Backend/payment/make_payment', [
            'reg_id' => $reg_id,
            'price' => $price,
        ]);
    }

 
    public function authorize_make_payment(Request $request)
    {

        
        $rules = array(
            'cardNumber' => 'required|min:12|max:20',
            'cardExpiry' => 'required',
            'cardCVV' => 'required|min:3|max:6',
            'amount' => 'required',
        );
         
        $validatorMesssages = array(
            'cardNumber' => 'Credit card number is required',
            'cardExpiry' => 'Credit card expiry is required',
            'cardCVV' => 'Credit card secure code is required',
            'amount' => 'Payment amount is required',
        );
         
        $validator = Validator::make($request->all(), $rules, $validatorMesssages);
         
        if ($validator->fails()) {
         
            return redirect('test-authorize-card-payment')
                ->withErrors($validator)
                ->withInput();
        } else {
         
            if( $request->paymentMethod == 'CC' ){
             
                /* Create a merchantAuthenticationType object with authentication details
              retrieved from the constants file */
               
                $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
                 
                // API and environment details.
                 
                $authorize_payment_api_login_id = config('services.authorize.login');
                $authorize_payment_transaction_key = config('services.authorize.key');
                $authorize_payment_env = config('services.authorize.env');
                 
                 
                $merchantAuthentication->setName($authorize_payment_api_login_id);
                $merchantAuthentication->setTransactionKey($authorize_payment_transaction_key);
                 
                // Set the transaction's refId
                $refId = 'ref' . time();
                $cardNumber = preg_replace('/\s+/', '', $request->cardNumber);
                $cardExpDate = $request->cardExpiry;
                $cardCVV = $request->cardCVV;
                $bill_amount = $request->amount;
                 
                // Create the payment data for a credit card
                $creditCard = new AnetAPI\CreditCardType();
                $creditCard->setCardNumber($cardNumber);
                $creditCard->setExpirationDate($cardExpDate);
                $creditCard->setCardCode($cardCVV);
 
                // Add the payment data to a paymentType object
                $paymentOne = new AnetAPI\PaymentType();
                $paymentOne->setCreditCard($creditCard);
                 
                // Create a TransactionRequestType object and add the previous objects to it
                $transactionRequestType = new AnetAPI\TransactionRequestType();
                $transactionRequestType->setTransactionType("authCaptureTransaction");
                $transactionRequestType->setAmount($bill_amount);
                $transactionRequestType->setPayment($paymentOne);
                 
                // Assemble the complete transaction request
                $requests = new AnetAPI\CreateTransactionRequest();
                $requests->setMerchantAuthentication($merchantAuthentication);
                $requests->setRefId($refId);
                $requests->setTransactionRequest($transactionRequestType);
 
                // Create the controller and get the response
                $controller = new AnetController\CreateTransactionController($requests);
                 
                if( $authorize_payment_env == 'PRODUCTION')
                $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::PRODUCTION);
                else
                $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
                 
                if ($response != null) {
                    // Check to see if the API request was successfully received and acted upon
                    if ($response->getMessages()->getResultCode() == "Ok") {
                        // Since the API request was successful, look for a transaction response
                        // and parse it to display the results of authorizing the card
                        $tresponse = $response->getTransactionResponse();
 
                        if ($tresponse != null && $tresponse->getMessages() != null) {
                         
                            //echo " Successfully created transaction with Transaction ID: " . $tresponse->getTransId() . "\n";  
                            // echo " Transaction Response Code: " . $tresponse->getResponseCode() . "\n";
                            // echo " Message Code: " . $tresponse->getMessages()[0]->getCode() . "\n";
                            // echo " Auth Code: " . $tresponse->getAuthCode() . "\n";
                            // echo " Description: " . $tresponse->getMessages()[0]->getDescription() . "\n";
                             
                            $message_text = $tresponse->getMessages()[0]->getDescription().", Transaction ID: " . $tresponse->getTransId();
                             
                            $msg_type = "success_msg";
                             
                            /* save payment status and other values to database */
                            /* send payment success email to user or website admin */
                             
                             
                        } else {
                            $message_text = 'There were some issue with the payment. Please try again later.';
                            $msg_type = "error_msg";                                    
 
                            if ($tresponse->getErrors() != null) {
                                $message_text = $tresponse->getErrors()[0]->getErrorText();
                                $msg_type = "error_msg";                                    
                            }
                            /* send payment failed email to user or website admin */
                             
                        }
                        // Or, print errors if the API request wasn't successful
                    } else {
                        $message_text = 'There were some issue with the payment. Please try again later.';
                        $msg_type = "error_msg";                                    
 
                        $tresponse = $response->getTransactionResponse();
 
                        if ($tresponse != null && $tresponse->getErrors() != null) {
                            $message_text = $tresponse->getErrors()[0]->getErrorText();
                            $msg_type = "error_msg";                    
                        } else {
                            $message_text = $response->getMessages()->getMessage()[0]->getText();
                            $msg_type = "error_msg";
                        }
                        /* send payment failed email to user or website admin */
                         
                    }
                } else {
                    $message_text = "No response returned. Please contact site admin.";
                    $msg_type = "error_msg";
                     
                    /* send payment failed email to user or website admin */
                }
                 
                if($msg_type == 'success_msg'){
                
                    Payment::insert([
                        'register_id' => $request->register_id,
                        'transaction_id' => $tresponse->getTransId(),
                        'price_id' => $request->amount,
                        'created_at' => Carbon::now()
                    ]); 

                           

                    Register::where('id', $request->register_id)->update(array('payment_status' => '1'));
                    Register::where('id', $request->register_id)->update(array('payment_amount' => $request->amount));
                    $order = Register::where('id', $request->register_id)->get();
                    $e_mail = DB::Table('registers')->select('email')->where('id', $request->register_id)->get();

                    Mail::to($e_mail)->send(new OrderShipped($order));

                    $page = Register::find($request->register_id);

                        // Make sure you've got the Page model
                        if($page) {
                            $page->payment_status = '1';
                            $page->save();
                        } 
                    

                        return back()->with('success', 'Payment Successfull');
                }
                
                else{
                    return back()->with('error', 'Card Number Error');
                }
            }
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
