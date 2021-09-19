<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\ContactMail;
class FormController extends Controller
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
        $age =Carbon::parse($request->get("dob"))->age;
        $request->request->add(["age" =>$age]);
        $res = $request->all();
        
        $validated = Validator::make($request->all(),$this->rules());
     
        if ($validated->fails()) {
            return redirect('/form')
                        ->withErrors($validated)
                        ->withInput();
        }
        $input =[];
        
        $input['unique_id'] =  time().mt_rand(0,9);
        $input["employee_code"] = $res["employee_code"];
        $input["name"] = $res["name"];
        $input["father_name"] =$res["father_name"];
        $input["mother_name"] = $res["mother_name"];
        $input["dob"] = $res["dob"];
        $input["age"] = $age;
        $input["blood_group"] = $res["blood_group"];
        $input["marital_status"] = $res["marital_status"];
        $input["present_address"] = $res["present_address"];
        $input["pre_contact"] = $res["pre_contact"];
        $input["pre_email"] = $res["pre_email"];
        $input["permanent_address"] = $res["permanent_address"];
        $input["per_contact"] = $res["per_contact"];
        $input["per_email"] = $res["per_email"];
        
        $input["qualification_sslc"] = $res["qualification_sslc"];
        $input["sslc_precentage"] = $res["sslc_precentage"];
        $input["sslc_result"] = $res["sslc_result"];
        $input["qualification_puc"] = $res["qualification_puc"] ?? 2;
        $input["puc_precentage"] = $res["puc_precentage"] ?? "";
        $input["puc_result"] = $res["puc_result"] ?? "";
        $input["qualification_iti"] = $res["qualification_iti"] ?? 2;
        $input["iti_precentage"] = $res["iti_precentage"] ?? "";
        $input["iti_result"] = $res["iti_result"] ?? "";

        $input["qualification_other"] = $res["qualification_other"] ?? 2 ;
        $input["qualification_other_text"] = $res["qualification_other_text"] ?? "";
        $input["other_precentage"] = $res["other_precentage"] ?? "";
        $input["other_result"] = $res["other_result"]?? "";
        $input["nominee_name"] = $res["nominee_name"];
        $input["nominee_age"] = $res["nominee_age"];
        $input["nominee_relationship"] = $res["nominee_relationship"];
        $input["shoes_size"] = $res["shoes_size"];
        $input["date_of_joining"] = $res["date_of_joining"];

        $input["divisioin"] = $res["divisioin"];
        $input["department"] = $res["department"];
        $input["previous_esi_no"] = $res["previous_esi_no"];
        $input["previous_pf_no"] = $res["previous_pf_no"];
        $input["bank_acc_no"] = implode("", $res["bank_acc_no"]);
        
        

        if ($request->hasFile('filePhoto')) {
            $file = $request->file('filePhoto');
            $destinationPath = public_path()."/uploads/".$res["employee_code"]."/";

            $file->move($destinationPath,$file->getClientOriginalName());
            
            //Storage::disk('public')->put($image , 'Contents');
        }
        $input["profile_path"] = $destinationPath.$file->getClientOriginalName();
        
        $employee = new Employees();
        $employee->fill($input)->save();

        return redirect('/form');
        
    }

    
    public function rules()
    {
        $rules =[];

        

        $rules["employee_code"] = "required|unique:employee_form,employee_code";
        $rules["name"] = "required";
        $rules["father_name"] = "required";
        $rules["mother_name"] = "required";
        $rules["dob"] = "required";
        $rules["age"] = "numeric|min:18";
        $rules["filePhoto"] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        $rules["blood_group"] = "required";
        $rules["marital_status"] = "required";
        $rules["present_address"] = "required";
        $rules["pre_contact"] = "required";
        $rules["pre_email"] = "required";
        $rules["permanent_address"] = "required";
        $rules["per_contact"] = "required";
        $rules["per_email"] = "required";

        $rules["qualification_sslc"] = "required";
        $rules["sslc_precentage"] = "required";
        $rules["sslc_result"] = "required";

        $rules["qualification_puc"] = "nullable";
        $rules["puc_precentage"] = "required_if:qualification_puc,true";
        $rules["puc_result"] = "equired_if:qualification_puc,true";

        $rules["qualification_iti"] = "nullable";
        $rules["iti_precentage"] = "required_if:qualification_iti,true";
        $rules["iti_result"] = "required_if:qualification_iti,true";

        $rules["qualification_other"] = "nullable";
        $rules["qualification_other_text"] = "required_if:qualification_other,true";
        $rules["other_precentage"] = "required_if:qualification_other,true";
        $rules["other_result"] = "required_if:qualification_other,true";

        $rules["nominee_name"] = "required";
        $rules["nominee_age"] = "required";
        $rules["nominee_relationship"] = "required";
        $rules["shoes_size"] = "required";
        $rules["date_of_joining"] = "required";
        $rules["divisioin"] = "required";
        $rules["department"] = "required";
        $rules["previous_esi_no"] = "required";
        $rules["previous_pf_no"] = "required";
        $rules["bank_acc_no"] = "required";
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
