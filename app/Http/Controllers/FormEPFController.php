<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EPF;
use Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\ContactMail;

class FormEPFController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  

    public function store(Request $request)
    {
        
        $res = $request->all();
        
        //dd($res);
        $validated = Validator::make($request->all(),$this->rules());
     
        if ($validated->fails()) {
            return redirect('/epf-form')
                        ->withErrors($validated)
                        ->withInput();
        }
        $input =[];
        
        $input['unique_id'] =  time().mt_rand(0,9);
        $input["name"] = $res["name"]?? "";
        $input["dob"] = $res["dob"]?? "";
        $input["father_name"] =$res["father_name"]?? "";
        $input["gender"] = $res["gender"]?? "";
        $input["contact_no"] = $res["contact_no"]?? "";
        $input["email"] = $res["email"]?? "";
        $input["pfs_scheme"] = $res["pfs_scheme"]?? "";
        $input["uan_number"] = $res["uan_number"]?? "";

        $input["eps_scheme"] = $res["eps_scheme"]?? "";
        $input["region_code"] = $res["region_code"]?? "";
        $input["office_code"] = $res["office_code"]?? "";
        $input["establishment_id"] = $res["establishment_id"]?? "";
        $input["extension"] = $res["extension"]?? "";
        $input["account_no"] = $res["account_no"]?? "";
        $input["date_of_exit"] = $res["date_of_exit"]?? "";
        $input["scheme_certificate_no"] = $res["scheme_certificate_no"]?? "";

        $input["ppo_no"] = $res["ppo_no"];
        $input["qualification"] = $res["qualification"] ?? "";
        $input["marital_status"] = $res["marital_status"] ?? "";
        $input["specially_abled_flag"] = $res["specially_abled_flag"] ?? "";
        $input["specially_abled"] = $res["specially_abled"] ?? 0;
        $input["name_of_on_KYC_document_1"] = $res["name_of_on_KYC_document_1"] ?? "";
        $input["document_no_1"] = $res["document_no_1"] ?? "";
        $input["remarks_1"] = $res["remarks_1"] ?? "";

        $input["name_of_on_KYC_document_2"] = $res["name_of_on_KYC_document_2"] ?? "";
        $input["document_no_2"] = $res["document_no_2"] ?? "";
        $input["remarks_2"] = $res["remarks_2"]?? "";
        $input["name_of_on_KYC_document_3"] = $res["name_of_on_KYC_document_3"]?? "";
        $input["document_no_3"] = $res["document_no_3"]?? "";
        $input["remarks_3"] = $res["remarks_3"]?? "";
        $input["name_of_on_KYC_document_4"] = $res["name_of_on_KYC_document_4"]?? "";
        $input["document_no_4"] = $res["document_no_4"]?? "";
        $input["remarks_4"] = $res["remarks_4"]?? "";
        $input["name_of_on_KYC_document_5"] = $res["name_of_on_KYC_document_5"]?? "";
        $input["document_no_5"] = $res["document_no_5"]?? "";
        $input["remarks_5"] = $res["remarks_5"]?? "";

        $input["name_of_on_KYC_document_6"] = $res["name_of_on_KYC_document_6"]?? "";
        $input["document_no_6"] = $res["document_no_6"]?? "";
        $input["remarks_6"] = $res["remarks_6"]?? "";
        $input["name_of_on_KYC_document_7"] = $res["name_of_on_KYC_document_7"]?? "";
        $input["document_no_7"] = $res["document_no_7"]?? "";
        $input["remarks_7"] = $res["remarks_7"]?? "";
        $input["name_of_on_KYC_document_8"] = $res["name_of_on_KYC_document_8"]?? "";
        $input["document_no_8"] = $res["document_no_8"]?? "";
        $input["remarks_8"] = $res["remarks_8"]?? "";
        


    
        $epf = new EPF();
        $epf->fill($input)->save();

        return redirect('/epf-form');
        
    }

    
    public function rules()
    {
        $rules =[];

    
        $rules["name"] = "required";
        $rules["dob"] = "required";
        $rules["father_name"] = "required";
        $rules["gender"] = "required";
        $rules["contact_no"] = "required|integer|digits:10";
        $rules["email"] = "required|email";

        $rules["pfs_scheme"] = 'required';
        $rules["eps_scheme"] = "required";
        $rules["uan_number"] = "";       
        $rules["region_code"] = "";
        $rules["office_code"] = "";
        $rules["establishment_id"] = "";
        $rules["extension"] = "";
        //$rules["account_no"] = "integer";
        $rules["date_of_exit"] = "";
        $rules["scheme_certificate_no"] = "";
        $rules["ppo_no"] = "";


        $rules["qualification"] = "required";
        $rules["marital_status"] = "required";
        $rules["specially_abled_flag"] = "required";
        $rules["specially_abled"] = "required_if:specially_abled_flag,1";

        $rules["name_of_on_KYC_document_1"] = "required";
        $rules["document_no_1"] = "required_if:name_of_on_KYC_document_1,true";
        $rules["remarks_1"] = "nullable";

        $rules["name_of_on_KYC_document_2"] = "nullable";
        $rules["document_no_2"] = "required_if:name_of_on_KYC_document_2,true";
        $rules["remarks_2"] = "nullable";
        $rules["name_of_on_KYC_document_3"] = "nullable";
        $rules["document_no_3"] = "required_if:name_of_on_KYC_document_3,true";
        $rules["remarks_3"] = "nullable";
        $rules["name_of_on_KYC_document_4"] = "nullable";
        $rules["document_no_4"] = "required_if:name_of_on_KYC_document_4,true";
        $rules["remarks_4"] = "nullable";
        $rules["name_of_on_KYC_document_5"] = "nullable";
        $rules["document_no_5"] = "required_if:name_of_on_KYC_document_5,true";
        $rules["remarks_5"] = "nullable";

        $rules["name_of_on_KYC_document_6"] = "nullable";
        $rules["document_no_6"] = "required_if:name_of_on_KYC_document_6,true";
        $rules["remarks_6"] = "nullable";
        $rules["name_of_on_KYC_document_7"] = "nullable";
        $rules["document_no_7"] = "required_if:name_of_on_KYC_document_7,true";
        $rules["remarks_7"] = "nullable";
        $rules["name_of_on_KYC_document_8"] = "nullable";
        $rules["document_no_8"] = "required_if:name_of_on_KYC_document_8,true";
        $rules["remarks_8"] = "nullable";

        return $rules;
    }


    public function contactMail(Request $request)
    {
        
        $res = $request->all();
        
        $contact_mail = new ContactMail();
        $input =[];
        
        $input['unique_no'] =  time().mt_rand(0,9);
        $input["name"] = $res["name"];
        $input["email"] = $res["email"];
        $input["mobile_no"] =$res["mobile_no"];
        $input["message"] = $res["message"];
        $input["created_at"] = Carbon::today();

        $validated = Validator::make($input,[
            "name" => "required|max:100",
            "email" => "required|email",
            "mobile_no" => "required|integer",
            "message" => "required|max:1000"
        ]);

        if ($validated->fails()) {
            return redirect('/')
                        ->withErrors($validated)
                        ->withInput();
        }

        $contact_mail->fill($input)->save();

        return view('welcome');
    }
}
