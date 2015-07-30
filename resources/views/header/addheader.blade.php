@extends('layouts.master')
@section('title')
Add Your Company Information
@stop
@section('body')
<!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                             Add Your Company Information</div>
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
            Company Information
            @if(Session::get('s'))
        <h2 style="color:Yellow;">Information Added successfully !!</h2>
        @endif
        @if(Session::get('em'))
        <h2 style="color:white;">you already used this email !!</h2>
        @endif

        </div>
            <div class="panel-body pan">
                {!! Form::open(['files'=>'true' ]) !!}
                <div class="form-body pal">
                <div class="form-group has-success has-feedback">
                <div class="input-icon right">
                <i class="fa fa-user"></i>      
                {!!Form::text('company_name','',['class'=>'form-control','placeholder'=>'Add your Company name','required'])!!} </div>
                </div>
                <div class="form-group">
                <div class="input-icon right">                                                            
                <i class="fa fa-lock"></i>
                Select Your Company logo:{!!Form::file('image','',['class'=>'form-control','placeholder'=>'Select an Image','required'])!!}
                </div>
                </div>
               

                <div class="form-group">
                <div class="input-icon right">                                                            
                <i class="fa fa-lock"></i>
                Select Fevicon:{!!Form::file('fev','',['class'=>'form-control','placeholder'=>'Select an Image','required'])!!}
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







