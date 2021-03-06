<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{URL::to('/')}}/images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="{{URL::to('/')}}/images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::to('/')}}/images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::to('/')}}/images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/all.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/main.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/pace.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/jquery.news-ticker.css">
    <link rel="shortcut icon" href="{{URL::to('/')}}/images/adminimage/{{Auth::user()->fevicon}}">

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <style>
  .ui-progressbar {
    position: relative;
  }
  .progress-label {
    position: absolute;
    left: 50%;
    top: 4px;
    font-weight: bold;
    text-shadow: 1px 1px 0 #fff;
  }
  </style>
  </head>
<body>
   <div>

        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
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
                <img alt="" src="{{URL::to('/')}}/images/adminimage/{{Auth::user()->company_logo}}" class="hidden-xs  img-circle" width="20" height ="20"/>
                <span class="">{{Auth::user()->company_name}}</span>
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

    
        <!--END TOPBAR-->
        <div id="wrapper" style="margin-top: 1px;">
 
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li class="active"><a href="{{URL::to('dashboard')}}"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Dashboard</span></a></li>
                    <li><a href="{{URL::to('adminreg/'.Auth::user()->eid)}}"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Create New Admin</span></a>
                       
                    </li>
                    <li><a href="{{URL::to('header/'.Auth::user()->eid)}}"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Add Company Information</span></a>
                       
                    </li>
                    <li><a href="{{URL::to('ticket/'.Auth::user()->eid)}}"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Add Car Info</span></a>
                      
                    </li>
                    <li><a href="{{URL::to('addmodel')}}"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Add Model Information</span></a>
                       
                    </li>
                    
                    <li><a href="{{URL::to('addjobengine')}}"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Add engine & JOb list</span></a>
                    <!--  
                    </li>
                    <li><a href="Tables.html"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Tables</span></a>
                          
                    </li>
                    <li><a href="DataGrid.html"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Data Grids</span></a>
                      
                    </li>
                    <li><a href="Pages.html"><i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i><span class="menu-title">Pages</span></a>
                       
                    </li>
                    <li><a href="Extras.html"><i class="fa fa-gift fa-fw">
                        <div class="icon-bg bg-grey"></div>
                    </i><span class="menu-title">Extras</span></a>
                      
                    </li>
                    <li><a href="Dropdown.html"><i class="fa fa-sitemap fa-fw">
                        <div class="icon-bg bg-dark"></div>
                    </i><span class="menu-title">Multi-Level Dropdown</span></a>
                      
                    </li>
                    <li><a href="Email.html"><i class="fa fa-envelope-o">
                        <div class="icon-bg bg-primary"></div>
                    </i><span class="menu-title">Email</span></a>
                      
                    </li>
                    <li><a href="Charts.html"><i class="fa fa-bar-chart-o fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Charts</span></a>
                       
                    </li>
                    <li><a href="Animation.html"><i class="fa fa-slack fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Animations</span></a></li>-->
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            <div id="chat-form" class="fixed">
                <div class="chat-inner">
                    <h2 class="chat-header">
                        <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>
                    <div id="group-1" class="chat-group">
                        <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                                class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                                            <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                                                href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                                                <span class="badge badge-info is-hidden">0</span></a></div>
                    <div id="group-2" class="chat-group">
                        <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                            Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                                class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                                        Pierce</small> <span class="badge badge-info">1</span></a></div>
                    <div id="group-3" class="chat-group">
                        <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                                href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                                <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                                    <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                                        href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                                        <span class="badge badge-info is-hidden">0</span></a></div>
                </div>
                <div id="chat-box" style="top: 400px">
                    <div class="chat-box-header">
                        <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                            Mckenzie</span> <small>Online</small>
                    </div>
                    <div class="chat-content">
                        <ul class="chat-box-body">
                            <li>
                                <p>
                                    <img src="images/avatar/128.jpg" class="avt" /><span class="user">John Doe</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi Swlabs, we have some comments for you.</p>
                            </li>
                            <li class="odd">
                                <p>
                                    <img src="images/avatar/48.jpg" class="avt" /><span class="user">Swlabs</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi, we're listening you...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-textarea">
                        <input placeholder="Type your message" class="form-control" /></div>
                </div>
            </div>
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
 @yield('body')
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                 <div id="footer" style="color:red;" align="right">
                    <div class="copyright" >
                        <a href="{{Auth::user()->link}}" >{{Auth::user()->year}} © {{Auth::user()->company_name}}</a></div>
                </div>
                
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
       
    <script src="{{URL::to('/')}}/script/jquery-1.10.2.min.js"></script>
    <script src="{{URL::to('/')}}/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{URL::to('/')}}/script/jquery-ui.js"></script>
    <script src="{{URL::to('/')}}/script/bootstrap.min.js"></script>
    <script src="{{URL::to('/')}}/script/bootstrap-hover-dropdown.js"></script>
    <script src="{{URL::to('/')}}/script/html5shiv.js"></script>
    <script src="{{URL::to('/')}}/script/respond.min.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.metisMenu.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.slimscroll.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.cookie.js"></script>
    <script src="{{URL::to('/')}}/script/icheck.min.js"></script>
    <script src="{{URL::to('/')}}/script/custom.min.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.news-ticker.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.menu.js"></script>
    <script src="{{URL::to('/')}}/script/pace.min.js"></script>
    <script src="{{URL::to('/')}}/script/holder.js"></script>
    <script src="{{URL::to('/')}}/script/responsive-tabs.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.flot.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.flot.categories.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.flot.pie.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.flot.tooltip.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.flot.resize.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.flot.fillbetween.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.flot.stack.js"></script>
    <script src="{{URL::to('/')}}/script/jquery.flot.spline.js"></script>
    <script src="{{URL::to('/')}}/script/zabuto_calendar.min.js"></script>
    <script src="{{URL::to('/')}}/script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="{{URL::to('/')}}/script/highcharts.js"></script>
    <script src="{{URL::to('/')}}/script/data.js"></script>
    <script src="{{URL::to('/')}}/script/drilldown.js"></script>
    <script src="{{URL::to('/')}}/script/exporting.js"></script>
    <script src="{{URL::to('/')}}/script/highcharts-more.js"></script>
    <script src="{{URL::to('/')}}/script/charts-highchart-pie.js"></script>
    <script src="{{URL::to('/')}}/script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="{{URL::to('/')}}/script/main.js"></script>
   
</body>
</html>
