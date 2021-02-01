<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
    	'user_id',
    	'first_name',
    	'last_name' ,
    	'middle_name',
    	'address',
    	'dob',
    	'age',
    	'gender',
    	'birth_place',
    	'civil_status',
    	'nationality',
    	'mobile',
    	'religion',
    	'fb_account',
    ];

    protected $guarded = ['id'];
}
