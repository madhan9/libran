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
        $input["age"] = $res["age"] ?? "";
        $input["blood_group"] = $res["blood_group"];
        $input["marital_status"] = $res["marital_status"];
        $input["present_address"] = $res["present_address"];
        $input["pre_contact"] = $res["pre_contact"];
        $input["pre_email"] = $res["pre_email"];
        $input["permanent_address"] = $res["permanent_address"];
        $input["per_contact"] = $res["per_contact"];
        $input["per_email"] = $res["per_email"];

        if ($request->hasFile('filePhoto')) {
            $file = $request->file('filePhoto');
            $destinationPath = public_path()."/uploads/".$res["employee_code"]."/";

            $file->move($destinationPath,$file->getClientOriginalName());
            dd($destinationPath);
            //Storage::disk('public')->put($image , 'Contents');
        }

        $employee = new Employees();
        $employee->fill($input)->save();

        return redirect('/form');
        
    }

    
    public function rules()
    {
        $rules =[];

        

        $rules["employee_code"] = "required";
        $rules["name"] = "required";
        $rules["father_name"] = "required";
        $rules["mother_name"] = "required";
        $rules["dob"] = "required";
        //$rules["age"] = "required";
        $rules["filePhoto"] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        $rules["blood_group"] = "required";
        $rules["marital_status"] = "required";
        $rules["present_address"] = "required";
        $rules["pre_contact"] = "required";
        $rules["pre_email"] = "required";
        $rules["permanent_address"] = "required";
        $rules["per_contact"] = "required";
        $rules["per_email"] = "required";

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
