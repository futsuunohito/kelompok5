@extends('layout.seeker_main')

@section('title', 'Job view')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>{{$jobData->title}}</h3>
                    <p><i class="fa fa-eye-slash"></i> <b>Posted by:</b> {{$jobData->user->name}} </p>
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
                    <br><br>
                    <div class="row">
                        <div class="col-lg-3 col-lg-offset-3">
                                    <div class="form-group">
                                        <div class="col-sm-offset-1 col-sm-10">
                                            <a href="/seeker/job/apply/{{$jobData->id}}" class="btn btn-block btn-warning btn-flat">APPLY NOW</a><br><br>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="col-sm-offset-1 col-sm-10">
                                            <a href="{{route('seeker.find_jobs')}}" class="btn btn-block btn-primary btn-flat">SEE MORE JOBS</a><br><br>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div><!-- row ends here -->
            
        </div><!-- First container ends here-->
    </section>
@endsection