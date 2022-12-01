<?php

namespace App\Http\Controllers;

use App\Models\CompanySetting;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
// use App\Models\CompanySetting;

class SettingController extends Controller
{

  // =======================Company Settings all urls function=================

    public function index()
    {
 
       $update_Setting = companySetting::all();
        return view('Backend/companySettings/company_setting', [
            'update_Setting' => $update_Setting ]);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanySetting  $companySetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    $request->validate([
            'company_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instragram' => 'required',
            'linkedin' => 'required',
            'pinterest' => 'required',
            'factory' => 'required',
            'address' => 'required',
        ]);
        
    $update_Setting = CompanySetting::findOrFail($request->hidden_id);
    $update_Setting->company_name  = $request->company_name;
    $update_Setting->phone         = $request->phone;
    $update_Setting->email         = $request->email;
    $update_Setting->facebook      = $request->facebook;
    $update_Setting->twitter       = $request->twitter;
    $update_Setting->instragram    = $request->instragram;
    $update_Setting->linkedin      = $request->linkedin;
    $update_Setting->pinterest     = $request->pinterest;
    $update_Setting->factory       = $request->factory;
    $update_Setting->address       = $request->address;

    $update_Setting->save();

    return back()->with('success', "Company Data Updated Successfully");


    }

      // =================================user function===========================

    
    public function user_index()
    {
 
        $update_user_data = DB::table('users')->get();
        return view('Backend/companySettings/user_setting', [
            'update_user_data' => $update_user_data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanySetting  $companySetting
     * @return \Illuminate\Http\Response
     */
    public function user_update(Request $request)
    {

    $request->validate([
            // 'token' => ['required'],
            'name' => 'required',
            'email' => 'required|min:8',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        
    $update_user_data = User::findOrFail($request->user_hidden_id);
    $update_user_data->name      = $request->name;
    $update_user_data->email     = $request->email;
    $update_user_data->password  =  Hash::make($request->password);
    $update_user_data->phone     = $request->phone;
    $update_user_data->address   = $request->address;
    $update_user_data->save();

    return back()->with('success', "User Data Updated Successfully");


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
         
       
        // return redirect()->route('settings.index')->with('success','Company data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanySetting  $companySetting
     * @return \Illuminate\Http\Response
     */


    public function show($id) {
      
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanySetting  $companySetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanySetting  $companySetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanySetting $companySetting)
    {
    }



}
