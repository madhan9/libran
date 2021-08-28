@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-8 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <form id="msform" class="col-md-8 mx-auto" name="f1" autocomplete="off" action="{{ url('step1') }}" method="POST" accept-charset="UTF-8">
                    <!-- progressbar -->
                    @csrf
                    
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Basic Project Information </strong></li>
                        <li id="personal"><strong>Analysis Requirement</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Basic Project Information:</h2>
                                </div>
                             
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                            </div> 
                           
                             <div>
                            <label class="fieldlabels">Client Name: *</label> 
                            <select class="" name="client_name" id="client_name"required>
                                <option value="0">Please Select</option>
                               @foreach($clients as $client)
                                    @if(isset($final_result->client_name) && $final_result->client_name == $client->unique_no)
                                        <option value="{{$client->unique_no}}" selected>{{$client->name}}</option>
                                    @else
                                        <option value="{{$client->unique_no}}" >{{$client->name}}</option>
                                    @endif
                               @endforeach
                            </select>
                            </div>
                             <div>
                            <label class="fieldlabels">Job Title: *</label> 
                            <input type="text" name="job_title" id="job_title" placeholder="Job Title" value="{{isset($final_result->job_title) ? $final_result->job_title : '' }}" required/> 
                            </div>
                             <div>
                            <label class="fieldlabels">Job Number: *</label> 
                            <input type="text" name="job_number" id="job_number" placeholder="Job Number" required value="{{isset($final_result->job_number) ? $final_result->job_number : '' }}" /> 
                            </div>
                             <div>
                            <label class="fieldlabels">Researcher In-charge: *</label> 
                            <select class="" name="researcher" id="researcher" required>
                                <option value="0">Please Select</option>
                                @foreach($researcher as $research)
                                @if(isset($final_result->researcher) && $final_result->researcher == $research->unique_no)
                                        <option value="{{$research->unique_no}}" selected>{{$research->name}}</option>
                                    @else
                                        <option value="{{$research->unique_no}}" >{{$research->name}}</option>
                                    @endif
                               @endforeach
                            </select>
                            </div>
                             <div>
                            <label class="fieldlabels">Nature of Job: *</label> 
                            <select class="" name="nature_of_job" id="nature_of_job" required>
                                    <option value="0">Please Select</option>
                                    @foreach($nature_of_job as $noj)
                                    @if(isset($final_result->nature_of_job) && $final_result->nature_of_job == $noj->unique_no)
                                        <option value="{{$noj->unique_no}}" selected>{{$noj->name}}</option>
                                    @else
                                        <option value="{{$noj->unique_no}}" >{{$noj->name}}</option>
                                    @endif
                                    @endforeach
                            </select> 
                            </div>
                             

                        </div> 
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Analysis Requirement:</h2>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                             <label class="fieldlabels col-md-8">Scripting: *</label> 
                             <label class="switch">
  <input type="checkbox" name="scripting"  id="scripting" checked="{{isset($final_result->scripting) && $final_result->scripting == 1 ? true : false }}">
  <span class="slider round"></span>
</label>
                             </div>
                             <div class="d-flex align-items-center">
                             <label class="fieldlabels  col-md-8">Coding: *</label> 
                             <label class="switch">
  <input type="checkbox" name="coding"  id="coding" checked="{{isset($final_result->coding) && $final_result->coding == 1 ? true : false }}">
  <span class="slider round"></span>
</label>
                             </div>
                             <div class="d-flex align-items-center">
                             <label class="fieldlabels  col-md-8">Data Processing: *</label> 
                             <label class="switch">
  <input type="checkbox" name="data_processing"  id="data_processing" checked="{{isset($final_result->data_processing) && $final_result->data_processing == 1 ? true : false }}">
  <span class="slider round"></span>
</label>
                             
                             </div>
                             <div  class="d-flex align-items-center">
                             <label class="fieldlabels  col-md-8">Multivariate Analysis Requirements: *</label> 
                              
                             <label class="switch">
  <input type="checkbox" name="multi_var_analysis"  id="multi_var_analysis" checked="{{isset($final_result->multi_var_analysis) && $final_result->multi_var_analysis == 1 ? true : false }}">
  <span class="slider round"></span>
</label>
                             </div>
                             <div  class="d-flex align-items-center">
                             <label class="fieldlabels  col-md-8">Statistical Modelling/Analytics: *</label> 

                             <label class="switch">
  <input type="checkbox" name="stats_model"  id="stats_model" checked="{{isset($final_result->stats_model) && $final_result->stats_model == 1 ? true : false }}">
  <span class="slider round"></span>
</label>
                             </div>
                             <div  class="d-flex align-items-center">
                             <label class="fieldlabels  col-md-8">Date received the Job Notification: *</label> 
                             <input type="date" name="job_recd_date" id="job_recd_date" value="{{isset($final_result->job_recd_date) ? \Carbon\Carbon::parse($final_result->job_recd_date)->format('Y-m-d') : '' }}" required/> 
                             </div>
                             <div  class="d-flex align-items-center">
                             <label class="fieldlabels  col-md-8">Expected date to Start the jobs: *</label> 
                             <input type="date" name="start_date"  id="start_date" value="{{isset($final_result->start_date) ? \Carbon\Carbon::parse($final_result->start_date)->format('Y-m-d') : '' }}" required/> 
                             </div>
                        </div> 
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
<script>
    $(document).ready(function () {

var form = [
    ["client_name","job_title","job_number","researcher","nature_of_job"], 
    ["scripting","coding","data_processing","multi_var_analysis","stats_model","job_recd_date","start_date"]  
];
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function () {

    var temp = form[current-1];
    var checkcount = '';
    for(i=0;i < temp.length;i++)
    {
        if(current == 1){
            if($('#'+temp[i]).val().trim() == "" || $('#'+temp[i]).val().trim() == '0')
            {
                alert("Please fill Input");
                return false;
            }
        }
        else{
            if(i == 5 || i ==6)
            {
                if($('#'+temp[i]).val().trim() == "" || $('#'+temp[i]).val().trim() == '0')
                {
                    alert("Please fill Input");
                    return false;
                }
            }
            else{
                if($('#'+temp[i]).is(":checked") ==  true)
                {
                    $('#'+temp[i]).val(1);
                    checkcount++;
                }
                else{
                    $('#'+temp[i]).val(2);
                }
            }
        }
    }
    
    if(current ==  2 && checkcount ==0)
    {
        alert("Please Select any One Option");
        return false;
    }
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
        step: function (now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            next_fs.css({ 'opacity': opacity });
        },
        duration: 500
    });
    setProgressBar(++current);
    if(current == 3)
    {
        $('#msform').submit();
    }
});

$(".previous").click(function () {

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
        step: function (now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            previous_fs.css({ 'opacity': opacity });
        },
        duration: 500
    });
    setProgressBar(--current);
});

function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
        .css("width", percent + "%")
}

$(".submit").click(function () {
    return false;
})

});
</script>