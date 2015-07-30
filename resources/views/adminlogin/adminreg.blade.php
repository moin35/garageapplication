@extends('layouts.master')
@section('title')
Registration
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
            Registration form
            @if(Session::get('s'))
        <h2 style="color:Yellow;">New Admin Created successfully !!</h2>
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
                {!!Form::text('name','',['class'=>'form-control','placeholder'=>'Full Name','required'])!!} </div>
                </div>
                <div class="form-group has-success has-feedback">
                <div class="input-icon right">
                <i class="fa fa-user"></i>      
                {!!Form::text('eid','',['class'=>'form-control','placeholder'=>'Employee Id','required'])!!} </div>
                </div>
                <div class="form-group has-success has-feedback">
                    <div class="input-icon right">
                    <i class="fa fa-envelope"></i>
                {!!Form::text('email','',['class'=>'form-control','placeholder'=>'Email Address','required'])!!}</div>
                </div>
                <div class="form-group has-success has-feedback">
               <div class="input-icon right">                                                            <i class="fa fa-lock"></i>
                {!!Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'])!!}</div>
                </div>

<div class="form-group">
               <div class="input-icon right">                                                            <i class="fa fa-lock"></i>
                Select an Image:{!!Form::file('image','',['class'=>'form-control','placeholder'=>'Select an Image','required'])!!}</div>
                </div>


                                                   <!-- <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-lock"></i>
                                                        Confirm Password :{!!Form::password('password',['class'=>'form-control'])!!}</div>
                                                    </div>
                                                    <hr />
                                                    
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Gender</option>
                                                            <option value="0">Male</option>
                                                            <option value="1">Female</option>
                                                            <option value="2">Other</option>
                                                        </select></div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input tabindex="5" type="checkbox" />&nbsp; I want to receive news and special
                                                                offers</label></div>
                                                    </div>
                                                    <div class="form-group mbn">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input tabindex="5" type="checkbox" />&nbsp; I agree with the Terms and Conditions</label></div>
                                                    </div>
                                                </div>-->
                                                <div class="form-actions text-right pal">
                                                    {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}
                                                </div>
                                             {!!Form::close()!!}
                                            </div>
                                        </div>
                                        </div>
                                        </div>
@stop







