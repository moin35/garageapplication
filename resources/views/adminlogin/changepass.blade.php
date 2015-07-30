@extends('layouts/master')
@section('title')
Change Password
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
Change Your Password 
@if(Session::get('passok'))
<h2 style="color:Yellow">Password Changed successfully !!</h2>
@endif

</div>
<div class="panel-body pan">
{!!Form::open()!!}
<div class="form-body pal">


<div class="form-group has-success has-feedback">
<div class="input-icon right">                         
<i class="fa fa-lock"></i>
{!!Form::password('newp',['class'=>'form-control','placeholder'=>'Add New Password','required'])!!}<br>
</div>
</div>
<div class="form-group has-success has-feedback">
<div class="input-icon right">                         
<i class="fa fa-lock"></i>
{!!Form::password('newp1',['class'=>'form-control','placeholder'=>'Confirm Password','required'])!!}
</div>
</div>
<div class="form-actions text-right pal">
{!!Form::submit('Update',['class'=>'btn btn-primary form-control'])!!}
</div>
{!!Form::close()!!}
</div>
</div>
</div>
</div>

@stop