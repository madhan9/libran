<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableEpf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epf_form', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('name');
            $table->string('dob');
            $table->string('father_name');
            $table->string('gender');   
            $table->string('contact_no');
            $table->string('email');
            $table->string('pfs_scheme');
            $table->string('uan_number');
            $table->string('eps_scheme');
            $table->string('region_code');
            $table->string('office_code');
            $table->string('establishment_id');
            $table->string('extension');
            $table->string('account_no');
            $table->string('date_of_exit');
            $table->string('scheme_certificate_no');
            $table->string('ppo_no');
            $table->string('qualification');
            $table->string('marital_status');
            $table->string('specially_abled_flag');
            $table->string('specially_abled');

            $table->text('name_of_on_KYC_document_1');
            $table->string('document_no_1');
            $table->string('remarks_1');

            $table->text('name_of_on_KYC_document_2');
            $table->string('document_no_2');
            $table->string('remarks_2');

            $table->text('name_of_on_KYC_document_3');
            $table->string('document_no_3');
            $table->string('remarks_3');

            $table->text('name_of_on_KYC_document_4');
            $table->string('document_no_4');
            $table->string('remarks_4');

            $table->text('name_of_on_KYC_document_5');
            $table->string('document_no_5');
            $table->string('remarks_5');

            $table->text('name_of_on_KYC_document_6');
            $table->string('document_no_6');
            $table->string('remarks_6');

            $table->text('name_of_on_KYC_document_7');
            $table->string('document_no_7');
            $table->string('remarks_7');

            $table->text('name_of_on_KYC_document_8');
            $table->string('document_no_8');
            $table->string('remarks_8');

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
