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
<form class="container" method="POST" action="{{ url('form-save') }}" enctype="multipart/form-data">  
  @csrf
  <div class="form-row col-md-8 p-0">
      <div class="col-md-8">
    <div class="form-row col-md-12 p-0">
      <div class="col-md-6 mb-3">
   
        <input type="text" class="form-control" tabindex="1" name="employee_code" placeholder="Employee Code"  value="{{ old('employee_code') }}">
  
      </div>                        
      <div class="col-md-6 mb-3">

        <input type="text" class="form-control" tabindex="2" name="name"  placeholder="Name"  required  value="{{ old('name') }}">

      </div>
    </div>
    <div class="form-row col-md-12 p-0">
      <div class="col-md-6 mb-3">
        
        <input type="text" class="form-control" tabindex="3" name="father_name"  placeholder="Father's Name" required value="{{ old('father_name') }}">

      </div>
      <div class="col-md-6 mb-3">
      
        <input type="text" class="form-control" tabindex="4" name="mother_name"  placeholder="Mother's Name" required value="{{ old('mother_name') }}">

      </div>
    </div>
    </div>
     <div class="col-md-4 mb-3">
      <div class="d-flex"> 
        <label class="btn btn-primary" for="filePhoto">Upload Image</label>
        <label class="btn btn-warning ml-2" id="btn-remove" onclick="removeAttach()" style="display: none;">Remove</label>
      </div>
      <input type="file" name="filePhoto" value="" class="d-none" id="filePhoto" class="required borrowerImageFile" data-errormsg="PhotoUploadErrorMsg">
      <img for="filePhoto" id="previewHolder" alt="Uploaded Image Preview" width="100px" height="100px" style="display: none;" />
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input type="date" class="form-control" tabindex="5" name="dob" id="dob"  placeholder="Date Of Birth" required max=" {{\Carbon\Carbon::today()->startOfYear()->subYears(18)->format('Y-m-d')}}"
     value="{{ old('dob',\Carbon\Carbon::today()->startOfYear()->subYears(18)->format('Y-m-d') ) }}">
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="6" name="blood_group" placeholder="Blood Group" required value="{{ old('blood_group') }}">
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="7" name="marital_status"  placeholder="Mariatl Status" required value="{{ old('marital_status') }}">
    </div>
  </div>
  <label for="form-label" class="mb-3 text-bold">Present Address</label>
  <div class="form-row">

    <div class="col-md-4 mb-3">
      
     
      <textarea type="text" cols="100" rows="5" tabindex="8" name="present_address"  class="form-control" id="present_address" placeholder="Present Address" style="resize: none;" required >{{ old('present_address') }}</textarea>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="9" name="pre_contact" onkeypress="isNumberKey(event)" placeholder="Conatct No" required value="{{ old('pre_contact') }}" maxlength="10" minlength="10">
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="10" name="pre_email"  placeholder="E - Mail" required value="{{ old('pre_email') }}">
    </div>
  </div>

  <label for="form-label" class="mb-3 text-bold">Permanent Address</label>
  <input type="checkbox" class="ml-2" id="same_as_above">
  <label for="same_as_above"> Same as Above</label>
   <div class="form-row">
  <div class="col-md-4 mb-3">
  
      <textarea type="text" cols="100" rows="5" tabindex="11" name="permanent_address"  class="form-control" id="permanent_address" placeholder="Permanent Address" style="resize: none;" required >{{ old('permanent_address') }}</textarea>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="12" maxlength="10" minlength="10" onkeypress="isNumberKey(event)"  name="per_contact"  placeholder="Conatct No" required value="{{ old('per_contact') }}">
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="13" name="per_email"  placeholder="E - Mail" required value="{{ old('per_email') }}">
    </div>
  </div>

<label for="form-label" class="mb-3 text-bold">Qualification</label>
   <table class="col-md-10 col-sm-12">
    <tbody>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification_sslc" checked tabindex="14" id="qualification_sslc" value="1"/>
          <label for="qualification_sslc" class="form-label cursor-pointer">SSLC</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" tabindex="15" name="sslc_precentage"  placeholder="Percentage" required value="{{ old('sslc_precentage') }}">
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" tabindex="16" name="sslc_result"  placeholder="Result" required value="{{ old('sslc_result') }}">
        </td>
      </tr>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification_puc" tabindex="17" id="qualification_puc" value="1" />
          <label for="qualification_puc" class="form-label cursor-pointer">PUC</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" tabindex="18" disabled name="puc_precentage" id="puc_precentage"  placeholder="Percentage" value="{{ old('puc_precentage') }}">
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" tabindex="19" disabled name="puc_result" id="puc_result"  placeholder="Result" value="{{ old('puc_result') }}">
        </td>
      </tr>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification_iti" tabindex="20" id="qualification_iti" value="1"/>
          <label for="qualification_iti" class="form-label cursor-pointer">ITI</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="iti_precentage" id="iti_precentage" disabled tabindex="21"  placeholder="Percentage" value="{{ old('iti_precentage') }}">
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="iti_result" id="iti_result"  disabled tabindex="22"  placeholder="Result" value="{{ old('iti_result') }}">
        </td>
      </tr>
      <tr>
        <td class="p-2">
          
          <input type="checkbox" name="qualification_other" id="qualification_other"  tabindex="23"  value="1"/>
          <label for="qualification_other" class="form-label cursor-pointer">Any Other</label>
           <input type="text" class="form-control col-md-12" name="qualification_other_text" id="qualification_other_text"  tabindex="-1"  placeholder="Other's" style="display: none;" value="{{ old('qualification_other_text') }}">
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="other_precentage" id="other_precentage" disabled tabindex="24"  placeholder="Percentage" value="{{ old('other_precentage') }}">
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="other_result" id="other_result"  disabled tabindex="25"  placeholder="Result" value="{{ old('other_result') }}">
        </td>
      </tr>

    </tbody>
    
  </table>
