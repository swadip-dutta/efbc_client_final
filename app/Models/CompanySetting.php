<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    use HasFactory;
    protected $fillable = [
				'company_name',
	            'phone',
	            'email',
	            'facebook',
	            'twitter',
	            'instragram',
	            'linkedin',
	            'pinterest',
	            'factory',
	            'address',
	            'user_id',
	            'register_id',
			    ];


	}
