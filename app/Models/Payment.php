<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    function regis_id(){
        return $this->belongsTo('App\Models\Register', 'register_id');
    }
}