<label for="form-label" class="mb-3 text-bold">Nominee</label>
   <div class="form-row">
  <div class="col-md-4 mb-3">
  
      <input type="text" cols="100" rows="5" name="nominee_name"  tabindex="26"  class="form-control" id="validationDefault04" placeholder="Name" style="resize: none;" required value="{{ old('nominee_name') }}"/>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="nominee_age" maxlength="2" onkeypress="isNumberKey(event)"  minlength="2"  tabindex="27"  placeholder="Age" required value="{{ old('nominee_age') }}">
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="nominee_relationship"  tabindex="28"   placeholder="RelationShip" required value="{{ old('nominee_relationship') }}">
    </div>
  </div>
 <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input  type="number"  class="form-control" name="shoes_size"   tabindex="29"  placeholder="Shoes Size" required value="{{ old('shoes_size') }}">
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="date" class="form-control" name="date_of_joining"  tabindex="30"  placeholder="Date Of Joining" required value="{{ old('date_of_joining') }}">
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" value="{{ old('unit') }}" class="form-control" name="unit" tabindex="31" placeholder="Unit" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input  type="text" value="{{ old('divisioin') }}" class="form-control" name="divisioin" tabindex="32" placeholder="Division" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" value="{{ old('department') }}" class="form-control" name="department" tabindex="33" placeholder="Department" required>
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input  type="text"  class="form-control" name="previous_esi_no" tabindex="34" placeholder="Previous ESI No" required value="{{ old('previous_esi_no') }}">
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="previous_pf_no"  tabindex="35" placeholder="Previous EPF No" required value="{{ old('previous_pf_no') }}">
    </div>
  </div>
<label class="form-label">Previous Bank A/C No</label>
 <div class="form-row py-3">

      @for($i =1 ;$i<= 15;$i++)
      <input type="text" maxlength="1" onkeypress="isNumberKey(event)" tabindex="{{35+$i}}" class="form-control my-2" style="width:35px;margin-right: 8px;text-align:center;" name="bank_acc_no[]"  placeholder="-" id="bank_no_{{$i}}" value="{{ (old('bank_acc_no') != null) ? old('bank_acc_no')[$i-1] : old('bank_acc_no')}}">
      @endfor
  </div>
  <button tabindex="-1" class="btn btn-primary" type="submit">Submit form</button>
</form>

@endsection
<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

<script type="application/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previewHolder').attr('src', e.target.result);
      $("#previewHolder").css("display","flex");
      $("#btn-remove").css("display","block");
    }
    reader.readAsDataURL(input.files[0]);
  } else {
     alert('select a file to see preview');
     $("#previewHolder").css("display","none");
    $('#previewHolder').attr('src', '');

  }
}

function removeAttach()
{
    $("#filePhoto").val(null);
    $("#previewHolder").css("display","none");
    $('#previewHolder').attr('src', '');
    $("#btn-remove").css("display","none");
}
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
  var dobvalue = '{!!\Carbon\Carbon::today()->subYears(18)->format("d/m/Y")!!}';
  $(function(){

    $("#filePhoto").change(function() {
      readURL(this);
    });

    

    $("#same_as_above").change(function() {
        if($("#same_as_above").is(":checked"))
        {
          var add = $("#present_address").val();
          $("textarea#permanent_address").val(add);
        }
        else
          $("textarea#permanent_address").val("");
    });


    $('#bank_no_1,#bank_no_2,#bank_no_3,#bank_no_4,#bank_no_5,#bank_no_6,#bank_no_7,#bank_no_8,#bank_no_9,#bank_no_10,#bank_no_11,#bank_no_12,#bank_no_13,#bank_no_14,#bank_no_15').keyup(function(e){
      if(e.keyCode == 8)
      {
        $(this).prev(':input').focus();
        e.preventDefault();
      }
      if($(this).val().trim().length==$(this).attr('maxlength'))
        $(this).next(':input').focus()
    });

    $("input[type='checkbox']").on("change", function(e)
    {
       
          if($("#qualification_puc").is(':checked'))
          {
              $("#puc_precentage").prop("disabled", false);
              $("#puc_precentage").prop("required", true);
              $("#puc_result").prop("disabled", false);
              $("#puc_result").prop("required", true);
          }
          else{
              $("#puc_precentage").prop("disabled", true).val("");
              $("#puc_precentage").prop("required", false);
              $("#puc_result").prop("disabled", true).val("");
              $("#puc_result").prop("required", false);
          }
          if($("#qualification_iti").is(':checked'))
          {
              $("#iti_precentage").prop("disabled", false);
              $("#iti_precentage").prop("required", true);
              $("#iti_result").prop("disabled", false);
              $("#iti_result").prop("required", true);
          }
          else{
             $("#iti_precentage").prop("disabled", true).val("");
              $("#iti_precentage").prop("required", false);
              $("#iti_result").prop("disabled", true).val("");
              $("#itiresult").prop("required", false);
          }
          if($("#qualification_other").is(':checked'))
          {
              $("#other_precentage").prop("disabled", false);
              $("#other_precentage").prop("required", true);
              $("#other_result").prop("disabled", false);
              $("#other_result").prop("required", true);
              $("#qualification_other_text").css("display", "block").focus();
              
          }
          else{
              $("#qualification_other_text").css("display", "none").val("");
              $("#other_precentage").prop("disabled", true).val("");
              $("#other_precentage").prop("required", false);
              $("#other_result").prop("disabled", true).val("");
              $("#other_result").prop("required", false);
          }
        
    });
  })
</script>

