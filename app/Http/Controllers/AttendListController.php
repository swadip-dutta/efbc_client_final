<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Register;
use DB;

class AttendListController extends Controller
{
    use SoftDeletes;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     list_attendee 6 columns
     */


    public function __construct()
    {
        $this->middleware('verified');
    }



    public function register_list_func()
    {
            $register_attend = Register::orderBy('id', 'desc')->get();

            return view('Backend/attend/register_list',compact('register_attend'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register_add_func()
    {
       // return view('Backend/attend/add_attend');
       // return view('Backend/attend/registeradd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register_store_func(Request $request)
    {
        //  Register::create($request->all());

        // return redirect()->route('regAttendeeStore')

        //                 ->with('success','Register Attendedee created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register_edit_func(Register $register)
    {
       // return view('Backend/attend/add_attend',compact('register'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register_update_func(Request $request, $id)
    {


    // $register = Register::findOrFail($id);

    //         $register->first_name = $request->first_name;
    //         $register->last_name  = $request->last_name;
    //         $register->badge_name  = $request->badge_name;
    //         $register->email  = $request->email;
    //         $register->second_email  = $request->second_email;
    //         // $register->slug  = Str::slug($request->first_name);
    //         $register->org_name  = $request->org_name;
    //         $register->job_title  = $request->job_title;
    //         $register->addr_line1  = $request->addr_line1;
    //         $register->addr_line2  = $request->addr_line2;
    //         $register->city  = $request->city;
    //         $register->state  = $request->state;
    //         $register->country  = $request->country;
    //         $register->zip  = $request->zip;
    //         $register->mobile  = $request->mobile;
    //         $register->office_phone  = $request->office_phone;
    //         $register->is_conf_first  = $request->is_conf_first;
    //         $register->company_type  = $request->company_type;
    //         $register->if_other  = $request->if_other;
    //         $register->emerg_cont_name  = $request->emerg_cont_name;
    //         $register->emerg_cont_phone  = $request->emerg_cont_phone;
    //         $register->attend_status  = $request->attend_status;
    //         $register->payment_amount  = $request->payment_amount;
    //         $register->payment_method  = $request->payment_method;
    //         $register->golfHandicup  = $request->golfHandicup;
    //         $register->rentalClubs  = $request->rentalClubs;
    //         $register->messagePreferredTime  = $request->messagePreferredTime;
    //         $register->wedWelReception  = $request->wedWelReception;
    //         $register->thursdayBreakfast  = $request->thursdayBreakfast;
    //         $register->thursdayLuncheon  = $request->thursdayLuncheon;
    //         $register->thursdayDinner  = $request->thursdayDinner;
    //         $register->spouseDinnerTicket  = $request->spouseDinnerTicket;
    //         $register->spouseFirstName  = $request->spouseFirstName;
    //         $register->spouseLastName  = $request->spouseLastName;
    //         $register->fridayBreakfast  = $request->fridayBreakfast;
    //         $register->dietaryRestrictions  = $request->dietaryRestrictions;
    //         // $register->payment_status  = $request->payment_status;
    //         // $register->card_name  = $request->card_name;
    //         // $register->card_number  = $request->card_number;


    //         $register->save();

    //          return redirect()->route('regAttendeeList')->with('success', 'Register Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register_destroy($id)
    {

        $register = Register::findOrFail($id);
        $register->delete();
        return back()->with('success', "Delete Successful");
    }



    public function SelectedCategoryDelete(Request $request){

        if($request->cat_id != ''){
            foreach($request->cat_id as $cat){
                Register::findOrFail($cat)->delete();

            }
            return back()->with('success', "Delete Successful");
        }



    }



    public function front_register_pending(){

        $register_attend = Register::where('payment_status', 2)->get();

            return view('Backend/attend/front_register_pending',compact('register_attend'));
    }


    public function front_register_paid(){

        $register_attend = Register::where('payment_status', 1)->get();

            return view('Backend/attend/front_register_paid',compact('register_attend'));
    }










}
