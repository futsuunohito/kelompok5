@extends('layout.seeker_main')

@section('title', 'Apply now')

@section('content')
<section class="top" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="row">
                    <br>
                    <br>
                    <div class="col-lg-3 col-lg-offset-2">
                        <h4><strong>Apply for this Job</strong></h4>
                        <br>
                        <p><strong>Job Title: </strong>{{$job->title}}</p>
                        <p><strong>Company Name: </strong>{{$job->user->company->name}}</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2">
                        <h4><strong>Your contact information</strong></h4>
                        <br>
                        <p><strong>Email: </strong>{{$user->email}}</p>
                        <p><strong>Phone: </strong>{{$user->phone}}</p>
                    </div>
                </div>
                <div class="form-group top">
                    <div class="col-sm-offset-5 col-sm-12">
                    <br><br><br>
                        <a href="/seeker/apply/successfull/{{$job->id}}" class="btn btn-lg btn-warning">SEND</a><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection