<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EPF extends Model
{
    use HasFactory;

    protected $table="epf_form";


    protected $fillable = [
		'unique_id','name','dob','father_name','gender','contact_no','email','pfs_scheme','uan_number','eps_scheme','region_code','office_code','establishment_id','extension',
		'account_no',"date_of_exit","scheme_certificate_no","ppo_no","qualification","marital_status","specially_abled_flag","specially_abled","name_of_on_KYC_document_1","document_no_1","remarks_1","name_of_on_KYC_document_2","document_no_2","remarks_2","name_of_on_KYC_document_3","document_no_3","remarks_3","name_of_on_KYC_document_4","document_no_4","remarks_4","name_of_on_KYC_document_5","document_no_5","remarks_5","name_of_on_KYC_document_6","document_no_6","remarks_6","name_of_on_KYC_document_7","document_no_7","remarks_7","name_of_on_KYC_document_8","document_no_8","remarks_8"
    ];
}
