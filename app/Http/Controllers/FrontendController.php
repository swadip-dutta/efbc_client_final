<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupCategory;
use App\Models\GroupList;
use App\Models\Price;
use App\Models\Register;
use App\Models\Payment;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use DB;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grp_category = GroupCategory::all();
        $price = Price::all();
        return view('Backend/payment/front_payment', [
            'grp_category' => $grp_category,
            'price' => $price
        ]);
    }






    public function front_card_payment($id, $payment_amount)
    {
        $regi_id = Register::findOrFail($id);
        $payment_method = Register::where('id', $id)->where('payment_amount', $payment_amount)->get();
        $grp_category = GroupCategory::all();
        $price = Price::all();
        return view('Backend/payment/front_card_payment', [
            'grp_category' => $grp_category,
            'price' => $price,
            'regi_id' => $regi_id,
            'payment_method' => $payment_method
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function front_register_create(Request $req)
    {

        $new_registr = new Register;

        $new_registr->first_name = $req->first_name;
        $new_registr->last_name = $req->last_name;
        $new_registr->slug = Str::slug($req->badge_name);
        $new_registr->badge_name = $req->badge_name;
        $new_registr->email = $req->email;
        $new_registr->second_email = $req->second_email;
        $new_registr->org_name = $req->org_name;
        $new_registr->job_title = $req->job_title;
        $new_registr->addr_line1 = $req->addr_line1;
        $new_registr->addr_line2 = $req->addr_line2;
        $new_registr->city = $req->city;
        $new_registr->state = $req->state;
        $new_registr->country = $req->country;
        $new_registr->zip = $req->zip;
        $new_registr->mobile = $req->mobile;
        $new_registr->office_phone = $req->office_phone;
        $new_registr->is_conf_first = $req->is_conf_first;
        $new_registr->company_type = $req->company_type;
        $new_registr->if_other = $req->if_other;
        $new_registr->emerg_cont_name = $req->emerg_cont_name;
        $new_registr->emerg_cont_phone = $req->emerg_cont_phone;
        $new_registr->group_Cat_Id = $req->group_Cat_Id;
        // $new_registr->Attend_status = $req->Attend_status;
        $new_registr->golfHandicup = $req->golfHandicup;
        $new_registr->rentalClubs = $req->rentalClubs;
        $new_registr->messagePreferredTime = $req->messagePreferredTime;
        $new_registr->wedWelReception = $req->wedWelReception;
        $new_registr->thursdayBreakfast = $req->thursdayBreakfast;
        $new_registr->thursdayLuncheon = $req->thursdayLuncheon;
        $new_registr->thursdayDinner = $req->thursdayDinner;
        $new_registr->spouseDinnerTicket = $req->spouseDinnerTicket;
        $new_registr->spouseFirstName = $req->spouseFirstName;
        $new_registr->fridayBreakfast = $req->fridayBreakfast;
        $new_registr->dietaryRestrictions = $req->dietaryRestrictions;
        $new_registr->payment_method = $req->payment_method;
        $new_registr->payment_amount = $req->payment_amount;
        $new_registr->save();




        if($req->payment_method == 'online' ){

            
            return redirect()->route('front_card_payment', ['id'=> $new_registr->id, 'payment_amount' => $new_registr->payment_amount]);

        }
        else{
            // Mail::to($req->email)->send(new OrderShipped($order));

        return back()->with('success', "Register Successful");
        }
    }

 
    public function front_auth_payment(Request $request)
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
                    

                    return redirect()->route('front_register')->with('success', 'Payment Successfull');
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
    public function front_att_list()
    {
        $attend_list = DB::table('registers')->orderBy('id','desc')->orderBy('Attend_status','desc')->get();

        return view('Backend/front_list/front_att_list',compact('attend_list'));
    }

// All Group List Front Show

    public function front_golf_list()
    {
        $attend_list = GroupList::where('category_id', 1)->get();
        return view('Backend/front_list/grp_front_list', [
            'attend_list' => $attend_list
        ]);
        
    }



    public function front_fishing_list()
    {
        $attend_list = GroupList::where('category_id', 2)->get();
        return view('Backend/front_list/grp_front_list', [
            'attend_list' => $attend_list
        ]);
    }


    public function front_networking_list()
    {
        $attend_list = GroupList::where('category_id', 3)->get();
        return view('Backend/front_list/grp_front_list', [
            'attend_list' => $attend_list
        ]);
    }



    public function front_messaging_list()
    {
        $attend_list = GroupList::where('category_id', 4)->get();
        return view('Backend/front_list/grp_front_list', [
            'attend_list' => $attend_list
        ]);
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
    public function front_make_payment()
    {
        return view('Backend/front_list/front_make_payment');
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
