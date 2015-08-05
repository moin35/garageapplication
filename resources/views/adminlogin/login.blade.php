<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="{{URL::to('/')}}/http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/all.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/main.css">
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/styles/style-responsive.css">
</head>
<body style="background: url('images/bg/bg.png') center center fixed;">
    <div class="page-form">
        <div class="panel panel-blue">
            <div class="panel-body pan">
                {!!Form::open()!!}
                <div class="form-body pal">
                    <div class="col-md-12 text-center">
                        <h1 style="margin-top: -90px; font-size: 48px;">
                            Vehicle Solution </h1>
                        <br />
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <img src="images/avatar/profile-pic.png" class="img-responsive" style="margin-top: -35px;" />
                        </div>
                        <div class="col-md-9 text-center">
                            <h1>
                                Hold on, please.</h1>
                            <br />
                            <p>
                                Just sign in and we’ll send you on your way</p>
                                @if(Session::get('saved'))
                                <h2 style="color:red">Wrong Email or Password !!
                                </h2>
                                @endif
                                
            @if(Session::get('s'))
        <h2 style="color:Green;">Registration successfull Please login !!</h2>
        @endif
        
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-md-3 control-label"><br>
                            Email:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                {!!Form::text('username','',['class'=>'form-control','placeholder'=>'Email Address','required'])!!}<br>
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-md-3 control-label"><br>
                            Password:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-lock"></i>
                                {!!Form::password('pass',['class'=>'form-control','placeholder'=>'password','required'])!!}<br>
                                </div>
                        </div>
                    </div>
                    <div class="form-group mbn">
                        <div class="col-lg-12" align="right">
                            <div class="form-group mbn">
                                <div class="col-lg-3">
                                    &nbsp;
                                </div>
                                <div class="col-lg-9">
                                    <a href="{{URL::to('reg')}}" class="btn btn-default">Sign Up</a>&nbsp;&nbsp;
                                    {!!Form::submit('Login',['class'=>'btn btn-default'])!!}<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <p>
                Forgot Something ?
            </p>
        </div>
    </div>
</body>
</html>
