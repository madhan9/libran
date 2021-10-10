@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="container" method="POST" action="{{ url('epf-form-save') }}" enctype="multipart/form-data">  
  @csrf
    <div class="form-row">
   
    <div class="col-md-4 mb-3">
     
      <input type="text" class="form-control" tabindex="2" name="name"  placeholder="Name"  required  value="{{ old('name') }}">
    </div>
    <div class="col-md-4 mb-3">
     
     <input type="date" class="form-control" tabindex="5" name="dob" id="dob"  placeholder="Date Of Birth" required max=" {{\Carbon\Carbon::today()->startOfYear()->subYears(18)->format('Y-m-d')}}"
     value="{{ old('dob',\Carbon\Carbon::today()->startOfYear()->subYears(18)->format('Y-m-d') ) }}">
    </div>
  </div>
  <div class="form-row">
   
    <div class="col-md-4 mb-3">
     
       <input type="text" class="form-control" tabindex="3" name="father_name"  placeholder="Father's Name" required value="{{ old('father_name') }}">

    </div>
    <div class="col-md-4 mb-3">
     
     <input type="text" class="form-control" tabindex="4" name="gender"  placeholder="Gender" required value="{{ old('gender') }}">
    </div>
  </div>
  <div class="form-row">
   
    <div class="col-md-4 mb-3">
     
      <input type="text" class="form-control" tabindex="6" name="contact_no" placeholder="Mobile No" required value="{{ old('contact_no') }}" maxlength="10" minlength="10" onkeypress="isNumberKey(event)">
    </div>
    <div class="col-md-4 mb-3">
     
      <input type="text" class="form-control" tabindex="7" name="email"  placeholder="E Mail" required value="{{ old('email') }}">
    </div>
  </div>
   <div class="form-row">
    <label class="form-label col-12">
    Whether Earlier A Member of the Emloyees's Provident Fund Scheme, 1952?
  </label>
  <br>
    <div class="col-md-1 col-sm-12">  
      <input type="radio" name="pfs_scheme" id="prf_scheme_1" value="1">
      <label for="prf_scheme_1">Yes</label>
    </div>
    <div class="col-md-1 col-sm-12">  
      <input type="radio" name="pfs_scheme" id="prf_scheme_2" value="2">
      <label for="prf_scheme_2">No</label>
    </div>
   </div>
     <div class="form-row">
      <label class="form-label col-12">
        Whether Earlier A Member of the Emloyees's Pension Scheme, 1955?
      </label>
    <br>
    <div class="col-md-1 col-sm-12">  
      <input type="radio" name="eps_scheme" id="pension_scheme_1" value="1">
      <label for="pension_scheme_1">Yes</label>
    </div>
    <div class="col-md-1 col-sm-12">  
      <input type="radio" name="eps_scheme" id="pension_scheme_2" value="2">
      <label for="pension_scheme_2">No</label>
    </div>
   </div>
      <div class="form-row">
      <label class="form-label col-12">
        The Details of the Universal Account NUmber(UAN) 
      </label>
      
     <div class="col-md-4 mb-3">
       
        <input type="text" class="form-control" tabindex="6" name="uan_number" placeholder="Universal Account NUmber(UAN)" value="{{ old('uan_number') }}"  onkeypress="isNumberKey(event)">
      </div>
        <span class="col-12 text-center">OR</span>

        <label class="form-label col-12">
         Previous PF Member ID
      </label>
     <div class="col-md-2 mb-3">
        <input type="text" class="form-control" tabindex="6" name="region_code" placeholder="Region Code"  value="{{ old('region_code') }}"  onkeypress="isNumberKey(event)">
      </div>
       <div class="col-md-2 mb-3">
        <input type="text" class="form-control" tabindex="6" name="office_code" placeholder="Office Code"  value="{{ old('office_code') }}"  onkeypress="isNumberKey(event)">
      </div>
       <div class="col-md-2 mb-3">
        <input type="text" class="form-control" tabindex="6" name="establishment_id" placeholder="Establishment ID"  value="{{ old('establishment_id') }}"  onkeypress="isNumberKey(event)">
      </div>
       <div class="col-md-2 mb-3">
        <input type="text" class="form-control" tabindex="6" name="extension" placeholder="Extension"  value="{{ old('extension') }}"  onkeypress="isNumberKey(event)">
      </div>
       <div class="col-md-2 mb-3">
        <input type="text" class="form-control" tabindex="6" name="account_no" placeholder="Account Number"  value="{{ old('account_no') }}" onkeypress="isNumberKey(event)">
      </div>
   </div>
   <div class="form-row">
      <label class="form-label col-12">
        Date of Exit for previous Member ID
      </label>
    <br>
    <div class="col-md-3 col-sm-12">  
      <input type="date" name="pension_scheme" class="form-control" id="date_of_exit">
    </div>
   
   </div>
   <div class="form-row  mt-1">
      <label class="form-label col-12">
       If Scheme Certificate Issued for Previous Employment, Then Scheme Certificate Number
      </label>
    <br>
    <div class="col-md-3 col-sm-12">  
       <input type="text" class="form-control" tabindex="6" name="scheme_certificate_no" placeholder="Scheme Certificate Number"  value="{{ old('scheme_certificate_no') }}"  onkeypress="isNumberKey(event)">
    </div>
   
   </div>
   <div class="form-row mt-1">
      <label class="form-label col-12">
        If Pension PaymnetOrder(PPO) Issued for Previous Employment, Then PPO Number
      </label>
    <br>
    <div class="col-md-3 col-sm-12">  
      <input type="text" class="form-control" tabindex="6" name="ppo_no" placeholder="PPO Number" value="{{ old('ppo_no') }}"  onkeypress="isNumberKey(event)">
    </div>
   
   </div>
   <div class="form-row mt-1">
      <label class="form-label col-12">
        Educational Qualification
      </label>
    <br>
    <div class="col-md-12 col-sm-12">  
     <table class="table table-bordered col-12">
       <thead>
         <tr>
           <th class="text-center">Illiterate</th>
           <th class="text-center">Non Matric</th>
           <th class="text-center">Matric</th>
           <th class="text-center">Senior Secondary</th>
           <th class="text-center">Graduate</th>
           <th class="text-center">Post Graduate</th>
           <th class="text-center">Doctor</th>
           <th class="text-center">Technical/Professional</th>  
         </tr>
       </thead>
        <tbody>
         <tr>
          @for($i=1;$i <=8;$i++)
           <td class="text-center"><input type="radio" name="qualification" id="qualification_{{$i}}" value="{{$i}}"></td>
          @endfor
         </tr>  
       </tbody>
     </table>
    </div>
   </div>
   <div class="form-row mt-1">
      <label class="form-label col-12">
        Marital Status
      </label>
    <br>
    <div class="col-md-5 col-sm-12">  
     <table class="table table-bordered col-12">
       <thead>
         <tr>
           <th class="text-center">Married</th>
           <th class="text-center">Unmarried</th>
           <th class="text-center">Widow/Widower</th>
           <th class="text-center">Divorcee</th>
         </tr>
       </thead>
        <tbody>
         <tr>
          @for($i=1;$i <=4;$i++)
           <td class="text-center"><input type="radio" name="marital_status" id="marital_status_{{$i}}" value="{{$i}}"></td>
          @endfor
         </tr>
       </tbody>
     </table>
    </div>
   </div>
      <div class="form-row">
      <label class="form-label col-12">
        Specially Abled?
      </label>
    <br>
    <div class="col-md-1 col-sm-12">  
      <input type="radio" name="specially_abled_flag" id="specially_abled_flag_1" value="1">
      <label for="pension_scheme_1">Yes</label>
    </div>
    <div class="col-md-1 col-sm-12">  
      <input type="radio" name="specially_abled_flag" id="specially_abled_flag_2" value="2">
      <label for="pension_scheme_2">No</label>
    </div>
   </div>
