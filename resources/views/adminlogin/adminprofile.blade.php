 @extends('layouts.master')
@section('title')
Profile OF {{Auth::user()->name}}
@stop
@section('body')
<!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Profile</div>
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
 <div class="col-lg-7">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="profile">
                                            <div style="margin-bottom: 15px" class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <h2>
                                                        {{$adminprofile->name}}</h2>
                                                    <p>
                                                        <h4><strong>Email Address:</strong> {{$adminprofile->email}}</h4>
                                                    </p>
                                                                            
                                                </div>
                                                <div class="col-xs-12 col-sm-4 text-center">
                                                    <figure><img src="{{URL::to('/')}}/images/adminimage/{{$adminprofile->img}}" alt="" style="display: inline-block" class="img-responsive img-circle" width="200px" height="200px"  />
                                                </figure>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
 <div class="col-lg-5">
                  <div class="panel">
                                    <div class="panel-body">
                                        <div class="profile">
                                            <div style="margin-bottom: 15px" class="row">
                                            {!! Form::open(['files'=>'true' ]) !!}
                                                <div class="col-xs-12 col-sm-8">
                                                    <h4>Edit your Profile</h4>
                                                    {!!Form::text('name',$adminprofile->name,
                                                    ['class'=>'form-control',
                                                    'placeholder'=>'Add your Company name',
                                                    'required'])!!}<br>
                                                    {!!Form::text('email',
                                                    $adminprofile->email,
                                                    ['class'=>'form-control',
                                                    'placeholder'=>'Add your Company name',
                                                    'required'])!!}<br>
                                                    Select Fevicon:{!!Form::file('image',
                                                    '',
                                                    ['class'=>'form-control',
                                                    'placeholder'=>'Select an Image',
                                                    'required'])!!}     <br>               
                                                </div>
                                                <div class="col-xs-12 col-sm-4 text-center">
                                                    <figure><img src="{{URL::to('/')}}/images/adminimage/{{$adminprofile->img}}" alt="" style="display: inline-block" class="img-responsive img-circle" width="200px" height="200px"  />
                                                
                                                </figure>

                                                </div>
                                                <div class="form-actions text-right pal">
                {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}
            </div>
                                                {!!Form::close()!!}
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
 @stop