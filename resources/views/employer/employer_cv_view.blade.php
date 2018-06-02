@extends('layout.seeker_main')
@section('title', 'Jobseeker CV')
@section('content')
<section class="top" style="margin-top: 50px;">
    <div class="container">
        <h3><strong>Public CV View</strong></h3>
        <div class="row">
            <div class="col-lg-2">
                <img src="/img/kucing.jpg" alt="..." class="img-thumbnail" style="height: 180px; width: 500px;">
                <!-- <img src="{{asset('storage/images/'.$user->image)}}" alt="..." class="img-thumbnail" style="height: 180px; width: 500px;"> -->
            </div>
            <div class="col-lg-10">
                <strong style="font-size:26px">     {{$user->name}}</strong>
                <br>
                <br>
                <p><strong>Lives in: </strong>{{$user->location}}</p>
                <p><strong>Email: </strong>{{$user->email}}</p>
                <p><strong>Phone: </strong>{{$user->phone}}</p>
                <div> 
                    <!-- <a href="{{route('personal.info')}}" class="btn btn-primary"class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i> Edit Personal Information </a> -->
                     <!-- <a href="{{route('seeker.edit_cv')}}" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i> EDIT MY CV</a> -->
                    {{-- <a href="" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-download"></i> DOWNLOAD AS PDF</a> --}}
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- row ends here -->
        


            <!-- row ends here -->
        
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Work Experience</strong></h4>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Company/Position
                        </div>
                        <div class="panel-body" id="works">
                        
                            <ul class="list-group">
                            @foreach($works as $work)
                                <li class="list-group-item"><strong>Title:</strong> {{$work->job_title}}
                                <ul>
                                    <li><strong>Company name:</strong> {{$work->company_name}}</li>
                                    <li><strong>Position:</strong> {{$work->job_role}}</li>
                                    {{-- <li><strong>From:</strong> </li>
                                    <li><strong>To:</strong> </li> --}}
                                    <li><strong>Activities:</strong> {{$work->activity}}</li>
                                </ul>
                                </li>
                            @endforeach
                            </ul>


                           {{--  <div class="checkbox">
                                <label style="color: darkblue;">
                                    <input type="checkbox"> No Prior Experience
                                </label>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->

                    <!-- @foreach($works as $work)
                    <div class="row">
                        <table class="table">
                            <tr>
                                <div class="col-lg-3">
                                    <p><strong>Job title: </strong>{{$work->job_title}}</p>
                                    <p><strong>Company: </strong>{{$work->company_name}}</p>
                                </div>
                                <div class="col-lg-3">
                                    <p><strong>Industry: </strong>{{$work->industry}}</p>
                                    <p><strong>Job role: </strong>{{$work->job_role}}</p>
                                </div>
                                <p><strong>Activities: </strong>{{$work->activity}}</p>
                            </tr>
                        </table>
                    </div>
                    @endforeach
                </div>
                </div> -->
                <!-- row ends here --- -->
                
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Education</strong></h4>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Education Background
                        </div>
                        <div class="panel-body" id="works">
                            <ul class="list-group">
                                <ul>
                                {{--     <li><strong>Field of Study:</strong> {{$activity->field}}</li>
                                    <li><strong>From:</strong> </li>
                                    <li><strong>To:</strong> </li>
                                    <li><strong>Grade: </strong>{{$activity->grade}}</li>  --}}
                                </ul>
                                </li>

                            </ul>

                           {{--  <div class="checkbox">
                                <label style="color: darkblue;">
                                    <input type="checkbox"> No Prior Experience
                                </label>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->
                
                    
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <h4><strong>Skills</strong></h4>    
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Skills
                                            </div>
                                            <div class="panel-body" id="skill">
                                                <ul class="list-group">
                                                @foreach($skills as $skill)
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <strong>Skill: </strong>{{$skill->name}}<br>
                                                                <strong>Level: </strong>{{$skill->level}}<br>
                                                                <strong>Experience: </strong>{{$skill->experience}}
                                                            </div>
                                                            {{--<form action="{{ route('post.destroy', $post) }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit" class="byn btn-xs btn-danger">Delete</button>
                                                            </form> --}}
                                                        </div>
                                                        {{-- <input type="hidden" id="{{$skill->id}}"> --}}
                                                    </li>
                                                @endforeach
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            <!--First container-fluid ends here -->
                        </section>

                        @endsection
