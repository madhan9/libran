<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalResult extends Model
{
    
    protected $table="data";

    protected $fillable = ['unique_id',"client_name","job_title","job_number","researcher","nature_of_job","scripting","coding","data_processing","multi_var_analysis","stats_model",
                            "job_recd_date","start_date",'person_incharge_1','support_person_1','exe_deliver_date_review_1','exe_deliver_date_final_1','final_delivary_1', 'remarks_1','person_incharge_2','support_person_2','exe_deliver_date_review_2','exe_deliver_date_final_2','final_delivary_2','remarks_2','person_incharge_3',
                            'support_person_3','exe_deliver_date_review_3','exe_deliver_date_final_3','final_delivary_3','remarks_3', 'person_incharge_4', 'support_person_4',
                            'exe_deliver_date_review_4','exe_deliver_date_final_4','final_delivary_4','remarks_4','person_incharge_5',
                            'support_person_5','exe_deliver_date_review_5','exe_deliver_date_final_5','final_delivary_5','remarks_5',"time_taken_date_1","time_taken_hour_1",'time_taken_date_2','time_taken_date_3','time_taken_hour_2','time_taken_hour_3','time_taken_date_4','time_taken_hour_4','time_taken_date_5','time_taken_hour_5'];
}