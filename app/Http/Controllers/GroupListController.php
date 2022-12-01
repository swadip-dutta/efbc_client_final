<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupSubCategory;
use App\Models\GroupCategory;
use App\Models\Register;
use App\Models\GroupList;
use App\Exports\GroupListExportGolf;
use App\Exports\GroupListExportFish;
use App\Exports\GroupListExportMessage;
use App\Exports\GroupListExportNetwork;
use App\Exports\GroupListExport;
use Maatwebsite\Excel\Facades\Excel;
// use Illuminate\Validation\Rules\Exists;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupListController extends Controller
{
    use SoftDeletes;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('verified');
    }



    public function add_g_group()
    {

        $grp_category = GroupSubCategory::where('category_id', 1)->get()->unique('name');
        $grp_g_category = Register::where('group_Cat_Id', 1)->get()->unique('group_Cat_Id');
        $grp_g_fr_category = Register::whereIn('group_Cat_Id', [1, 5])->where('in_grp_list', 1)->get();
        $registr_paticipt = Register::where('in_grp_list', 1)->get();



        return view('Backend/group category/add_g_group', [
            'grp_category' => $grp_category,
            'registr_paticipt' => $registr_paticipt,
            'grp_g_category' => $grp_g_category,
            'grp_g_fr_category' => $grp_g_fr_category,
        ]);

    }
    public function add_f_group()
    {

        $grp_category = GroupSubCategory::where('category_id', 2)->get()->unique('name');
        $grp_g_category = Register::where('group_Cat_Id', 2)->get()->unique('group_Cat_Id');
        $grp_g_fr_category = Register::whereIn('group_Cat_Id', [2, 5])->where('in_grp_list', 1)->get();
        $registr_paticipt = Register::where('in_grp_list', 1)->get();



        return view('Backend/group category/add_f_group', [
            'grp_category' => $grp_category,
            'registr_paticipt' => $registr_paticipt,
            'grp_g_category' => $grp_g_category,
            'grp_g_fr_category' => $grp_g_fr_category,
        ]);

    }
    public function add_n_group()
    {

        $grp_category = GroupSubCategory::where('category_id', 3)->get()->unique('name');
        $grp_g_category = Register::where('group_Cat_Id', 3)->get()->unique('group_Cat_Id');
        $grp_g_fr_category = Register::whereIn('group_Cat_Id', [3, 5])->where('in_grp_list', 1)->get();
        $registr_paticipt = Register::where('in_grp_list', 1)->get();



        return view('Backend/group category/add_n_group', [
            'grp_category' => $grp_category,
            'registr_paticipt' => $registr_paticipt,
            'grp_g_category' => $grp_g_category,
            'grp_g_fr_category' => $grp_g_fr_category,
        ]);

    }
    public function add_m_group()
    {

        $grp_category = GroupSubCategory::where('category_id', 4)->get()->unique('name');
        $grp_g_category = Register::where('group_Cat_Id', 4)->get()->unique('group_Cat_Id');
        $grp_g_fr_category = Register::whereIn('group_Cat_Id', [4, 5])->where('in_grp_list', 1)->get();
        $registr_paticipt = Register::where('in_grp_list', 1)->get();



        return view('Backend/group category/add_m_group', [
            'grp_category' => $grp_category,
            'registr_paticipt' => $registr_paticipt,
            'grp_g_category' => $grp_g_category,
            'grp_g_fr_category' => $grp_g_fr_category,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post_group(Request $request)
    {
        $new_grp_list = new GroupList;
        $new_grp_list->subcategory_id = $request->subcategory_id;
        $new_grp_list->category_id = $request->category_id;
        $new_grp_list->participate_1 = $request->participate_1;
        $new_grp_list->participate_2 = $request->participate_2;
        $new_grp_list->participate_3 = $request->participate_3;
        $new_grp_list->participate_4 = $request->participate_4;
        $new_grp_list->participate_5 = $request->participate_5;
        $new_grp_list->participate_6 = $request->participate_6;
        $new_grp_list->participate_7 = $request->participate_7;
        $new_grp_list->participate_8 = $request->participate_8;


        $new_grp_list->save();

        if($new_grp_list->save()){
            $reg_delet = Register::whereIn('id', [$request->participate_1, $request->participate_2, $request->participate_3, $request->participate_4, $request->participate_5, $request->participate_6, $request->participate_7, $request->participate_8])->update(['in_grp_list' => "2"]);

            Register::whereIn('id', [$request->participate_1, $request->participate_2, $request->participate_3, $request->participate_4, $request->participate_5, $request->participate_6, $request->participate_7, $request->participate_8])->update(['group_Cat_Id' => $request->category_id]);

            return back()->with('G_insert', "Insert Successful");
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





     public function golf_view(){
        $golf_all = GroupList::where('category_id', 1)->get();
        return view('Backend/group category/all_group/golf', [
            'golf_all' => $golf_all
        ]);
     }


     public function fishing_view(){
        $golf_all = GroupList::where('category_id', 2)->get();
        return view('Backend/group category/all_group/fishing', [
            'golf_all' => $golf_all
        ]);
     }


     public function networking_view(){
        $golf_all = GroupList::where('category_id', 3)->get();
        return view('Backend/group category/all_group/networking', [
            'golf_all' => $golf_all
        ]);
     }


     public function messaging_view(){
        $golf_all = GroupList::where('category_id', 4)->get();
        return view('Backend/group category/all_group/messaging', [
            'golf_all' => $golf_all
        ]);
     }


     public function golf_edit($id){

        $category = GroupCategory::where('id', 1)->get()->unique('category_name');
        $scategory = GroupSubCategory::all()->unique('name');
        $registr = Register::where('group_Cat_Id', 1)->where('in_grp_list', 2)->get();
        $edit_grp = GroupList::where('id', $id)->first();
        return view('Backend/group category/all_group/golf_edit', [
            'edit_grp' => $edit_grp,
            'category' => $category,
            'scategory' => $scategory,
            'registr' => $registr
        ]);

     }


     public function fish_edit($id){

        $category = GroupCategory::where('id', 2)->get()->unique('category_name');
        $scategory = GroupSubCategory::all()->unique('name');
        $registr = Register::where('group_Cat_Id', 2)->where('in_grp_list', 2)->get();
        $edit_grp = GroupList::where('id', $id)->first();
        return view('Backend/group category/all_group/golf_edit', [
            'edit_grp' => $edit_grp,
            'category' => $category,
            'scategory' => $scategory,
            'registr' => $registr
        ]);

     }


     public function message_edit($id){

        $category = GroupCategory::where('id', 4)->get()->unique('category_name');
        $scategory = GroupSubCategory::all()->unique('name');
        $registr = Register::where('group_Cat_Id', 4)->where('in_grp_list', 2)->get();
        $edit_grp = GroupList::where('id', $id)->first();
        return view('Backend/group category/all_group/golf_edit', [
            'edit_grp' => $edit_grp,
            'category' => $category,
            'scategory' => $scategory,
            'registr' => $registr
        ]);

     }
     public function network_edit($id){

        $category = GroupCategory::where('id', 3)->get()->unique('category_name');
        $scategory = GroupSubCategory::all()->unique('name');
        $registr = Register::where('group_Cat_Id', 3)->where('in_grp_list', 2)->get();
        $edit_grp = GroupList::where('id', $id)->first();
        return view('Backend/group category/all_group/golf_edit', [
            'edit_grp' => $edit_grp,
            'category' => $category,
            'scategory' => $scategory,
            'registr' => $registr
        ]);

     }





     public function GroupExcelDownloadGolf(){

      return Excel::download(new GroupListExportGolf, 'group_list.xlsx');

     }

     public function GroupExcelDownloadFish(){

      return Excel::download(new GroupListExportFish, 'group_list.xlsx');

     }

     public function GroupExcelDownloadMessage(){

      return Excel::download(new GroupListExportMessage, 'group_list.xlsx');

     }

     public function GroupExcelDownloadNetwork(){

      return Excel::download(new GroupListExportNetwork, 'group_list.xlsx');

     }








    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        $grp_update = GroupList::findOrFail($request->grp_id);


        $grp_update->subcategory_id = $request->subcategory_id;
        $grp_update->category_id = $request->category_id[0];
        $grp_update->participate_1 = $request->participate_1;
        $grp_update->participate_2 = $request->participate_2;
        $grp_update->participate_3 = $request->participate_3;
        $grp_update->participate_4 = $request->participate_4;
        $grp_update->participate_5 = $request->participate_5;
        $grp_update->participate_6 = $request->participate_6;
        $grp_update->participate_7 = $request->participate_7;
        $grp_update->participate_8 = $request->participate_8;
        $grp_update->save();
        return back()->with('success', "Update Successful");
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
