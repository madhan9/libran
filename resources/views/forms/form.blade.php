@extends('layouts.app')

@section('content')
<form class="container" method="POST" action="{{ url('form-save') }}">  
  @csrf

  <div class="form-row">
    <div class="col-md-4 mb-3">
 
      <input type="text" class="form-control" tabindex="1" name="employee_code" placeholder="Employee Code"  required>
    </div>                        
    <div class="col-md-4 mb-3">

      <input type="text" class="form-control" tabindex="2" name="name"  placeholder="Name"  required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input type="text" class="form-control" tabindex="3" name="father_name"  placeholder="Father's Name" required>
    </div>
    <div class="col-md-4 mb-3">
    
      <input type="text" class="form-control" tabindex="4" name="mother_name"  placeholder="Mother's Name" required>
    </div>
    
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input type="date" class="form-control" tabindex="5" name="dob" id="dob"  placeholder="Date Of Birth" required max="{{\Carbon\Carbon::today()->startOfYear()->subYears(18)->format('Y-m-d')}}"
      value="{{\Carbon\Carbon::today()->startOfYear()->subYears(18)->format('Y-m-d')}}">
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="6" name="blood_group" placeholder="Blood Group" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="7" name="marital_status"  placeholder="Mariatl Status" required>
    </div>
  </div>
  <label for="form-label" class="mb-3 text-bold">Present Address</label>
  <div class="form-row">

    <div class="col-md-4 mb-3">
      
     
      <textarea type="text" cols="100" rows="5" tabindex="8" name="present_address"  class="form-control" id="validationDefault04" placeholder="Present Address" style="resize: none;" required></textarea>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="9" name="pre_contact"  placeholder="Conatct No" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="10" name="pre_email"  placeholder="E - Mail" required>
    </div>
  </div>

  <label for="form-label" class="mb-3 text-bold">Permanent Address</label>
   <div class="form-row">
  <div class="col-md-4 mb-3">
  
      <textarea type="text" cols="100" rows="5" tabindex="11" name="permanent_address"  class="form-control" id="validationDefault04" placeholder="Permanent Address" style="resize: none;" required></textarea>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="12" name="per_contact"  placeholder="Conatct No" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" tabindex="13" name="per_email"  placeholder="E - Mail" required>
    </div>
  </div>

<label for="form-label" class="mb-3 text-bold">Qualification</label>
   <table class="col-md-10 col-sm-12">
    <tbody>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification_sslc" checked disabled tabindex="14" id="qualification_sslc" value="1"/>
          <label for="qualification_sslc" class="form-label cursor-pointer" disabled>SSLC</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" tabindex="15" name="sslc_precentage"  placeholder="Percentage" required>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" tabindex="16" name="sslc_result"  placeholder="Result" required>
        </td>
      </tr>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification_puc" tabindex="17" id="qualification_puc" value="1"/>
          <label for="qualification_puc" class="form-label cursor-pointer">PUC</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" tabindex="18" disabled name="puc_precentage" id="puc_precentage"  placeholder="Percentage" >
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" tabindex="19" disabled name="puc_result" id="puc_result"  placeholder="Result" >
        </td>
      </tr>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification_iti" tabindex="20" id="qualification_iti" value="1"/>
          <label for="qualification_iti" class="form-label cursor-pointer">ITI</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="iti_precentage" id="iti_precentage" disabled tabindex="21"  placeholder="Percentage" >
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="iti_result" id="iti_result"  disabled tabindex="22"  placeholder="Result" >
        </td>
      </tr>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification_other" id="qualification_other"  tabindex="23"  value="1"/>
          <label for="qualification_other" class="form-label cursor-pointer">Any Other</label>
           <input type="text" class="form-control col-md-12" name="others_name"  tabindex="-1"  placeholder="Other's" style="display: none;" >
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="other_precentage" id="other_precentage" disabled tabindex="24"  placeholder="Percentage" >
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="other_result" id="other_result"  disabled tabindex="25"  placeholder="Result" >
        </td>
      </tr>

    </tbody>
    
  </table>
<label for="form-label" class="mb-3 text-bold">Nominee</label>
   <div class="form-row">
  <div class="col-md-4 mb-3">
  
      <input type="text" cols="100" rows="5" name="nominee_name"  tabindex="26"  class="form-control" id="validationDefault04" placeholder="Name" style="resize: none;" required/>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="nominee_age"  tabindex="27"  placeholder="Age" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="relationship"  tabindex="28"   placeholder="RelationShip" required>
    </div>
  </div>
 <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input  type="number"  class="form-control" name="shoes_size"   tabindex="29"  placeholder="Shoes Size" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="date" class="form-control" name="date_of_joining"  tabindex="30"  placeholder="Date Of Joining" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="unit" tabindex="31" placeholder="Unit" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input  type="text"  class="form-control" name="shoes_size" tabindex="32" placeholder="Division" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="date_of_joining" tabindex="33" placeholder="Department" required>
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input  type="text"  class="form-control" name="shoes_size" tabindex="34" placeholder="Previous ESI No" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="date_of_joining"  tabindex="35" placeholder="Previous EPF No" required>
    </div>
  </div>
<label class="form-label">Previous Bank A/C No</label>
 <div class="form-row py-3">

      @for($i =1 ;$i<= 15;$i++)
      <input type="text" maxlength="1" tabindex="{{35+$i}}" class="form-control my-2" style="width:35px;margin-right: 8px;text-align:center;" name="shoes_size"  placeholder="-" id="bank_no_{{$i}}">
      @endfor
  </div>
  <button tabindex="-1" class="btn btn-primary" type="submit">Submit form</button>
</form>

@endsection
<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

<script type="application/javascript">

  var dobvalue = '{!!\Carbon\Carbon::today()->subYears(18)->format("d/m/Y")!!}';
  $(function(){
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
          }
          else{
             $("#other_precentage").prop("disabled", true).val("");
              $("#other_precentage").prop("required", false);
              $("#other_result").prop("disabled", true).val("");
              $("#other_result").prop("required", false);
          }
        
    });
  })
</script>

