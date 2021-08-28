<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    protected $table="researcher";


    protected $fillable = [
        'unique_no',
        'name',
    ];
}
