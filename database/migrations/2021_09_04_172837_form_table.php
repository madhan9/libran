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
            $table->string('unique_id')->unique();
            $table->string('employee_code')->unique();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('dob');
            $table->string('age');   
            $table->string('blood_group');
            $table->string('marital_status');
            $table->text('present_address');
            $table->string('pre_contact');
            $table->string('pre_email');
            $table->text('permanent_address');
            $table->string('per_contact');
            $table->string('per_email');
            $table->string('qualification_sslc');
            $table->string('sslc_precentage');
            $table->string('sslc_result');
            $table->string('qualification_puc');
            $table->string('puc_precentage');
            $table->string('puc_result');
            $table->string('qualification_iti');
            $table->string('iti_precentage');
            $table->string('iti_result');
            $table->string('qualification_other');
            $table->text('qualification_other_text');
            $table->string('other_precentage');
            $table->string('other_result');
            $table->string('nominee_name');
            $table->string('nominee_age');
            $table->string('nominee_relationship');
            $table->string('shoes_size');
            $table->string('date_of_joining');
            $table->string('divisioin');
            $table->string('department');
            $table->string('previous_esi_no');
            $table->string('previous_pf_no');
            $table->string('bank_acc_no');
            $table->text('profile_path');
            

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
