<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupList extends Model
{

    use HasFactory, SoftDeletes;

    function grp_s_category(){
        return $this->belongsTo('App\Models\GroupSubCategory', 'subcategory_id');
    }

    function grp_category(){
        return $this->belongsTo('App\Models\GroupCategory', 'category_id');
    }


    function grp_p1_register(){
        return $this->belongsTo(Register::class, 'participate_1');
    }
    function grp_p2_register(){
        return $this->belongsTo(Register::class, 'participate_2');
    }
    function grp_p3_register(){
        return $this->belongsTo(Register::class, 'participate_3');
    }
    function grp_p4_register(){
        return $this->belongsTo(Register::class, 'participate_4');
    }
    function grp_p5_register(){
        return $this->belongsTo(Register::class, 'participate_5');
    }
    function grp_p6_register(){
        return $this->belongsTo(Register::class, 'participate_6');
    }
    function grp_p7_register(){
        return $this->belongsTo(Register::class, 'participate_7');
    }
    function grp_p8_register(){
        return $this->belongsTo(Register::class, 'participate_8');
    }
}
