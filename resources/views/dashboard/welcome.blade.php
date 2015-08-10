@extends('layouts.master')
@section('title')
    Home
@stop

@section('body')

<h1>OK</h1>       

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
                                <div class="panel profit db mbm">
                                <a href="{{URL::to('tk1')}}">
                                    <div class="panel-body">

                                        <p class="icon">
                                            <i class="icon fa fa-shopping-cart"></i>
                                        </p>
                                        <h4 class="value">
                                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                                            </span><span></span></h4>
                                        <p class="description">
                                            New Ticket</p>
                                        
                                    </div>
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
             
@stop