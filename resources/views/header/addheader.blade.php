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
<div class="page-content col-lg-10">
	<div class="panel panel-green">
		<div class="panel-heading">
			Company Information (Header section)
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
					@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('company_name')=='')
					<div class="input-icon right">
						<i class="fa fa-user"></i>      
						{!!Form::text('company_name',$header->company_name,['class'=>'form-control','placeholder'=>'Add your Company name','required'])!!}
					</div>
					@endif
					@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('company_name')!='')
					<div class="input-icon right">
						<i class="fa fa-user"></i>      
						{!!Form::text('company_name',$header->company_name,['class'=>'form-control','placeholder'=>'Add your Company name','required'])!!}
					</div>
					@endif
				</div>
				<div class="form-group">
					<div class="input-icon right">                                                            
						<i class="fa fa-lock"></i>
						@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('company_logo')=='')
						<img src="{{URL::to('/')}}/images/adminimage/noimg.jpg" alt="Select an Image" class="center-block img-circle img-responsive" width="70" height ="80"/>
						<h5>Select Your Company logo:</h5>{!!Form::file('image','',['class'=>'form-control','placeholder'=>'Select an Image','required'])!!}
						@endif
						@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('company_logo')!='')
						<img src="{{URL::to('/')}}/images/adminimage/{{$header->company_logo}}"  class="center-block img-circle img-responsive" width="70" height ="80">
						
						<h5>Select Your Company logo:</h5>{!!Form::file('image','',['class'=>'form-control','placeholder'=>'Select an Image','required'])!!}
						@endif
					</div>
				</div>
				

				<div class="form-group">
					<div class="input-icon right">                                                            
						<i class="fa fa-lock"></i>
						@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('fevicon')=='')
						<img src="{{URL::to('/')}}/images/adminimage/noimg.jpg" alt="Select an Image" class="center-block img-circle img-responsive" width="70" height ="80"/>
						Select Fevicon:{!!Form::file('fev','',['class'=>'form-control','placeholder'=>'Select an Image','required'])!!}
						@endif
						@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('fevicon')!='')
						<img src="{{URL::to('/')}}/images/adminimage/{{$header->fevicon}}"  class="center-block img-circle img-responsive" width="70" height ="80">
						Select Fevicon:{!!Form::file('fev','',['class'=>'form-control','placeholder'=>'Select an Image','required'])!!}
						@endif
					</div>
				</div>
<div class="form-group has-success has-feedback">
					@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('year')=='')
					<div class="input-icon right">
						<i class="fa fa-user"></i>      
						{!!Form::text('year',$header->year,['class'=>'form-control','placeholder'=>'Add year','required'])!!}
					</div>
					@endif
					@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('year')!='')
					<div class="input-icon right">
						<i class="fa fa-user"></i>      
						{!!Form::text('year',$header->year,['class'=>'form-control','placeholder'=>'Add year','required'])!!}
					</div>
					@endif
				</div>
<div class="form-group has-success has-feedback">
					@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('link')=='')
					<div class="input-icon right">
						<i class="fa fa-user"></i>      
						{!!Form::text('link',$header->link,['class'=>'form-control','placeholder'=>'Add your web Address','required'])!!}
					</div>
					@endif
					@if(\App\User::where('eid','=',Auth::user()->eid)->pluck('link')!='')
					<div class="input-icon right">
						<i class="fa fa-user"></i>      
						{!!Form::text('link',$header->link,['class'=>'form-control','placeholder'=>'Add your Web Address','required'])!!}
					</div>
					@endif
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







