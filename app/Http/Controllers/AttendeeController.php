<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupCategory;
use App\Models\GroupList;
use App\Models\Register;
use App\Models\Payment;
use App\Models\Price;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AttendeeController extends Controller
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
        // $grp_category = GroupCategory::all();
        $price = Price::all();
        return view('Backend/attend/add_attend', [
            // 'grp_category' => $grp_category,
            'price' => $price
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
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
        // $re_edit->Attend_status = $req->Attend_status;
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

        return back()->with('success', "Register Successful");

    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $att_list = DB::table('wp_evr_attendee')->get();
        return view('Backend/attend/list_attend', [
            'att_list' => $att_list
        ]);
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
        $edit_att = Register::findOrFail($id);
        $grp_category = GroupCategory::all();
        return view('Backend/attend/edit_attend', [
            'edit_att' => $edit_att,
            'grp_category' => $grp_category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $re_edit = Register::findOrFail($req->edit_id);

        $part = GroupList::Where('participate_1', $req->edit_id)->orWhere('participate_2', $req->edit_id)->orWhere('participate_3', $req->edit_id)->orWhere('participate_4', $req->edit_id)->orWhere('participate_5', $req->edit_id)->orWhere('participate_6', $req->edit_id)->orWhere('participate_7', $req->edit_id)->get();

        if(!empty($part[0])){
          if($re_edit->group_Cat_Id != $req->group_Cat_Id){

            Register::where('id', $req->edit_id)->update(array('in_grp_list' => '1'));
            $part = GroupList::Where('participate_1', $req->edit_id)->orWhere('participate_2', $req->edit_id)->orWhere('participate_3', $req->edit_id)->orWhere('participate_4', $req->edit_id)->orWhere('participate_5', $req->edit_id)->orWhere('participate_6', $req->edit_id)->orWhere('participate_7', $req->edit_id)->get();

            $part1 = $part[0]['participate_1'];
            $part2 = $part[0]['participate_2'];
            $part3 = $part[0]['participate_3'];
            $part4 = $part[0]['participate_4'];
            $part5 = $part[0]['participate_5'];
            $part6 = $part[0]['participate_6'];
            $part7 = $part[0]['participate_7'];
            $part8 = $part[0]['participate_8'];



            $reg1 = Register::where('id', $part1)->update(array('in_grp_list' => '1'));
            $reg2 = Register::where('id', $part2)->update(array('in_grp_list' => '1'));
            $reg3 = Register::where('id', $part3)->update(array('in_grp_list' => '1'));
            $reg4 = Register::where('id', $part4)->update(array('in_grp_list' => '1'));
            $reg5 = Register::where('id', $part5)->update(array('in_grp_list' => '1'));
            $reg6 = Register::where('id', $part6)->update(array('in_grp_list' => '1'));
            $reg7 = Register::where('id', $part7)->update(array('in_grp_list' => '1'));
            $reg8 = Register::where('id', $part8)->update(array('in_grp_list' => '1'));

            GroupList::Where('participate_1', $req->edit_id)->orWhere('participate_2', $req->edit_id)->orWhere('participate_3', $req->edit_id)->orWhere('participate_4', $req->edit_id)->orWhere('participate_5', $req->edit_id)->orWhere('participate_6', $req->edit_id)->orWhere('participate_7', $req->edit_id)->forceDelete();


          $re_edit->first_name = $req->first_name;
          $re_edit->last_name = $req->last_name;
          $re_edit->slug = Str::slug($req->badge_name);
          $re_edit->badge_name = $req->badge_name;
          $re_edit->email = $req->email;
          $re_edit->second_email = $req->second_email;
          $re_edit->org_name = $req->org_name;
          $re_edit->job_title = $req->job_title;
          $re_edit->addr_line1 = $req->addr_line1;
          $re_edit->addr_line2 = $req->addr_line2;
          $re_edit->city = $req->city;
          $re_edit->state = $req->state;
          $re_edit->country = $req->country;
          $re_edit->zip = $req->zip;
          $re_edit->mobile = $req->mobile;
          $re_edit->office_phone = $req->office_phone;
          $re_edit->is_conf_first = $req->is_conf_first;
          $re_edit->company_type = $req->company_type;
          $re_edit->if_other = $req->if_other;
          $re_edit->emerg_cont_name = $req->emerg_cont_name;
          $re_edit->emerg_cont_phone = $req->emerg_cont_phone;
          $re_edit->group_Cat_Id = $req->group_Cat_Id;
          $re_edit->payment_status = $req->payment_status;
          $re_edit->golfHandicup = $req->golfHandicup;
          $re_edit->rentalClubs = $req->rentalClubs;
          $re_edit->messagePreferredTime = $req->messagePreferredTime;
          $re_edit->wedWelReception = $req->wedWelReception;
          $re_edit->thursdayBreakfast = $req->thursdayBreakfast;
          $re_edit->thursdayLuncheon = $req->thursdayLuncheon;
          $re_edit->thursdayDinner = $req->thursdayDinner;
          $re_edit->spouseDinnerTicket = $req->spouseDinnerTicket;
          $re_edit->spouseFirstName = $req->spouseFirstName;
          $re_edit->fridayBreakfast = $req->fridayBreakfast;
          $re_edit->dietaryRestrictions = $req->dietaryRestrictions;
          $re_edit->payment_method = $req->payment_method;
          $re_edit->payment_amount = $req->payment_amount;
          $re_edit->Attend_status = $req->Attend_status;

          $re_edit->save();
            return back()->with('success', "Updated Successful");
          }


          else{
            Register::where('id', $req->edit_id)->update(array('in_grp_list' => '1'));

            $re_edit->first_name = $req->first_name;
            $re_edit->last_name = $req->last_name;
            $re_edit->slug = Str::slug($req->badge_name);
            $re_edit->badge_name = $req->badge_name;
            $re_edit->email = $req->email;
            $re_edit->second_email = $req->second_email;
            $re_edit->org_name = $req->org_name;
            $re_edit->job_title = $req->job_title;
            $re_edit->addr_line1 = $req->addr_line1;
            $re_edit->addr_line2 = $req->addr_line2;
            $re_edit->city = $req->city;
            $re_edit->state = $req->state;
            $re_edit->country = $req->country;
            $re_edit->zip = $req->zip;
            $re_edit->mobile = $req->mobile;
            $re_edit->office_phone = $req->office_phone;
            $re_edit->is_conf_first = $req->is_conf_first;
            $re_edit->company_type = $req->company_type;
            $re_edit->if_other = $req->if_other;
            $re_edit->emerg_cont_name = $req->emerg_cont_name;
            $re_edit->emerg_cont_phone = $req->emerg_cont_phone;
            $re_edit->group_Cat_Id = $req->group_Cat_Id;
            $re_edit->payment_status = $req->payment_status;
            $re_edit->golfHandicup = $req->golfHandicup;
            $re_edit->rentalClubs = $req->rentalClubs;
            $re_edit->messagePreferredTime = $req->messagePreferredTime;
            $re_edit->wedWelReception = $req->wedWelReception;
            $re_edit->thursdayBreakfast = $req->thursdayBreakfast;
            $re_edit->thursdayLuncheon = $req->thursdayLuncheon;
            $re_edit->thursdayDinner = $req->thursdayDinner;
            $re_edit->spouseDinnerTicket = $req->spouseDinnerTicket;
            $re_edit->spouseFirstName = $req->spouseFirstName;
            $re_edit->fridayBreakfast = $req->fridayBreakfast;
            $re_edit->dietaryRestrictions = $req->dietaryRestrictions;
            $re_edit->payment_method = $req->payment_method;
            $re_edit->payment_amount = $req->payment_amount;
            $re_edit->Attend_status = $req->Attend_status;

            $re_edit->save();
              return back()->with('success', "Updated Successful");
          }
        }
        elseif($re_edit->group_Cat_Id != $req->group_Cat_Id){
          Register::where('id', $req->edit_id)->update(array('in_grp_list' => '1'));
          $re_edit->first_name = $req->first_name;
          $re_edit->last_name = $req->last_name;
          $re_edit->slug = Str::slug($req->badge_name);
          $re_edit->badge_name = $req->badge_name;
          $re_edit->email = $req->email;
          $re_edit->second_email = $req->second_email;
          $re_edit->org_name = $req->org_name;
          $re_edit->job_title = $req->job_title;
          $re_edit->addr_line1 = $req->addr_line1;
          $re_edit->addr_line2 = $req->addr_line2;
          $re_edit->city = $req->city;
          $re_edit->state = $req->state;
          $re_edit->country = $req->country;
          $re_edit->zip = $req->zip;
          $re_edit->mobile = $req->mobile;
          $re_edit->office_phone = $req->office_phone;
          $re_edit->is_conf_first = $req->is_conf_first;
          $re_edit->company_type = $req->company_type;
          $re_edit->if_other = $req->if_other;
          $re_edit->emerg_cont_name = $req->emerg_cont_name;
          $re_edit->emerg_cont_phone = $req->emerg_cont_phone;
          $re_edit->group_Cat_Id = $req->group_Cat_Id;
          $re_edit->payment_status = $req->payment_status;
          $re_edit->golfHandicup = $req->golfHandicup;
          $re_edit->rentalClubs = $req->rentalClubs;
          $re_edit->messagePreferredTime = $req->messagePreferredTime;
          $re_edit->wedWelReception = $req->wedWelReception;
          $re_edit->thursdayBreakfast = $req->thursdayBreakfast;
          $re_edit->thursdayLuncheon = $req->thursdayLuncheon;
          $re_edit->thursdayDinner = $req->thursdayDinner;
          $re_edit->spouseDinnerTicket = $req->spouseDinnerTicket;
          $re_edit->spouseFirstName = $req->spouseFirstName;
          $re_edit->fridayBreakfast = $req->fridayBreakfast;
          $re_edit->dietaryRestrictions = $req->dietaryRestrictions;
          $re_edit->payment_method = $req->payment_method;
          $re_edit->payment_amount = $req->payment_amount;
          $re_edit->Attend_status = $req->Attend_status;

          $re_edit->save();
            return back()->with('success', "Updated Successful");
        }
        else{
          $re_edit->first_name = $req->first_name;
          $re_edit->last_name = $req->last_name;
          $re_edit->slug = Str::slug($req->badge_name);
          $re_edit->badge_name = $req->badge_name;
          $re_edit->email = $req->email;
          $re_edit->second_email = $req->second_email;
          $re_edit->org_name = $req->org_name;
          $re_edit->job_title = $req->job_title;
          $re_edit->addr_line1 = $req->addr_line1;
          $re_edit->addr_line2 = $req->addr_line2;
          $re_edit->city = $req->city;
          $re_edit->state = $req->state;
          $re_edit->country = $req->country;
          $re_edit->zip = $req->zip;
          $re_edit->mobile = $req->mobile;
          $re_edit->office_phone = $req->office_phone;
          $re_edit->is_conf_first = $req->is_conf_first;
          $re_edit->company_type = $req->company_type;
          $re_edit->if_other = $req->if_other;
          $re_edit->emerg_cont_name = $req->emerg_cont_name;
          $re_edit->emerg_cont_phone = $req->emerg_cont_phone;
          $re_edit->group_Cat_Id = $req->group_Cat_Id;
          $re_edit->payment_status = $req->payment_status;
          $re_edit->golfHandicup = $req->golfHandicup;
          $re_edit->rentalClubs = $req->rentalClubs;
          $re_edit->messagePreferredTime = $req->messagePreferredTime;
          $re_edit->wedWelReception = $req->wedWelReception;
          $re_edit->thursdayBreakfast = $req->thursdayBreakfast;
          $re_edit->thursdayLuncheon = $req->thursdayLuncheon;
          $re_edit->thursdayDinner = $req->thursdayDinner;
          $re_edit->spouseDinnerTicket = $req->spouseDinnerTicket;
          $re_edit->spouseFirstName = $req->spouseFirstName;
          $re_edit->fridayBreakfast = $req->fridayBreakfast;
          $re_edit->dietaryRestrictions = $req->dietaryRestrictions;
          $re_edit->payment_method = $req->payment_method;
          $re_edit->payment_amount = $req->payment_amount;
          $re_edit->Attend_status = $req->Attend_status;

          $re_edit->save();
            return back()->with('success', "Updated Successful");
        }

        return "You Donot Change Anything";
    }


    public function attendee_list()
    {
        $attend_list = DB::table('registers')->orderBy('id','desc')->orderBy('Attend_status','desc')->get();

        return view('Backend/attend/attendee_list',compact('attend_list'));


        // $attend_list = Register::withTrashed()->get();
        // $attend_list = Register::select('*')->orderBy('Attend_status', 'desc')->get();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function SelectedRegisterDelete(Request $request)
    {
        if($request->reg_id != ''){
            foreach($request->reg_id as $reg){
                Register::findOrFail($reg)->delete();

            }
            return back()->with('success', "Deleted Successful");
        }
    }


    public function list_trash_regis(){
        $register_attend = Register::onlyTrashed()->get();

        return view('Backend/attend/register_trash',compact('register_attend'));
    }


    public function permanant_reg_destroy($id){
        Register::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('success', 'Deleted Successfuly');
    }

    public function permanant_reg_restore($id){
        Register::withTrashed()->where('id', $id)->restore();
        return back()->with('success', 'Restore Successfuly');
    }
}
