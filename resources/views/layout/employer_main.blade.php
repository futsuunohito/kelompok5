<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('h')
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{ asset("/KIT/assets/img/favicon.png") }}">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="{{ asset("/KIT/bootstrap3/css/bootstrap.css") }}" rel="stylesheet" />
	<link href="{{ asset("/KIT/assets/css/gsdk.css") }}" rel="stylesheet" />  
    <link href="{{ asset("/KIT/assets/css/demo.css") }}" rel="stylesheet" /> 
    
    <!--     Font Awesome     -->
    <link href="{{ asset("/KIT/bootstrap3/css/font-awesome.css") }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>

<body class="hold-transition skin-blue layout-top-nav">

        <div id="navbar-full">
                <div id="navbar">
                <div class="navigation-example">
                     <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">
                      <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="/employer"> NEED!</a>
                        </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navigation-example-2">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="/employer">Home</a></li>
                            <li class="dropdown">
                                  <a href="#gsdk" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                        @if(!Auth::guest())
                                        <li><a href="{{route('employer.dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{route('employer_cv_view')}}">CV Search</a></li>
                                    @endif
                                    <li><a href="{{route('employer.post_job')}}">Post a Job</a></li>
                                  </ul>
                            </li>
                          </ul>
            
                          <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                     <li id="for_emp"><a href="/">Employer</a></li>
                                    <li><a href="{{route('employer.login')}}" class="btn btn-round btn-default">Login</a></li>
                                    <li><a href="{{route('employer.register')}}" class="btn btn-round btn-default">Sign Up</a></li>
                                @else
                                <li>
                                        <a href="{{route('employer.dashboard')}}">
                                            {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                    <li><a href="{{route('employer.company_profile')}}">Change profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-off" style="padding-right: 5px;"></i>Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @endif
                           </ul>
                          
                        </div><!-- /.navbar-collapse -->
            
                      </div><!-- /.container-fluid -->
                    </nav>

                    <div class='blurred-container'>
                    <div class="motto" style="padding-top:5px; ">
                            <h1 style="color:white;"><b>@yield('title')</b></h1>
        
                        </div>
                    </div>

                </div><!--  end navbar -->

                
            
            </div> <!-- end menu-dropdown -->
        
   
    <div class="content-wrapper" style="margin-top: 50px; margin-bottom:50px;">
            @section('content')
                @show
            </div>
    
            <div class="parallax-pro">
                    <footer class="main-footer">
                        <div class="container">
                            <h2><strong>  NEED! </strong></h2>
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
                </div>
  
    
<script src="{{asset('/KIT/jquery/jquery-1.10.2.js')}} " type="text/javascript"></script>
<script src="{{asset('/KIT/assets/js/jquery-ui-1.10.4.custom.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('/KIT/bootstrap3/js/bootstrap.js')}}" type="text/javascript"></script>
<script src="{{ asset('/KIT/assets/js/gsdk-checkbox.js')}}"></script>
<script src="{{ asset('/KIT/assets/js/gsdk-radio.js')}}"></script>
<script src="{{ asset('/KIT/assets/js/gsdk-bootstrapswitch.js')}}"></script>
<script src="{{ asset('/KIT/assets/js/get-shit-done.js')}}"></script>
<script src="{{ asset('/KIT/assets/js/custom.js')}}"></script>

<script type="text/javascript">
     
$('.btn-tooltip').tooltip();
$('.label-tooltip').tooltip();
$('.pick-class-label').click(function(){
    var new_class = $(this).attr('new-class');  
    var old_class = $('#display-buttons').attr('data-class');
    var display_div = $('#display-buttons');
    if(display_div.length) {
    var display_buttons = display_div.find('.btn');
    display_buttons.removeClass(old_class);
    display_buttons.addClass(new_class);
    display_div.attr('data-class', new_class);
    }
});
$( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
});
$( "#slider-default" ).slider({
        value: 70,
        orientation: "horizontal",
        range: "min",
        animate: true
});
$('.carousel').carousel({
  interval: 4000
});
  

</script>
</body>

</html>