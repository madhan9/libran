<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table="employee_form";


    protected $fillable = [
		'unique_id','employee_code','name','father_name','mother_name','dob','age','blood_group','marital_status','present_address','pre_contact','pre_email','permanent_address','per_contact',
		'per_email',"qualification_sslc","sslc_precentage","sslc_result","qualification_puc","puc_precentage","puc_result","qualification_iti","iti_precentage","iti_result","qualification_other","qualification_other_text","other_precentage","other_result","nominee_name","nominee_age","nominee_relationship","shoes_size","date_of_joining","divisioin","department","previous_esi_no","previous_pf_no","bank_acc_no","profile_path"
    ];
}
