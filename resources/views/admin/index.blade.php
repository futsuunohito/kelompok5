

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/background.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<body class="background">
    <div class="container">
        <div class="row">
        <!-- <a href="{{route('admin.test')}}"> TEST </a> -->
            <br><br><br><br><br><br><br>
        <div class="col-md-offset-4 col-md-4 col-centered">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('seeker.login') }}">
                {{csrf_field()}}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}" required autofocus>
                      @if ($errors->has('email'))
                            <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                            </span>
                      @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="required">
                      @if ($errors->has('password'))
                            <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                            </span>
                      @endif
                  </div>
                  <input type="hidden" name="seeker" value="1">
                  <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">Log in as job seeker</button>
                </form>
                
                <br>
                <p style="text-align: center;"><strong>Not a member?</strong></p>
                <div class="row">
                  <div class="col-md-6"><a href="{{ route('seeker.register')}}" class="btn btn-primary form-control">Sign up as Job Seeker</a></div>
                  <div class="col-md-6"><a href="{{ route('employer.register')}}" class="btn btn-default form-control">Sign up as Employer</a></div>
                  <br>
                  <br>
                  <br>
                 </div>
            </div>


</body>