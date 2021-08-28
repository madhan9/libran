<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->char('unique_id', 16);
            $table->char('client_name', 10);
            $table->char('job_title', 150);
            $table->char('job_number', 50);
            $table->char('researcher', 10);
            $table->char('nature_of_job', 10);
            $table->char('scripting', 10);
            $table->char('coding', 10);
            $table->char('data_processing', 10);
            $table->char('multi_var_analysis', 10);
            $table->char('stats_model', 10);
            $table->dateTime('job_recd_date');
            $table->dateTime('start_date');
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
        Schema::dropIfExists('data');
    }
}
