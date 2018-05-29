@extends('layout.employer_main')

@section('title', 'Dashboard')

@section('content')

<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(200, 0).slideUp(200, function(){
        $(this).remove(); 
    });
}, 2000);
</script>

    <section class="top" style="margin-top: 50px;">
        <div class="container">
        @if(session('msg'))
        <div class="alert alert-success" style="font-size: 16px; width:50%; margin-top: 10px; margin-left: 25%; text-align:center">
            {{session('msg')}}
        </div>
        @endif
        @if(session('msg-danger'))
        <div class="alert alert-danger" style="font-size: 16px; width:50%; margin-top: 10px; margin-left: 25%; text-align:center">
            {{session('msg-danger')}}
        </div>
        @endif
        @if(session('msg-warning'))
        <div class="alert alert-warning" style="width:50%; margin-top: 10px; margin-left: 25%; text-align:center">
            {{session('msg-warning')}}
        </div>
        @endif
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-2">
                    <img src="{{asset('/img/'.$company->image)}}" alt="Profile Picture" class="img-thumbnail" style="height: 180px; width: 500px;">
                        <br>
                        <form action="{{route('employer.image')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <input type="file" name="image" class="btn-xs" style="margin-top: 5px;">
                            <input type="submit" class="btn-xs btn-danger" style="margin-top: 5px;" id="upload" value="UPLOAD">
                        </form>
                    </div>
                <div class="col-lg-10">
                    <strong style="font-size:26px"><i  class="fa fa-circle text-success"></i>    {{$user->name}}</strong>
                    <br>
                    <br>
                    <p><strong>Faculty: </strong><j style="text-transform: uppercase">{{$user->faculty}}</j></p>
                    <p><strong>Lives in: </strong>{{$user->location}}</p>
                    <p><strong>Phone Number: </strong>{{$user->phone}}</p>
                    <div>
                        <a href="{{route('employer.post_job')}}" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-arrow-circle-up"></i> POST A JOB</a>
                        <a href="/employer/cv-list" class="btn btn-primary" style="border-radius: 0;"><i class="fa fa-database"></i> SEARCH CV DATABASE</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>

            <!-- Nav for Dashboard applied jobs status -->
            <div class="row">
                <div class="col-lg-12">

                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">My Jobs</a></li>
                        {{-- <li role="presentation"><a href="#">Account Settings</a></li> --}}
                    </ul>

                    <div id="myJobs">
                        <br>
                        <h4><strong>Active Jobs</strong></h4>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Category</th>
                                    <th>Posted</th>
                                    <th>Valid until</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($activeJobs as $job)
                                <tr>
                                    <td>{{$job->title}}</td>
                                    <td>{{$job->industry}}</td>
                                    <td>{{$job->created_at->format('d-m-Y')}}</td>
                                    <td>{{$job->deadline}}</td>
                                    <td><a href="/employer/job/delete/{{$job->id}}" class="btn btn-danger" style="border-radius: 0;"><i class="fa fa-trash"></i> DELETE</a></td>
                                    <td><a href="/employer/job/view/{{$job->id}}" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-eye"></i> VIEW JOB</a></td>
                                    <td><a href="/employer/job/edit/{{$job->id}}" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-edit"></i> EDIT</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Active jobs table ends here -->
                    </div>
                    <!-- myJobs end here -->
                </div>
            </div>
        </div>
    </section>
@endsection