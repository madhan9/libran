<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\NatureOfJob;
use App\Models\Researcher;
use App\Models\FinalResult;
use App\Models\User;
use App\Models\Status;
use App\Models\Payment;
use Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function step1index(Request $request)
    {
        $clients = Clients::all();
        $researcher = Researcher::all();
        $nature_of_job = NatureOfJob::all();

        $unique_id = $request->session()->get('unique_id');
        
        $final_result = FinalResult::where('unique_id', $unique_id)->first();
        return view('step1', compact(['clients','nature_of_job','researcher','final_result']));
    }

    public function step1store(Request $request)
    {
        $res = $request->all();
        
        $validated = Validator::make($request->all(),[
            'job_number' => 'required|unique:data|max:255',
        ]);

        if ($validated->fails()) {
            return redirect('/step1')
                        ->withErrors($validated)
                        ->withInput();
        }

        $input=[];
        $input['unique_id'] =  time().mt_rand(0,9);
        $input['client_name'] = $res['client_name'];
        $input['job_title'] = $res['job_title'];
        $input['job_number'] = $res['job_number'];
        $input['researcher'] = $res['researcher'];
        $input['nature_of_job'] = $res['nature_of_job'];
        $input['scripting'] = isset($res['scripting']) ? $res['scripting'] : '0';
        $input['coding'] = isset($res['coding'])? $res['coding'] : '0';
        $input['data_processing'] = isset($res['data_processing'])? $res['data_processing'] : '0';
        $input['multi_var_analysis'] = isset($res['multi_var_analysis'])? $res['multi_var_analysis'] : '0';
        $input['stats_model'] = isset($res['stats_model'])? $res['stats_model'] : '0';
        $input['job_recd_date'] = $res['job_recd_date'];
        $input['start_date'] = $res['start_date'];
        
        $unique_id = $request->session()->get('unique_id');
        if(isset($unique_id))
        {
            $final_result = FinalResult::where('unique_id', $unique_id)->first();
            $final_result->update($input);
        }
        else{
            $final_result = new FinalResult();
            $final_result->fill($input)->save();
        }
        
        $request->session()->put('unique_id', $final_result->unique_id);
        return redirect('/step2');
        
    }

    public function step2index(Request $request)
    {
        $unique_id = $request->session()->get('unique_id');
        $final_result = FinalResult::where('unique_id', $unique_id)->first();
        $users =  User::get(['id','username']);
        

        return view('step2', compact('final_result','users'));

    }

    public function step2store(Request $request)
    {
        $res = $request->all();
        $input =[];
       
        $input["person_incharge_1"] = $res["person_incharge_1"]  ?? "";
        $input["support_person_1"] = $res["support_person_1"]  ?? "";
        $input["exe_deliver_date_review_1"] = $res["exe_deliver_date_review_1"]  ?? "";
        $input["exe_deliver_date_final_1"] = $res["exe_deliver_date_final_1"]  ?? "";
        $input["final_delivary_1"] = $res["final_delivary_1"]  ?? "";
        $input["remarks_1"] = $res["remarks_1"]  ?? "";
        $input["person_incharge_2"] = $res["person_incharge_2"]  ?? "";
        $input["support_person_2"] = $res["support_person_2"]  ?? "";
        $input["exe_deliver_date_review_2"] =$res["exe_deliver_date_review_2"]  ?? "";
        $input["exe_deliver_date_final_2"] = $res["exe_deliver_date_final_2"]  ?? "";
        $input["final_delivary_2"] = $res["final_delivary_2"]  ?? "";
        $input["remarks_2"] = $res["remarks_2"] ?? "";
        $input["person_incharge_3"] =  $res["person_incharge_3"]  ?? "";
        $input["support_person_3"] = $res["support_person_3"]  ?? "";
        $input["exe_deliver_date_review_3"] =  $res["exe_deliver_date_review_3"]  ?? "";
        $input["exe_deliver_date_final_3"] =  $res["exe_deliver_date_final_3"]  ?? "";
        $input["final_delivary_3"] =  $res["final_delivary_3"]  ?? "";
        $input["remarks_3"] =  $res["remarks_3"]  ?? "";
        $input["person_incharge_4"]= $res["person_incharge_4"]  ?? "";
        $input["support_person_4"] = $res["support_person_4"]  ?? "";
        $input["exe_deliver_date_review_4"] = $res["exe_deliver_date_review_4"]  ?? "";
        $input["exe_deliver_date_final_4"] = $res["exe_deliver_date_final_4"]  ?? "";
        $input["final_delivary_4"] = $res["final_delivary_4"]  ?? "";
        $input["remarks_4"] = $res["remarks_4"]  ?? "";
        $input["person_incharge_5"] = $res["person_incharge_5"]  ?? "";
        $input["support_person_5"] =  $res["support_person_5"]  ?? "";
        $input["exe_deliver_date_review_5"] =  $res["exe_deliver_date_review_5"]  ?? "";
        $input["exe_deliver_date_final_5"] = $res["exe_deliver_date_final_5"]  ?? "";
        $input["final_delivary_5"] =  $res["final_delivary_5"]  ?? "";
        $input["remarks_5"] =  $res["remarks_5"]  ?? "";

        $unique_id = $request->session()->get('unique_id');
       
        if(isset($unique_id))
        {
            $final_result = FinalResult::where('unique_id', $unique_id)->first();
            $final_result->update($input);
        }

        return redirect('/step3');
    }

    public function step3index(Request $request)
    {
        $unique_id = $request->session()->get('unique_id');
        $final_result = FinalResult::where('unique_id', $unique_id)->first();
              
        return view('step3', compact('final_result'));

    }

    public function step3store(Request $request)
    {
        $res = $request->all();
        
        $input = [];
       
        $input["time_taken_date_1"] = $res["time_taken_date_1"]  ?? "";
        $input["time_taken_hour_1"] = $res["time_taken_hour_1"]  ?? "";
        $input["time_taken_date_2"] = $res["time_taken_date_2"]  ?? "";
        $input["time_taken_hour_2"] = $res["time_taken_hour_2"]  ?? "";
        $input["time_taken_date_3"] = $res["time_taken_date_3"]  ?? "";
        $input["time_taken_hour_3"] = $res["time_taken_hour_3"]  ?? "";
        $input["time_taken_date_4"] = $res["time_taken_date_4"]  ?? "";
        $input["time_taken_hour_4"] = $res["time_taken_hour_4"]  ?? "";
        $input["time_taken_date_5"] = $res["time_taken_date_5"]  ?? "";
        $input["time_taken_hour_5"] = $res["time_taken_hour_5"]  ?? "";

        $unique_id = $request->session()->get('unique_id');
      
        if(isset($unique_id))
        {
          
            $final_result = FinalResult::where('unique_id', $unique_id)->first();
            $final_result->update($input);
        }

        return redirect('/step4');
    }

    public function step4index(Request $request)
    {
        $unique_id = $request->session()->get('unique_id');
        $final_result = FinalResult::all();
        $status = Status::all();
              
        return view('step4', compact('final_result',"status"));

    }

    public function step4store(Request $request,Payment $payment)
    {
        $res = $request->all();
        
        $input =[];
        $input['unique_no'] =  time().mt_rand(0,9);
        $input["job_number"] = $res["pro_number"];
        $input["cur_status_1"] = $res["cur_status_1"];
        $input["final_cost_1"] = $res["final_cost_1"];
        $input["date_of_po_1"] = $res["date_of_po_1"];
        $input["date_of_invoice_1"] = $res["date_of_invoice_1"];
        $input["date_of_payment_receipt_1"] = $res["date_of_payment_receipt_1"];
        $input["cur_status_2"] = $res["cur_status_2"];
        $input["final_cost_2"] = $res["final_cost_2"];
        $input["date_of_po_2"] = $res["date_of_po_2"];
        $input["date_of_invoice_2"] = $res["date_of_invoice_2"];
        $input["date_of_payment_receipt_2"] = $res["date_of_payment_receipt_2"];
        $input["cur_status_3"] = $res["cur_status_3"];
        $input["final_cost_3"] = $res["final_cost_3"];
        $input["date_of_po_3"] = $res["date_of_po_3"];
        $input["date_of_invoice_3"] = $res["date_of_invoice_3"];
        $input["date_of_payment_receipt_3"] = $res["date_of_payment_receipt_3"];
        $input["cur_status_4"] = $res["cur_status_4"];
        $input["final_cost_4"] = $res["final_cost_4"];
        $input["date_of_po_4"] = $res["date_of_po_4"];
        $input["date_of_invoice_4"] = $res["date_of_invoice_4"];
        $input["date_of_payment_receipt_4"] = $res["date_of_payment_receipt_4"];
        $input["cur_status_5"] = $res["cur_status_5"];
        $input["final_cost_5"] = $res["final_cost_5"];
        $input["date_of_po_5"] = $res["date_of_po_5"];
        $input["date_of_invoice_5"] = $res["date_of_invoice_5"];
        $input["date_of_payment_receipt_5"] = $res["date_of_payment_receipt_5"];
       
        $payment= Payment::where('job_number', $res["pro_number"])->first();
    
        if(empty($payment))
        {   $payment= new Payment();
            $payment->fill($input)->save();
        }
        else{
            $payment= Payment::find($payment->id);
            $payment->update($input);
        }

        return redirect('/step4');
    }
}