<div class="form-row mt-1">
    <div class="col-md-5 col-sm-12">  
     <table class="table table-bordered col-12">
       <thead>
         <tr>
           <th class="text-center">Locomotive</th>
           <th class="text-center">Visual </th>
           <th class="text-center">Hearing</th>
         </tr>
       </thead>
        <tbody>
         <tr>
          @for($i=1;$i <=3;$i++)
           <td class="text-center"><input type="radio" name="specially_abled" id="specially_abled_{{$i}}" value="{{$i}}"></td>
          @endfor
         </tr>
       </tbody>
     </table>
    </div>
   </div>

   <div class="form-row mt-1">
      <label class="form-label col-12">
        KYC Details
      </label>
    <div class="col-md-12 col-sm-12">  
     <table class="table table-bordered col-12">
       <thead>
         <tr>
           <th class="text-center">KYC Document Type</th>
           <th class="text-center">Name of on KYC Document </th>
           <th class="text-center">Number</th>
           <th class="text-center">Remarks, if any</th>
         </tr>
       </thead>
        <tbody>
         <tr>
           <td class="text-left"> Bank Account -1*</td>
         
           <td class="text-center">
            <input type="text" required class="form-control kyc-filed" value="{{ old('name_of_on_KYC_document_1') }}" name="name_of_on_KYC_document_1" id="name_of_on_KYC_document_1" >
            </td>
            <td class="text-center">
              <input type="text" required onkeypress="isNumberKey(event)" value="{{ old('document_no_1') }}" class="form-control" name="document_no_1" id="document_no_1" >
           </td>
            <td class="text-center">
              <input type="text" class="form-control" value="{{ old('remarks_1') }}" name="remarks_1" id="remarks_1" >
          </td>
          
         </tr>
         <tr>
           <td class="text-left"> NPR/Adhaar</td>
         <td class="text-center">
            <input type="text" class="form-control kyc-filed" value="{{ old('name_of_on_KYC_document_2') }}" name="name_of_on_KYC_document_2" id="name_of_on_KYC_document_2" >
            </td>
            <td class="text-center">
              <input type="text" onkeypress="isNumberKey(event)"  value="{{ old('document_no_2') }}"class="form-control" name="document_no_2" id="document_no_2" disabled="true">
           </td>
            <td class="text-center">
              <input type="text" class="form-control" value="{{ old('remarks_2') }}" name="remarks_2" id="remarks_2" disabled="true">
          </td>
         </tr>
         <tr>
           <td class="text-left"> Permanent Account Number(PAN)</td>
          <td class="text-center">
            <input type="text" class="form-control kyc-filed"  value="{{ old('name_of_on_KYC_document_3') }}" name="name_of_on_KYC_document_3" id="name_of_on_KYC_document_3" >
            </td>
            <td class="text-center">
              <input type="text" onkeypress="isNumberKey(event)"  value="{{ old('document_no_3') }}" class="form-control" name="document_no_3" id="document_no_3" disabled="true">
           </td>
            <td class="text-center">
              <input type="text" class="form-control" name="remarks_3"  value="{{ old('remarks_3') }}" id="remarks_3" disabled="true">
          </td>
         </tr>
         <tr>
           <td class="text-left"> Passport</td>
          <td class="text-center">
            <input type="text" class="form-control kyc-filed" value="{{ old('name_of_on_KYC_document_4') }}" name="name_of_on_KYC_document_4" id="name_of_on_KYC_document_4" >
            </td>
            <td class="text-center">
              <input type="text" onkeypress="isNumberKey(event)" value="{{ old('document_no_4') }}" class="form-control" name="document_no_4" id="document_no_4" disabled="true">
           </td>
            <td class="text-center">
              <input type="text" class="form-control" value="{{ old('remarks_4') }}" name="remarks_4" id="remarks_4" disabled="true">
          </td>
         </tr>
         <tr>
           <td class="text-left"> Driving License</td>
          <td class="text-center">
            <input type="text" class="form-control kyc-filed"  value="{{ old('name_of_on_KYC_document_5') }}" name="name_of_on_KYC_document_5" id="name_of_on_KYC_document_5" >
            </td>
            <td class="text-center">
              <input type="text" onkeypress="isNumberKey(event)"  value="{{ old('document_no_5') }}" class="form-control" name="document_no_5" id="document_no_5" disabled="true">
           </td>
            <td class="text-center">
              <input type="text" class="form-control"  value="{{ old('remarks_5') }}" name="remarks_5" id="remarks_5" disabled="true">
          </td>
         </tr>
         <tr>
           <td class="text-left"> Election card</td>
          <td class="text-center">
            <input type="text" class="form-control kyc-filed"  value="{{ old('name_of_on_KYC_document_6') }}" name="name_of_on_KYC_document_6" id="name_of_on_KYC_document_6" >
            </td>
            <td class="text-center">
              <input type="text" onkeypress="isNumberKey(event)"   value="{{ old('document_no_6') }}" class="form-control" name="document_no_6" id="document_no_6" disabled="true">
           </td>
            <td class="text-center">
              <input type="text" class="form-control"  value="{{ old('remarks_6') }}"name="remarks_6" id="remarks_6" disabled="true">
          </td>
         </tr>
         <tr>
           <td class="text-left"> Ration Card</td>
          <td class="text-center">
            <input type="text" class="form-control kyc-filed" value="{{ old('name_of_on_KYC_document_7') }}" name="name_of_on_KYC_document_7" id="name_of_on_KYC_document_7" >
            </td>
            <td class="text-center">
              <input type="text" onkeypress="isNumberKey(event)" value="{{ old('document_no_7') }}" class="form-control" name="document_no_7" id="document_no_7" disabled="true">
           </td>
            <td class="text-center">
              <input type="text" class="form-control" value="{{ old('remarks_7') }}" name="remarks_7" id="remarks_7" disabled="true">
          </td>
         </tr>
         <tr>
           <td class="text-left"> ESIC Card</td>
          <td class="text-center">
            <input type="text" class="form-control kyc-filed" value="{{ old('name_of_on_KYC_document_8') }}"  name="name_of_on_KYC_document_8" id="name_of_on_KYC_document_8" >
            </td>
            <td class="text-center">
              <input type="text" onkeypress="isNumberKey(event)" value="{{ old('document_no_8') }}"  class="form-control" name="document_no_8" id="document_no_8" disabled="true">
           </td>
            <td class="text-center">
              <input type="text" class="form-control" value="{{ old('remarks_8') }}"  name="remarks_8" id="remarks_8" disabled="true">
          </td>
         </tr>
       </tbody>
     </table>
    </div>
   </div>
  
  <button tabindex="-1" class="btn btn-primary" type="submit">Submit form</button>
   </div>
</form>

@endsection
<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

<script type="application/javascript">

$(function(){

  $('.kyc-filed').on("keyup", function(e){

    var id = e.target.id;
    var index = id.split('_')[5];
    if(e.target.value.trim() != "")
    {
      $('#document_no_'+index).prop("disabled", false);
      $('#document_no_'+index).prop("required", true);
      $('#remarks_'+index).prop("disabled", false);
    }
    else
    {
      $('#document_no_'+index).prop("disabled", true);
      $('#document_no_'+index).prop("required", false);
      $('#remarks_'+index).prop("disabled", true);
    }
  })

});

function lettersOnly(evt)
{
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
      ((evt.which) ? evt.which : 0));
    if (charCode == 32)
        return true;
    if (charCode > 31 && (charCode < 65 || charCode > 90) &&
      (charCode < 97 || charCode > 122)) {
        evt.preventDefault();
    }
    else
        return true;
}
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
       evt.preventDefault();
    
}
  
</script>

