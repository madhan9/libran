<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatureOfJob extends Model
{
    protected $table="nature_of_job";


    protected $fillable = [
        'unique_no',
        'name',
    ];
}
