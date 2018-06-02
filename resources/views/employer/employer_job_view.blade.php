@extends('layout.employer_main')
@section('title', 'Job view')
@section('content')
<section class="top" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>{{$jobData->title}}</h3>
                <p><i class="fa fa-eye-slash"></i> <b>Posted by:</b> {{$jobData->user->name}}} </p>
                <p><strong>Application Deadline: </strong>{{$jobData->deadline}}</p>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <h4><strong>Job Details</strong></h4><hr>
                            <p><b>Skill Requirement:</b> {{$jobData->skill}}</p>
                            <p><b>Salary for this job:</b> {{$jobData->salary}}</p>
                        </div>
                    </div>
                </div><!-- inside row ends here -->
            </div>
        </div><!-- row ends here -->
        <div class="row">
            <div class="col-lg-12">
                <div id="job_applications">
                        <br>
                        <h2 style="color: blue;">Applications for this Job:</h2>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Applicant Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Location</th>
                                    <th>Applied Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($jobData->many_user as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->location}}</td>
                                    <td>{{$user->pivot->created_at->format('d-M-Y')}}</td>
                                    <!-- <td><a href="/employer/application/{{$jobData->id}}/delete/{{$user->id}}" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-trash"></i> DELETE</a></td> -->
                                    <td><a href="/employer/view/seeker-cv/{{$user->id}}" class="btn btn-primary" style="border-radius: 0;"><i class="fa fa-eye"></i> VIEW CV</a></td>
                                    <td><a href="/employer/email/{{$user->id}}" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-envelope"></i> EMAIL</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div><!-- row ends here -->

    </div><!-- First container ends here-->
</section>
@endsection