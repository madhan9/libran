@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-10 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <form id="msform" class="col-md-10 px-5 mx-auto" autocomplete="off" name="f1" action="{{ url('step4') }}" method="POST" accept-charset="UTF-8">
                    <!-- progressbar -->
                   
                 
                    @csrf
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Project Status Update</strong></li>
                    </ul>
                    <fieldset>
                    <div class="form-card">
                            <div class="row">
                    <div class="flex"> 
                            <label class="fieldlabels">Project Number: *</label> 
                            <select class="" name="pro_number" id="pro_number" required>
                                <option value="0">Please Select</option>
                                @foreach($final_result as $result)
                            
                                    <option value="{{$result->unique_id}}" >{{$result->job_number}}</option>
                                    
                               @endforeach
                            </select>
                            </div>
                            </div>
                            </div>
                        
                        
                    </fieldset>
                    <table class="table table-hover" style="display:none;" id="statusTable">
                        <thead>
                            <tr>
                                <td class="text-center p-2">Project Incharge</td>
                                <td >Current Status</td>
                                <td>Final Cost</td>
                                <td>Date of PO Receipt</td>
                                <td>Date of Invoice Raised</td>
                                <td>Date of Payment Receipt</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="row-1">
                                <td>
                                Link/ Survey program APK file

                                </td>
                                 <td >
                                    <select name="cur_status_1" id="cur_status_1">
                                        <option value="0">Please Select</option>
                                        @foreach($status as $sta)
                                        <option value="{{$sta->unique_no}}">{{$sta->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                <input type="number" min="0" name="final_cost_1" id="final_cost_1">
                                    </td>
                                <td width="50">
                                <input type="date" name="date_of_po_1" id="date_of_po_1">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_invoice_1" id="date_of_invoice_1">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_payment_receipt_1" id="date_of_payment_receipt_1">
                                </td>
                            </tr>
                            <tr id="row-2">
                                <td>
                                Tables – First Cut
                                </td>
                                <td >
                                    <select name="cur_status_2" id="cur_status_2">
                                        <option value="0">Please Select</option>
                                        @foreach($status as $sta)
                                        <option value="{{$sta->unique_no}}">{{$sta->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                <input type="number" min="0" name="final_cost_2" id="final_cost_2">
                                    </td>
                                <td width="50">
                                <input type="date" name="date_of_po_2" id="date_of_po_2">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_invoice_2" id="date_of_invoice_2">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_payment_receipt_2" id="date_of_payment_receipt_2">
                                </td>
                            </tr>
                            <tr id="row-3">
                                <td>
                                Tables - Final Cut
                                </td>
                                <td >
                                    <select name="cur_status_3" id="cur_status_3">
                                        <option value="0">Please Select</option>
                                        @foreach($status as $sta)
                                        <option value="{{$sta->unique_no}}">{{$sta->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                <input type="number" min="0" name="final_cost_3" id="final_cost_3">
                                    </td>
                                <td width="50">
                                <input type="date" name="date_of_po_3" id="date_of_po_3">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_invoice_3" id="date_of_invoice_3">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_payment_receipt_3" id="date_of_payment_receipt_3">
                                </td>
                            </tr>
                            <tr id="row-3">
                                <td>
                                Multivariate (If any)
                                </td>
                                <td >
                                    <select name="cur_status_4" id="cur_status_4">
                                        <option value="0">Please Select</option>
                                        @foreach($status as $sta)
                                        <option value="{{$sta->unique_no}}">{{$sta->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                <input type="number" min="0" name="final_cost_4" id="final_cost_4">
                                    </td>
                                <td width="50">
                                <input type="date" name="date_of_po_4" id="date_of_po_4">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_invoice_4" id="date_of_invoice_4">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_payment_receipt_4" id="date_of_payment_receipt_4">
                                </td>
                            </tr>
                            <tr id="row-3">
                                <td>
                                Statistical Modelling/Analytics
                                </td>
                                <td >
                                    <select name="cur_status_5" id="cur_status_5">
                                        <option value="0">Please Select</option>
                                        @foreach($status as $sta)
                                        <option value="{{$sta->unique_no}}">{{$sta->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                <input type="number" min="0" name="final_cost_5" id="final_cost_5">
                                    </td>
                                <td width="50">
                                <input type="date" name="date_of_po_5" id="date_of_po_5">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_invoice_5" id="date_of_invoice_5">
                                </td>
                                <td width="50">
                                <input type="date" name="date_of_payment_receipt_5" id="date_of_payment_receipt_5">
                                </td>
                            </tr>
                        </tbody>
                    </table>     
                    <input type="button" name="next" id="btn-next" style="display:none;" class="next action-button" value="Submit" />               
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
var idArr = ["cur_status_","final_cost_","date_of_po_","date_of_invoice_","date_of_payment_receipt_"];
var result = {!! $final_result !!};

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;
var selectedProj = {};
$('#pro_number').on('change', function(val){
    if(val.target.value !=0){
        selectedProj = result.find((obj) => obj.unique_id == val.target.value);
        //console.log(selectedProj);
        $('#btn-next').css('display','block');
        $('#statusTable').css('display','table');
    }
    else{
        $('#btn-next').css('display','none');
        $('#statusTable').css('display','none');
        selectedProj={}
    }
    if(selectedProj['scripting'] == 1)
    {
        $('#row-1').css('display','table-row');
    }
    if(selectedProj['data_processing'] == 1)
    {
        $('#row-2').css('display','table-row');
        $('#row-3').css('display','table-row');
    }
    if(selectedProj['stats_model'] == 1)
    {
        $('#row-4').css('display','table-row');
    }
    if(selectedProj['multi_var_analysis'] == 1)
    {
        $('#row-5').css('display','table-row');
    }

})
setProgressBar(current);

$(".next").click(function () {

    if(selectedProj['scripting'] ==1)
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
    if(selectedProj['data_processing'] ==1)
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
    if(selectedProj['stats_model'] ==1)
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
    if(selectedProj['multi_var_analysis'] ==1)
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