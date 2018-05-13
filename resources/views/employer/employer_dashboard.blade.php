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
        <div class="alert alert-success" style="width:50%; margin-top: 10px; margin: auto; text-align:center">
            {{session('msg')}}
        </div>
        @endif
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-2">
                <img src="https://ididnthavemyglasseson.files.wordpress.com/2013/12/579182_226496094141418_209009517_n.jpg" alt="Profile Picture" class="img-thumbnail" style="height: 180px; width: 500px;">
                        <div> 
                            <br>
                            <a href="{{route('employer.company_profile')}}" class="btn btn-primary"class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i> Edit Your Profile </a>
                            <!-- <a href="{{route('seeker.edit_cv')}}" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i> EDIT MY CV</a> -->
                            {{-- <a href="" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-download"></i> DOWNLOAD AS PDF</a> --}}
                        </div>
                </div>
            
                <div class="col-lg-10">
                    <strong style="font-size:26px"><i  class="fa fa-circle text-success"></i>    {{$user->name}}</strong>
                    <br>
                    <br>
                    <p><strong>Faculty: </strong>{{$company->country}}</p>
                    <p><strong>Lives in: </strong>{{$company->city}}</p>
                    <p><strong>Phone Number: </strong>{{$company->website}}</p>
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

                        <br>
                        {{-- This codes are for DRAFTED JOBS. I'll handle it later --}}
                        {{-- <h4><strong>Unpublished Jobs</strong></h4>
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
                                <tr>
                                    <td>Manager</td>
                                    <td>IT/Software</td>
                                    <td>11/11/2018</td>
                                    <td>34/44/2042</td>
                                    <td><a href="" class="btn btn-danger" style="border-radius: 0;"><i class="fa fa-trash"></i> DELETE</a></td>
                                    <td><a href="" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-eye"></i> VIEW JOB</a></td>
                                    <td><a href="" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-edit"></i> EDIT</a></td>
                                </tr>
                            </tbody>
                        </table> --}}
                        <!-- Unpublished jobs table ends here -->
                    </div>
                    <!-- myJobs end here -->

                    <!-- Account Settings page  -->
                    <div id="accountSetting" style="display: none;">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="smk@gmail.com" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter new password" value="123456">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="first name here">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="last name here">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="phone no. here">
                                </div>
                                <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">SAVE</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection