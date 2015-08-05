@extends('layouts.master')
@section('title')
Add car Info
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
        <h2 style="color:white;">ones try Another !!</h2>
        @endif
@if(Session::get('ck'))
        <h2 style="color:white;">Opps You already used this year ones try Another !!</h2>
        @endif

        </div>
            <div class="panel-body pan">
                {!! Form::open(['files'=>'true' ]) !!}
                <div class="form-body pal">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!!Form::text('year','',['class'=>'form-control','placeholder'=>'Add Year Name','required'])!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!!Form::text('brand_name','',['class'=>'form-control','placeholder'=>'Add Car Brand Name','required'])!!}
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
@stop







