@extends('layouts.master')
@section('title')
Add Engine & Job 
@stop
@section('body')

<!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
<div class="page-content">
    <div class="panel panel-green">
        <div class="panel-heading">
            Car Information form
            
        @if(Session::get('year'))
        <h2 style="color:white;">All Ready Have This Year in Your DB !!</h2>
        @endif
@if(Session::get('brand'))
        <h2 style="color:white;">Opps All Ready Have This Brand in Your DB  !!</h2>
        @endif
@if(Session::get('saved'))
        <h2 style="color:white;">Information Added !!</h2>
        @endif
        </div>
            <div class="panel-body pan">
                {!! Form::open(['files'=>'true']) !!}
                <div class="form-body pal">
                <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {!!Form::text('engine_name','',['class'=>'form-control','placeholder'=>'Add Year Name'])!!}
                    </div>
                </div>
                <div class="col-md-3" id="content">
                    <div class="form-group">
                        <select id="make" name="year" required="required" class="form-control"  >
                            <option value="-1" selected="selected" disabled>Select An Year</option>
                            @foreach($mod as $b=>$d)
                            <option type="checkbox" onclick="toggleAlert()"value="{{$b}} toggleAlert()"=>{{$d}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3" id="content">
                    <div class="form-group" >
                        <select   id="make" name="brand" required="required" class="form-control">
                            <option  value="-1" selected="selected" disabled>Select An Car</option>
                            @foreach($mod1 as $b=>$d)
                            <option value="{{$b}}"=>{{$d}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <script type="text/javascript">
function toggleAlert() {
toggleDisabled(document.getElementById("content"));
}
function toggleDisabled(el) {
try {
el.disabled = el.disabled ? false : true;
}
catch(E){
}
if (el.childNodes && el.childNodes.length > 0) {
for (var x = 0; x < el.childNodes.length; x++) {
toggleDisabled(el.childNodes[x]);
}
}
}
</script>
                <div class="col-md-3">
                    <div class="form-group">
                        <select id="model" name="car_model_name" required="required" class="subcat form-control" >
                            <option value="-1" selected="selected">Select An Model</option>
                           
                        </select>
                    </div>
                </div>
                <!--<div class="col-md-6">
                    <div class="form-group">
                        {!!Form::text('car_model_name','',['class'=>'form-control','placeholder'=>'Add Car Model Info','required'])!!}
                    </div>
                </div>-->
                </div>
            <div class="form-actions text-right pal">
                 {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}
            </div>
                {!!Form::close()!!}
        </div>
            </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($){
            n=1;
            $('#make,make').change(function(){
                $.get("{{ url('api/dropdown')}}",
                        { option: $(this).val() },
                        function(data) {
                            var model = $('#model');
                            model.empty();

                            $.each(data, function(index, element) {
                                model.append("<option value='"+ element +"'>" + element + "</option>");
                            });
                        });
            });
});
</script>
        

@stop







