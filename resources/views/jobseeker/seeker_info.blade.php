@extends('layout.seeker_main')

@section('title', 'Jobseeker Personal details')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <h3 style="text-align:center;"><strong>Personal Information</strong></h3>
            <div class="row">
                <div class="col-lg-offset-1 col-lg-2">
            <img src="https://ididnthavemyglasseson.files.wordpress.com/2013/12/579182_226496094141418_209009517_n.jpg" alt="Profile Picture" class="img-thumbnail" style="height: 180px; width: 500px;">
                    <br>
                    <form action="{{route('employer.company_image')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!-- {{ method_field('put') }} -->
                        <input type="file" name="image">
                        <br>
                        <input type="submit" class="btn btn-primary" id="upload" value="UPLOAD">

                    </form>
                </div>
                <div class="col-lg-6">
                    <p style="text-align: center;"><strong>We want to know about your personal information</strong></p>
                    <br><form action="{{route('reg_stp_2')}}" method="post" class="form-horizontal">
                    {{csrf_field()}}
                        <div class="form-group{{$errors->has('phone')? ' has-error': ''}}">
                            <label for="phone" class="col-sm-4 control-label">Phone Number:*</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                                 @if($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('phone')}}</strong>
                                    </span>
                            @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Current Location:*</label>
                            <div class="col-sm-8">
                                 <select name="location" class="form-control">
                                    <option value="Babakan Raya">Babakan Raya</option>
                                    <option value="Babakan Tengah">Babakan Tengah</option>
                                    <option value="Cibanteng">Cibanteng</option>
                                    <option value="Dramaga Cantik">Dramaga Cantik</option>
                                    <option value="Puri D'kost">Puri D'kost</option>
                                    <option value="IPB Dramaga">IPB Dramaga</option>
                                    <option value="IPB Baranangsiang">IPB Baranangsiang</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
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