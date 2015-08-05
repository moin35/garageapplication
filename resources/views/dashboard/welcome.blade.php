@extends('layouts.master')
@section('title')
    Home
@stop

@section('body')
@section('header')
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header ">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a id="logo" href="{{URL::to('/')}}" class="navbar-brand">
                <span class="fa fa-rocket"></span>
                <img alt="" src="{{URL::to('/')}}/images/adminimage/{{$p->company_logo}}" class="hidden-xs  img-circle" width="20" height ="20"/>
                <span class="">{{$p->company_name}}</span>
                <span style="display: none" class="logo-text-icon">µ</span>
                </a>
                </div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                </form>

                <ul class="nav navbar navbar-top-links navbar-right mbn">
                   
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="{{URL::to('/')}}/images/adminimage/{{Auth::user()->img}}" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Hello {{Auth::user()->name}}</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="{{URL::to('adminprofile/'.Auth::user()->eid)}}"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            
                    
                            <li class="divider"></li>
                            <li><a href="{{URL::to('changepass/'.Auth::user()->eid)}}"><i class="fa fa-lock"></i>Change password</a></li>
                            <li><a href="{{URL::to('logout')}}"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->

            
         @stop
<h1></h1>       

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
                                <a href="{{URL::to('adminprofile/'.Auth::user()->eid)}}">
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
                    @section('footer')
                    <div id="footer" style="color:red;" align="right">
                    <div class="copyright" >
                        <a href="{{$foot->link}}" >{{$foot->year}} © {{$foot->company_name}}</a></div>
                </div>
                    @stop
@stop