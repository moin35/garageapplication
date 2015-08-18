@extends('layouts.master')
@section('title')
    Home
@stop

@section('body')

      

         <!--BEGIN TITLE & BREADCRUMB PAGE-->
         <div class="content"><div class="row">
          <div class="col-md-12 text-center">
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
                @yield('sidebarmenu')
           <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">

                        <div class="row mbl">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                        <div class="col-lg-12">
                            <div id="sum_box" class="row mbl">
                            <div class="col-sm-6 col-md-3">
                                <div class="panel profit db mbm" >
                                <a href="" data-toggle="modal" data-target="#myModal">
                                    <div class="panel-body" >

                                        <p class="icon">
                                            <i class="icon fa fa-shopping-cart"></i>
                                        </p>
                                        <h4 class="value">
                                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                                            </span><span></span></h4>
                                        <p class="description" >
                                            New Ticket</p>
                                        
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel income db mbm">
                                <a href="#">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-money"></i>
                                        </p>
                                        <h4 class="value">
                                            <span></span><span></span></h4>
                                        <p class="description">
                                            Retrive</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel task db mbm">
                                <a href="#">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-signal"></i>
                                        </p>
                                        <h4 class="value">
                                            <span></span></h4>
                                        <p class="description">
                                            Setup</p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                <a href="#">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-group"></i>
                                        </p>
                                        <h4 class="value">
                                            <span></span></h4>
                                        <p class="description">
                                            Backup</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        </div>
                    </div>
                    </div></div></div>




  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:100%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
             Generate New Ticket
          </h4>
        </div>
        <div class="modal-body">
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
                {!!Form::text('car_num','',['class'=>'form-control','placeholder'=>'Car Number','required'])!!} </div>
                </div>
                <div class="form-group has-success has-feedback">
                    <div class="input-icon right">
                    <i class="fa fa-envelope"></i>
                {!!Form::text('phone','',['class'=>'form-control','placeholder'=>'Phone No:','required'])!!}</div>
                </div>
                
                
                <div class="form-group has-success has-feedback">
                    <div class="input-icon right">
                    <i class="fa fa-envelope"></i>
                {!!Form::text('address','',['class'=>'form-control','placeholder'=>'Address:','required'])!!}</div>
                </div>

                                     <div class="form-actions text-right pal">
                                                    {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}
                                                </div>
                                             {!!Form::close()!!}
                                            </div>
                                        </div>           
           
            
        </div>
        <div class="modal-footer">
        <a href="{{URL::to('tk1')}}">
          <button type="button" class="btn btn-default" >Submit</button>
        </a>
        </div>
      </div>
      
    </div>
  </div>                    
             
@stop