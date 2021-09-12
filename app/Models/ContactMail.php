<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMail extends Model
{
    protected $table="contact_mail";


    protected $fillable = ['unique_no','name','email','mobile_no','message','created_at'];
}
