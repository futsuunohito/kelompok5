@extends('layout.seeker_main')

@section('title', 'Helper Login')

@section('content')

    <section class="top" style="margin-top: 50px;">
       <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <h1 style="text-align:center"><strong>Helper</strong></h1>
                <h4 style="text-align:center"><strong>Log in and Explore yourself !</strong></h4>
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
                  <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">Log in as Helper</button>
                </form>
                <br>
                <p style="text-align: center;"><strong>Not a member yet?</strong></p>
                <div class="row">
                  <div class="col-lg-6"><a href="{{ route('seeker.register')}}" class="btn btn-primary form-control" style="text-transform: uppercase;border-radius:0;">Sign up as Helper</a></div>
                  <div class="col-lg-6"><a href="{{ route('employer.register')}}" class="btn btn-default form-control" style="text-transform: uppercase;border-radius:0;">Sign up as Seeker</a></div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection 