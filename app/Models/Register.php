<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register extends Model
{
    use HasFactory, SoftDeletes;


    function Group_Category(){
        return $this->belongsTo('App\Models\GroupCategory', 'group_Cat_Id');
    }

    function get_category_n(){
        return $this->belongsTo('App\Models\GroupCategory', 'group_Cat_Id');
    }


    function get_category_sub(){
        return $this->belongsTo('App\Models\GroupSubCategory', 'group_Cat_Id');
    }


    function grp_r_register(){
        return $this->hasMany(GroupList::class);
    }


    function regis_pay(){
        return $this->hasMany('App\Models\Payment', 'register_id');
    }
}
