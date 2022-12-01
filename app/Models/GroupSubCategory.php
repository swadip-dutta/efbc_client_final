<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupSubCategory extends Model
{
    use HasFactory, SoftDeletes;


    function get_category(){
        return $this->belongsTo('App\Models\GroupCategory', 'group_Cat_Id');
    }


    function main_category(){
        return $this->belongsTo('App\Models\GroupCategory', 'category_id');
    }


    function get_subcategory(){
        return $this->hasMany('App\Models\GroupList', 'subcategory_id');
    }


    function get_reg_sub_category(){
        return $this->hasMany('App\Models\Register', 'group_Cat_Id');
    }
}
