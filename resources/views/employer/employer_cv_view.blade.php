@extends('layout.seeker_main')
@section('title', 'Jobseeker CV')
@section('content')
<section class="top" style="margin-top: 50px;">
    <div class="container">
        <h3><strong>Public CV View</strong></h3>
        <div class="row">
            <div class="col-lg-2">
                <img src="{{asset('storage/images/'.$user->image)}}" alt="..." class="img-thumbnail" style="height: 180px; width: 500px;">
            </div>
            <div class="col-lg-10">
                <strong style="font-size:26px">     {{$user->name}}</strong>
                <br>
                <br>
                <p><strong>Lives in: </strong>{{$activity->location}}</p>
                <p><strong>Email: </strong>{{$user->email}}</p>
                <p><strong>Phone: </strong>{{$user->phone}}</p>
                <div> 
                    <a href="{{route('personal.info')}}" class="btn btn-primary"class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i> Edit Personal Information </a>
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
                <!-- <h4><Strong>About me</Strong><button name="personal_2" data-toggle="modal" data-target="#myModalAboutMe"class="btn-xs btn-warning" style="border-radius: 0; margin-left: 20px"><i class="fa fa-pencil-square-o"></i>EDIT</button></h4> -->
                <p style="text-align:center; font-weight: bold; font-size: 17px">{{$activity->about_me}}</p>
            </div>

            
            </div> <!-- row ends here---- -->
            
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h4><strong>Work experience</strong> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalCompany">+ ADD COMPANY/POSITION</button></h4> -->


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

                                <li class="list-group-item"><strong>Institution Name:</strong> {{$activity->college}}
                                <ul>
                                    <li><strong>Field of Study:</strong> {{$activity->field}}</li>
                                    {{-- <li><strong>From:</strong> </li>
                                    <li><strong>To:</strong> </li> --}}
                                    <li><strong>Grade: </strong>{{$activity->grade}}</li>
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
                
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <h4><strong>Education</strong> <a href="{{route('seeker.edu')}}"><button type="button" class="btn btn-warning" >+EDIT EDUCATION INFO</button></h4></a>
                        <h5><strong>{{$activity->college}}</strong></h5>
                        <p>{{$activity->degree}}</p>
                        <p>Field of study: <strong>{{$activity->field}}</strong></p>
                        <p>Grade: <strong>{{$activity->grade}}</strong></p>
                    </div>
                    </div>  -->
                    <!-- row ends here ---- -->
                    
                        
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


                                <!-- <table class="table">
                                    @foreach($skills as $skill)
                                    <tr><td><li>
                                        <p><strong>{{$skill->name}}</strong></p>
                                        <div class="col-lg-2">
                                            <p><strong>Level: </strong>{{$skill->level}}</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <p><strong>Experience: </strong>{{$skill->experience}}</p>
                                        </div></li>
                                    </td></tr>
                                    @endforeach
                                </table>
                            </div>
                            </div> -->
                            <!-- row ends here -->

                    <div class="row">
                        <div class="col-lg-12">
                            <h4><strong>Languages</strong></h4>
                            <p>{{$activity->language}}</p>
                        </div>
                        </div>
                        <!-- row ends here ---- -->
                                                    
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4><strong>Interests &amp; Activities</strong></h4>
                                    <p>{{$activity->interest}}</p>
                                </div>
                                </div> <!-- row ends here -->
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4><strong>Attachments</strong></h4>
                                        @foreach($attachments as $attachment)
                                        <a href="/seeker/download-cv/{{$attachment->id}}">{{$attachment->name}}</a> <br>
                                        @endforeach
                                        <h4><strong>Links</strong></h4>
                                        @foreach($links as $link)
                                        <a href="http://{{$link->url}}" target="_blank">{{$link->name}}</a><br>
                                        @endforeach
                                        <br><br><br>
                                    </div>
                                </div>
                            </div>
                            <!--First container-fluid ends here -->
                        </section>

                        @endsection



@section('script')

<script type="text/javascript">
    // seeker_edit_cv page js
jQuery(document).ready(function($) {
  
        $('#personal_1').click(function(event) {
                var name = $('#name').val();
                var location = $('#location').val();
                var phone = $('#phone').val();
                var gender = $('input[name=gender]:checked').val();
                
                $.post('{{route('seeker.edit_cv')}}', {'_token': $('input[name=_token]').val(), 'name': name,'location':location,'phone':phone,'gender':gender}, function(data) {
                    $('#sec_1').load(location.href + ' #sec_1');
                    console.log(data);
                });
            });

           //This is for SAVING Skills data
            $('#skill-btn').click(function(event) {
                var skillName = $('#skill_name').val();
                var level = $('#level').val();
                var experience = $('#experience').val();
                $.post('{{route('seeker.skill')}}', {'name':skillName,'level':level,'experience':experience,'_token':$('input[name=_token]').val()}, function(data) {
                    $('#skill').load(location.href + ' #skill');
                    console.log(data);
                });
            });
            //This function is for SAVING work experience data 
            $('#save').click(function(event) {
                var job_title= $('#job_title').val();
                var company_name= $('#company_name').val();
                var country= $('#country').val();
                var industry= $('#industry').val();
                var job_role= $('#job_role').val();
                var activity= $('#activity').val();
                // var vfrom= $('#from').val();
                // var vto= $('#to').val();
                // console.log(vto);
                $.post('{{route('seeker.work')}}', {'_token':$('input[name=_token]').val(), 'job_title':job_title,'company_name':company_name,'country':country,'industry':industry,'job_role':job_role,'activity':activity }, function(data) {
                    $('#works').load(location.href + ' #works');
                    console.log(data);
                });
                //'_token':$('meta[name="csrf-token"]').attr('content'), <-this is for the meta tag csrf_token() which is same as normal csrf_field() useness.
            });

            //About me button ajax
            $('#about_me_btn').click(function(event) {
                var about = $('#about_me').val();
                $.post('{{route('seeker.about')}}', {'_token':$('input[name=_token]').val(), 'about_me':about}, function(data) {
                    $('#about').load(location.href + ' #about');
                    console.log(data);
                });
            });
            //Education data ajax
            $('#edu_save').click(function(event) {
                var clg = $('#college').val();
                var degree = $('#degree_level').val();
                var field = $('#field').val();
                var grade = $('#grade').val();
                var country = $('#country').val();
                var language = $('#language').val();
                var interest = $('#interest').val();
                $.post('{{route('seeker.edu')}}',{'_token':$('input[name=_token]').val(), 'college':clg, 'degree':degree, 'field':field, 'grade':grade, 'country':country, 'language':language, 'interest':interest}, function(data) {
                    $('#edu').load(location.href + ' #edu');
                    console.log(data);
                });
            });
            //Links data upload ajax
            $('#link_save').click(function(event) {
                var link_name = $('#link_name').val();
                var link_url = $('#url').val();
                $.post('{{route('seeker.link')}}',{'_token':$('input[name=_token]').val(), 'link_name':link_name, 'url':link_url}, function(data) {
                    $('#link').load(location.href + ' #link');
                    console.log(data);
                });
            });

});
</script>
@endsection