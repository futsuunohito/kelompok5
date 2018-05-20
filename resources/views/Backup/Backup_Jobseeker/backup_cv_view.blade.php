@extends('layout.seeker_main')

@section('title', 'Jobseeker CV')

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
        <h3><strong>My Profile</strong></h3>
        <div class="row">
            <div class="col-lg-2">
                <img src="https://ididnthavemyglasseson.files.wordpress.com/2013/12/579182_226496094141418_209009517_n.jpg" alt="Profile Picture" class="img-thumbnail" style="height: 180px; width: 500px;">
            </div>
            <div class="col-lg-10">
                <strong style="font-size:26px"><i  class="fa fa-circle text-success"></i>     {{$user->name}}</strong>
                <br>
                <br>
                <p><strong>Lives in: </strong>{{$activity->location}}</p>
                <p><strong>Email: </strong>{{$user->email}}</p>
                <p><strong>Phone: </strong>{{$user->phone}}</p>
                <div> 
                    <a href="{{route('seeker.info')}}" class="btn btn-primary"class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i> Edit Personal Information </a>
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
                                <div class="col-lg-6 pull-right">
                                        <button type="submit" id="delete_btn" class="btn-s btn-danger">DELETE</button>
                                </div>
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

                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalCompany">+ ADD COMPANY/POSITION</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->

                

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
                                                            <div class="col-lg-6 pull-right">
                                                                <button type="submit" id="delete_btn" class="btn-s btn-danger">DELETE</button>
                                                            </div>
                                                        </div>
                                                        {{-- <input type="hidden" id="{{$skill->id}}"> --}}
                                                    </li>
                                                @endforeach
                                                </ul>

                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalSkills">+ ADD SKILLS</button>

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
                    <h4><strong>Education</strong></h4>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Education Background
                        </div>
                        <div class="panel-body" id="edu">
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

                            <a href="{{route('seeker.edu')}}"><button type="button" class="btn btn-warning" >+EDIT EDUCATION INFO</button></a>

                           {{--  <div class="checkbox">
                                <label style="color: darkblue;">
                                    <input type="checkbox"> No Prior Experience
                                </label>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            
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
                                
            {{--                <div class="row">
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
                            </div> --}}
                            <!--First container-fluid ends here -->
                        </section>


     <!-- Modal for ADD COMPANY/POSITION -->

        <div class="modal fade" id="myModalCompany" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Company/Position</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="job_title" class="col-sm-2 control-label">Job Title:*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Job Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">Company Name: *</label>
                                <div class="col-sm-10">
                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company name">
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Dates:</label>
                                <div class="col-sm-10">
                                   <label id="from">From:</label>
                                    <input type="date" name="from" id="from" placeholder="DD/MM/YYYY"> 
                                    <label id="to">To:</label>
                                    <input type="date" name="to" id="to" placeholder="DD/MM/YYYY">
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="country" class="col-sm-2 control-label">Country:</label>
                                <div class="col-sm-10">
                                    <select name="country" class="form-control" id="country">
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Netherland">Netherland</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="industry" class="col-sm-2 control-label">Industry:</label>
                                <div class="col-sm-10">
                                    <select name="industry" class="form-control" id="industry">
                                        <option value="Accounting">Accounting</option>
                                        <option value="IT/Software">IT/Software</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Garments">Garments</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="job_role" class="col-sm-2 control-label">Job Role:</label>
                                <div class="col-sm-10">
                                    <select name="job_role" class="form-control" id="job_role">
                                        <option value="Accountant">Accountant</option>
                                        <option value="CEO">CEO</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Field worker">Field worker</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="activity" class="col-sm-2 control-label">Activities:</label>
                                <div class="col-sm-10">
                                    <textarea name="activity" id="activity" cols="30" rows="4" class="form-control" placeholder="Your Activities"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="save" class="btn btn-primary" data-dismiss="modal">SAVE</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal for ADD SKILLS -->

  <div class="modal fade" id="myModalSkills" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Skills</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Skill:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="skill_name" placeholder="Skill name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="level" class="col-sm-2 control-label">Level:</label>
                                <div class="col-sm-10">
                                    <select name="level" class="form-control" id="level">
                                        <option value="Begineer">Begineer</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Experienced">Experienced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="experience" class="col-sm-2 control-label">Years of experience:</label>
                                <div class="col-sm-10">
                                    <select name="experience" class="form-control" id="experience">
                                        <option value="0 - 2 years">0 - 2 years</option>
                                        <option value="3 - 5 years">3 - 5 years</option>
                                        <option value="6 - 10 years">6 - 10 years</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="skill-btn" class="btn btn-primary" data-dismiss="modal">Save Skill</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for ABOUT ME -->

  <div class="modal fade" id="myModalAboutMe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">About Me</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">

                            <div class="form-group">
                                <label for="about_me" class="col-sm-1 control-label">About Me: </label>
                                <div class="col-sm-11" id="about">

                                    <textarea name="about_me" class="form-control" rows="4" cols="20" id="about_me" placeholder="Write something about yourself">{{$activity->about_me}}</textarea>
                                    <br>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="about_me_btn" class="btn btn-primary" data-dismiss="modal">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

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