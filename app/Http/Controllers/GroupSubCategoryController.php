<?php

namespace App\Http\Controllers;
use App\Models\GroupCategory;
use App\Models\GroupSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;
use Illuminate\Validation\Rules\Exists;

class GroupSubCategoryController extends Controller
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

        return view('Backend/group category/add_sub_category', [
            'categories' => GroupCategory::orderBy('category_name', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $grp_s_n_cat = GroupSubCategory::where('name', $request->subcategory_name);
        $grp_s_cat = GroupSubCategory::where('category_id', $request->category_id);
        if($grp_s_n_cat->exists() && $grp_s_cat->exists())
        {
            return back()->with('s_insert', "Already Insert");
        }

        else{
            GroupSubCategory::insert([
                'name' => $request->subcategory_name,
                'slug' => Str::slug($request->subcategory_name),
                'category_id' => $request->category_id,
                'created_at' => Carbon::now()
            ]);
            return back()->with('s_s_insert', "Insert Successful");
        }

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $sub_Cat = GroupSubCategory::findOrFail($id);

        return view('Backend/group category/edit_sub_category', [
            'sub_Cat' => $sub_Cat
        ]);
    }


    public function update_subcategory(Request $request){
        $up_sub = GroupSubCategory::findOrFail($request->subcategory_id);
        $up_sub->name = $request->subcategory_name;
        $up_sub->save();
        return back()->with('success', "Update Successful");
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
