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

</head>
<body>
<div>

<!--BEGIN BACK TO TOP-->
<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
<!--END BACK TO TOP-->

@yield('header')

<!--END TOPBAR-->
<div id="wrapper" class="col-lg-6">
<div class="panel panel-green ">
<div class="panel-heading">
Registration form
@if(Session::get('s'))
        <h2 style="color:Green;">Registration successfull Go to login page !!</h2>
        @endif
        @if(Session::get('em'))
        <h2 style="color:white;">you already used this email !!</h2>
        @endif

</div>
<div class="panel-body pan">
{!! Form::open(['files'=>'true' ]) !!}
<div class="form-body pal">
    <div class="form-group">
    <div class="input-icon right">
    <i class="fa fa-user"></i>
    {!!Form::text('username','',['class'=>'form-control','placeholder'=>'User Name','required'])!!} 
    </div>
    </div>
    <div class="form-group">
    <div class="input-icon right">
    <i class="fa fa-envelope"></i>
    {!!Form::text('email','',['class'=>'form-control','placeholder'=>'Email Address','required'])!!}
    </div>
    </div>
    <div class="form-group">
    <div class="input-icon right">
    <i class="fa fa-lock"></i>
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'])!!}
    </div>
    </div>
    <div class="form-group">
    <div class="input-icon right">
    <i class="fa fa-lock"></i>
    {!!Form::password('',['class'=>'form-control','placeholder'=>'Retype Password','required'])!!}
    </div>
    </div>
<hr />
<div class="row">
        <div class="col-md-6">
        <div class="form-group">
        {!!Form::text('name','',['class'=>'form-control','placeholder'=>'Full Name','required'])!!}
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        {!!Form::text('eid','',['class'=>'form-control','placeholder'=>'Employee Id','required'])!!}
        </div>
    </div>
</div>
<div class="form-group">
       
       Gender: {!!Form::select('gender', array('Male' => 'Male','Female' => 'Female','Other' => 'Other'),null,['class'=>'form-control','required'])!!}
        

</div>
<div class="form-group">
               <div class="input-icon right">                                                            <i class="fa fa-lock"></i>
                Select an Image:{!!Form::file('image','',['class'=>'form-control','placeholder'=>'Select an Image','required'])!!}</div>
                </div>
<div class="form-group">
<div class="checkbox">
    <label>
        <input tabindex="5" type="checkbox" />&nbsp; I want to receive news and pecialoffers
    </label>
</div>
</div>
<div class="form-group mbn">
    <div class="checkbox">
        <label>
         <input tabindex="5" type="checkbox" />&nbsp; I agree with the Terms and Conditions</label></div>
            </div>

    </div>
            <div class="form-actions text-right pal">
                <button type="submit" class="btn btn-primary">
                   Submit</button>
               </div>
               {!!Form::close()!!}
           </div>
       </div>
       <!--BEGIN FOOTER-->

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
