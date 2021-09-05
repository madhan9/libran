@extends('layouts.app')

@section('content')
<form class="container" method="POST" action="{{ url('form-save') }}">  
  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
 
      <input type="text" class="form-control" name="employee_code" placeholder="Employee Code"  required>
    </div>                        
    <div class="col-md-4 mb-3">

      <input type="text" class="form-control" name="name"  placeholder="Name"  required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input type="text" class="form-control" name="father_name"  placeholder="Father's Name" required>
    </div>
    <div class="col-md-4 mb-3">
    
      <input type="text" class="form-control" name="mother_name"  placeholder="Mother's Name" required>
    </div>
    
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input type="date" class="form-control" name="dob"  placeholder="Date Of Birth" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="blood_group" placeholder="Blood Group" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="marital_status"  placeholder="Mariatl Status" required>
    </div>
  </div>
  <label for="form-label" class="mb-3 text-bold">Present Address</label>
  <div class="form-row">

    <div class="col-md-4 mb-3">
      
     
      <textarea type="text" cols="100" rows="5" name="present_address"  class="form-control" id="validationDefault04" placeholder="Present Address" style="resize: none;" required></textarea>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="pre_contact"  placeholder="Conatct No" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="pre_email"  placeholder="E - Mail" required>
    </div>
  </div>

  <label for="form-label" class="mb-3 text-bold">Permanent Address</label>
   <div class="form-row">
  <div class="col-md-4 mb-3">
  
      <textarea type="text" cols="100" rows="5" name="permanent_address"  class="form-control" id="validationDefault04" placeholder="Permanent Address" style="resize: none;" required></textarea>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="per_contact"  placeholder="Conatct No" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="per_email"  placeholder="E - Mail" required>
    </div>
  </div>

<label for="form-label" class="mb-3 text-bold">Qualification</label>
   <table class="col-10">
    <tbody>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification[]" id="qualification_sslc" value="1"/>
          <label for="qualification_sslc" class="form-label">SSLC</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="per_contact"  placeholder="Percentage" required>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="per_email"  placeholder="Result" required>
        </td>
      </tr>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification[]" id="qualification_puc" value="2"/>
          <label for="qualification_puc" class="form-label">PUC</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="per_contact"  placeholder="Percentage" required>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="per_email"  placeholder="Result" required>
        </td>
      </tr>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification[]" id="qualification_iti" value="3"/>
          <label for="qualification_iti" class="form-label">ITI</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="per_contact"  placeholder="Percentage" required>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="per_email"  placeholder="Result" required>
        </td>
      </tr>
      <tr>
        <td class="p-2">
  
          <input type="checkbox" name="qualification[]" id="qualification_other" value="4"/>
          <label for="qualification_other" class="form-label">Any Other</label>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="per_contact"  placeholder="Percentage" required>
        </td>
        <td class="p-2">
         
          <input type="text" class="form-control" name="per_email"  placeholder="Result" required>
        </td>
      </tr>

    </tbody>
    
  </table>
<label for="form-label" class="mb-3 text-bold">Nominee</label>
   <div class="form-row">
  <div class="col-md-4 mb-3">
  
      <input type="text" cols="100" rows="5" name="nominee_name"  class="form-control" id="validationDefault04" placeholder="Name" style="resize: none;" required/>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="nominee_age"  placeholder="Age" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="relationship"  placeholder="RelationShip" required>
    </div>
  </div>
 <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input  type="number"  class="form-control" name="shoes_size"  placeholder="Shoes Size" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="date" class="form-control" name="date_of_joining" placeholder="Date Of Joining" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="unit"  placeholder="Unit" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input  type="text"  class="form-control" name="shoes_size"  placeholder="Division" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="date_of_joining" placeholder="Department" required>
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-4 mb-3">
      
      <input  type="text"  class="form-control" name="shoes_size"  placeholder="Previous ESI No" required>
    </div>
    <div class="col-md-3 mb-3">
     
      <input type="text" class="form-control" name="date_of_joining" placeholder="Previous EPF No" required>
    </div>
  </div>
<label class="form-label">Previous Bank A/C No</label>
 <div class="form-row py-3">

      @for($i =1 ;$i<= 15;$i++)
      <input type="text" maxlength="1" class="form-control" style="width:60px;margin-right: 8px;text-align:center;" name="shoes_size"  placeholder="1" required>
      @endfor
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
    @endsection

