@extends('layouts.master')
@section('title')
Add car Info Car Model
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
           Add Car Model Information According to Year
            
        @if(Session::get('year'))
        <h2 style="color:white;">All Ready Have This Year in Your DB !!</h2>
        @endif
@if(Session::get('car'))
        <h2 style="color:white;">Opps All Ready Have This Model in Your DB  !!</h2>
        @endif
@if(Session::get('showmsg'))
        <h2 style="color:white;">Information Added !!</h2>
        @endif
        </div>
            <div class="panel-body pan">
                {!! Form::open(['files'=>'true' ]) !!}
                <div class="form-body pal">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <script type="text/javascript">
    $('#example-single-selected').multiselect();
</script>
<!-- Note the missing multiple attribute! -->
<select id="example-single-selected" required="required" class="form-control" name="year">
    <option value="-1" selected="selected">Select An Year</option>
    @foreach($showyear as $r=>$t)
    <option value="{{$r}}"=>{{$t}}</option>
    @endforeach
</select>
                    </div>
                </div>
<div class="col-md-6">
<div class="form-group">
<select id="example-single-selected" required="required" class="form-control" name="brand_name">
    <option value="-1" selected="selected">Select An Brand Name</option>
    @foreach($showbrand as $b=>$d)
    <option value="{{$b}}"=>{{$d}}</option>
    @endforeach
</select>
</div>
</div>
<div class="col-md-12">
    <div class="form-group">
        {!!Form::text('car_model_name','',['class'=>'form-control','placeholder'=>'Add Car Model Info','required'])!!}
    </div>
</div>
                </div>
            <div class="form-actions text-right pal">
                 {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}
            </div>
                {!!Form::close()!!}
        </div>
            </div>
    </div>
</div>

@stop







