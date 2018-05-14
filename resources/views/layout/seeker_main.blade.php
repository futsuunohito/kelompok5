<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('h')
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/dropdown.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}"> -->

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>

<body class="hold-transition skin-blue layout-top-nav">
    <header class="main-header">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><i class="glyphicon glyphicon-send"></i>  <strong>  Need! </strong></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-3">
                                <ul class="nav navbar-nav ">
                                    <li class=""><a href="/">Home <span class="sr-only">(current)</span></a></li>
                                    @if(!Auth::guest())
                                        <li><a href="{{route('seeker.dashboard')}}">Dashboard</a></li>

                                    @endif
                                    <li><a href="{{route('seeker.find_jobs')}}">Find jobs</a></li>
                                </ul>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <br><div class="pull-left" class="dropdown">
                                <button class="pull-left" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="font-size: 14px">Login as 
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu" style="background-color: #c0c0c0;">
                                    <li><a href="{{route('seeker.login')}}" style="color: black; text-align: center">Job Seeker</a></li>
                                    <li><a href="{{route('employer.login')}}" style="color: black; text-align: center">Employer</a></li>
                                </ul>
                            </div>
                            <!-- <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#ffffff; font-size:15px; font-weight:bold; font-family:Monospace">
                                    Login <span class="caret"></span>
                                </a>
                                <div class="dropdown-content">
                                    <li><a href="{{route('seeker.login')}}">Login as Jobseeker</a></li>
                                    <li><a href="{{route('employer.login')}}">Login as Employer</a></li>
                                </div>
                            </div>
                            <li><a href="{{ route('seeker.login') }}">Login</a></li>
                            <li><a href="{{ route('seeker.register') }}">Sign Up</a></li>
                            <li id="for_emp"><a href="{{route('employer.login')}}">For Employer</a></li> -->
                        @else
                            <li>
                                <a href="{{route('seeker.view')}}">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li><a href="{{route('seeker.settings')}}" style="font-size: 10px">Change Password</a></li>
                            <li>    
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-off" style="padding-right: 5px;"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
       <!-- first .contaienr-fluid ends here -->
    <!--wrapper-->
    </header>
        {{-- Navbar Ends here --}}
        <div class="content-wrapper" style="margin-top: 50px;">
        @section('content')
            @show
        </div>

         {{--     Footer tarts here    --}}
    <footer class="main-footer">
        <div class="container">
            <h2><i class="glyphicon glyphicon-send"></i> <strong>  Need! </strong></h2>
            <div class="row foot_links">
                <div class="col-lg-3">
                    <h5>Job Seekers</h5>
                    <p><a href="{{route('seeker.edit_cv')}}">Post your CV</a></p>
                    <p><a href="{{route('seeker.find_jobs')}}">Advanced job search</a></p>
                    <!-- <p><a href="">Tips for finding jobs</a></p>
                    <p> <a href="">Create a perfect CV</a></p>
                    <p><a href="">Terms of service for job seekers</a></p> -->
                </div>
                <div class="col-lg-3">
                    <h5>Employers</h5>
                    <p><a href="{{route('employer.post_job')}}">Post a job</a></p>
                    <p><a href="{{route('employer_cv_view')}}">CV search</a></p>
                    <!-- <p><a href="">Tips for recruiting</a></p>
                    <p><a href="">Terms of service for employers</a></p> -->
                </div>
                <div class="col-lg-3">
                    <p><a href="">About us</a></p>
                    <p><a href="">Privacy policy</a></p>
                    <p><a href="/contact">Contact Us</a></p>
                </div>
                <div class="col-lg-3 social">
                    <p><a href="https://www.facebook.com" target="_blank" id="a1"><i class="fa fa-facebook"></i></a></p>
                    <p><a href="https://www.twitter.com" target="_blank" id="a2"><i class="fa fa-twitter"></i></a></p>
                    <p><a href="https://www.google-plus.com" target="_blank" id="a3"><i class="fa fa-google-plus"></i></a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 copyright">
                    <p>&copy; 2018 - Kelompok 5. All Rights</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('/js/jquery-2.1.4.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>    
    @yield('script')

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
<!-- DataTables -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->

<!-- page script -->
</body>

</html>