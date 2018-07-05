@extends('layout.seeker_main')

@section('title', 'Jobseeker Personal details')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <h3 style="text-align:center;"><strong>Personal Information</strong></h3>
            <div class="row">
                <div class="col-lg-offset-1 col-lg-2">
                    <img src="/img/user.jpg" alt="Profile Picture" class="img-thumbnail" style="height: 180px; width: 500px;">
                    <br>
                    <form action="#" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="file" name="image">
                        <br>
                        <input type="submit" class="btn btn-primary" id="upload" value="UPLOAD">

                    </form>
                </div>
                <div class="col-lg-6">
                    <p style="text-align: center;"><strong>We want to know about your personal information</strong></p>
                    <br><form action="{{route('reg_stp_2')}}" method="post" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="col-md-offset-1">
                        <div class="form-group{{$errors->has('phone')?' has-error': ''}}">
                            <label for="phone" class="col-sm-3">Phone Number:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone" placeholder="Enter your phone no." name="phone">
                                @if($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('phone')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{$errors->has('location')?' has-error': ''}}">
                            <label for="location" class="col-sm-3">Location:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="location" placeholder="Enter your location" name="location">
                                @if($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('location')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                               <p style="text-align: right;">* Mandatory field</p>
                                <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">Save Changes</button><br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection