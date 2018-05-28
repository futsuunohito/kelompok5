@extends('layout.seeker_main')

@section('title', 'Register')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <h4><strong>Sign up today and find the best jobs online!</strong></h4>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('seeker.register') }}">
                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name"  required autofocus>
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('phone')?' has-error': ''}}">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter your phone no." name="phone">
                            @if($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{$errors->first('phone')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('location')?' has-error': ''}}">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" placeholder="Enter your location" name="location">
                            @if($errors->has('location'))
                                <span class="help-block">
                                    <strong>{{$errors->first('location')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('faculty') ? ' has-error' : '' }}">
                            <label for="location">Faculty</label>
                            <input type="text" class="form-control" id="faculty" name="faculty" value="{{ old('faculty') }}" placeholder="Enter your faculty"  required autofocus>
                            @if ($errors->has('faculty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('email') ? ' has-error': ''}}">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" id="email" placeholder="Enter email" required>
                            @if($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('password') ? ' has-error': ''}}">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            @if($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{$errors->first('password')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="confirm-password" placeholder="Confirm password">
                        </div>
                        <input type="hidden" name="seeker" value="1">
                        
                        <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">Sign up as Helper</button>
                    </form>
                    <br>
                    <p><strong>Already a member?</strong></p>
                    <a  href="{{ route('seeker.login')}}"><button type="submit" class="btn btn-primary form-control" style="text-transform: uppercase;border-radius:0;">Log In</button></a>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
@endsection