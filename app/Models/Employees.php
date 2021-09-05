<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table="employee_form";


    protected $fillable = [
        'unique_no','employee_no','name','father_name','mother_name','dob','age','blood_group','marital_status',
		'present_address','pre_contact','pre_email','permanent_address','per_contact','per_email'
    ];
}
