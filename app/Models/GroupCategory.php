<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupCategory extends Model
{
    use HasFactory, SoftDeletes;


    function get_subcategory(){
        return $this->hasMany('App\Models\GroupSubCategory', 'category_id');
    }


    function Register(){
        return $this->hasMany('App\Models\Register', 'category_name');
    }


    function get_category(){
        return $this->hasMany('App\Models\GroupList', 'category_id');
    }
}
