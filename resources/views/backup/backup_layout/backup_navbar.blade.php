<body class="hold-transition skin-blue layout-top-nav">
    <header class="main-header" class="hold-transition skin-blue layout-top-nav">
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
                        <a class="navbar-brand" href="/home"><i class="glyphicon glyphicon-send"></i>  <strong>  Need! </strong></a>
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
                            <li><a href="{{ route('seeker.login') }}">Login</a></li>
                            <li><a href="{{ route('seeker.register') }}">Sign Up</a></li>
                            <li id="for_emp"><a href="/employer">For Employer</a></li>
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
</body>