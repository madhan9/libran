<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
         Schema::create('employee_form', function (Blueprint $table) {
            $table->id();
            $table->integer('unique_id')->unique();
            $table->string('employee_code');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('dob');
            $table->string('age');   
            $table->string('blood_group');
            $table->string('marital_status');
            $table->string('present_address');
            $table->string('pre_contact');
            $table->string('pre_email');
            $table->string('permanent_address');
            $table->string('per_contact');
            $table->string('per_email');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
