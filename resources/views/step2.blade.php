@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-10 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <form id="msform" class="col-md-12 px-5 mx-auto" autocomplete="off" name="f1" action="{{ url('step2') }}" method="POST" accept-charset="UTF-8">
                    <!-- progressbar -->
     
                    @csrf
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Project Incharge </strong></li>
                    </ul>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td class="text-center p-2">Project Incharge</td>
                                <td >Personnel in-charge</td>
                                <td>Support Personnel</td>
                                <td width="50">Expected date for Deliverables (For the Review)</td>
                                <td width="50">Expected date for Deliverables (Final)</td>
                                <td width="50">Date of Final Delivery Done</td>
                                <td>Remarks</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if($final_result->scripting == 1)
                            <tr>
                            <td class="text-left p-2">Link/ Survey program APK file</td>
                            <td >
                                     <select name="person_incharge_1" id="person_incharge_1">
                                     <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                </td>
                                <td>
                                <select name="support_person_1" id="support_person_1">
                                <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                    </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_review_1" id="exe_deliver_date_review_1">
                                </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_final_1" id="exe_deliver_date_final_1">
                                </td>
                                <td width="50">
                                <input type="date" name="final_delivary_1" id="final_delivary_1">
                                </td>
                                <td>
                                    <input type="text" name="remarks_1" id="remarks_1">
                                </td>
                                
                            </tr>
                            @endif
                            @if($final_result->data_processing == 1)
                            <tr>
                                <td class="text-left p-2">Tables – First Cut</td>
                                <td >
                                     <select name="person_incharge_2" id="person_incharge_2">
                                     <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                </td>
                                <td>
                                <select name="support_person_2" id="support_person_2">
                                <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                    </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_review_2" id="exe_deliver_date_review_2">
                                </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_final_2" id="exe_deliver_date_final_2">
                                </td>
                                <td width="50">
                                <input type="date" name="final_delivary_2" id="final_delivary_2">
                                </td>
                                <td>
                                    <input type="text" name="remarks_2" id="remarks_2">
                                </td>
                                
                            
                            </tr>
                            
                            <tr>
                                <td class="text-left p-2">Tables - Final Cut</td>
                                <td >
                                     <select name="person_incharge_3" id="person_incharge_3">
                                     <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                </td>
                                <td>
                                <select name="support_person_3" id="support_person_3">
                                <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                    </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_review_3" id="exe_deliver_date_review_3">
                                </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_final_3" id="exe_deliver_date_final_3">
                                </td>
                                <td width="50">
                                <input type="date" name="final_delivary_3" id="final_delivary_3">
                                </td>
                                <td>
                                    <input type="text" name="remarks_3" id="remarks_3">
                                </td>
                            </tr>

                            @endif
                            @if($final_result->multi_var_analysis == 1)
                            <tr>
                                <td class="text-left p-2">Multivariate (If any)</td>
                                <td >
                                     <select name="person_incharge_4" id="person_incharge_4">
                                     <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                </td>
                                <td>
                                <select name="support_person_4" id="support_person_4">
                                <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                    </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_review_4" id="exe_deliver_date_review_4">
                                </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_final_4" id="exe_deliver_date_final_4">
                                </td>
                                <td width="50">
                                <input type="date" name="final_delivary_4" id="final_delivary_4">
                                </td>
                                <td>
                                    <input type="text" name="remarks_4" id="remarks_4">
                                </td>
                            </tr>
                            @endif
                            @if($final_result->stats_model == 1)
                            <tr>
                                <td class="text-left p-2">Statistical Modelling/Analytics</td>
                                <td >
                                     <select name="person_incharge_5" id="person_incharge_5">
                                     <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                </td>
                                <td>
                                <select name="support_person_5" id="support_person_5">
                                <option value="0">Please Select</option>
                                     @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->username}}</option>
                                     @endforeach
                                    </select>
                                    </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_review_5" id="exe_deliver_date_review_5">
                                </td>
                                <td width="50">
                                <input type="date" name="exe_deliver_date_final_5" id="exe_deliver_date_final_5">
                                </td>
                                <td width="50">
                                <input type="date" name="final_delivary_5" id="final_delivary_5">
                                </td>
                                <td>
                                    <input type="text" name="remarks_5" id="remarks_5">
                                </td>
                            </tr>
                            @endif
                            
                        </tbody>
                    </table>     
                    <input type="button" name="next" class="next action-button" value="Next" />               
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 100% !important;
    float: left;
    position: relative;
    font-weight: 400
}
</style>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
<script>
    $(document).ready(function () {
var idArr = ["person_incharge_","support_person_","exe_deliver_date_final_","exe_deliver_date_review_","final_delivary_","remarks_"];
var form_1 = {!! $final_result->scripting !!};
var form_2 = {!! $final_result->data_processing !!};
var form_3 = {!! $final_result->multi_var_analysis !!};
var form_4 = {!! $final_result->stats_model !!};

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function () {

    if(form_1 ==1)
    {
        for(var i=0 ;i < idArr.length;i++)
        {
            if($('#'+idArr[i]+"1").val() == 0 || $('#'+idArr[i]+"1").val().trim() == "")
            {
                alert("Please Fill All Input fields");
                return false;
            }
        }
    }
    if(form_2 ==1)
    {
        for(var i=0 ;i < idArr.length;i++)
        {
            if($('#'+idArr[i]+"2").val() == 0 || $('#'+idArr[i]+"2").val().trim() == "")
            {
                alert("Please Fill All Input fields");
                return false;
            }
        }

        for(var i=0 ;i < idArr.length;i++)
        {
            if($('#'+idArr[i]+"3").val() == 0 || $('#'+idArr[i]+"3").val().trim() == "")
            {
                alert("Please Fill All Input fields");
                return false;
            }
        }
    }
    if(form_3 ==1)
    {
        for(var i=0 ;i < idArr.length;i++)
        {
            if($('#'+idArr[i]+"4").val() == 0 || $('#'+idArr[i]+"4").val().trim() == "")
            {
                alert("Please Fill All Input fields");
                return false;
            }
        }
    }
    if(form_4 ==1)
    {
        for(var i=0 ;i < idArr.length;i++)
        {
            if($('#'+idArr[i]+"5").val() == 0 || $('#'+idArr[i]+"5").val().trim() == "")
            {
                alert("Please Fill All Input fields");
                return false;
            }
        }
    }
    $('#msform').submit();
    
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