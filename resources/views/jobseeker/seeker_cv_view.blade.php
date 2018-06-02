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
                <img src="{{asset('/img/kucing.jpg')}}" alt="Profile Picture" class="img-thumbnail" style="height: 180px; width: 500px;">
            </div>
            <div class="col-lg-10">
                <strong style="font-size:26px"><i  class="fa fa-circle text-success"></i>     {{$user->name}}</strong>
                <br>
                <br>
                <p><strong>Lives in: </strong>{{$user->location}}</p>
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
                                    <li><strong>Position:</strong> {{$work->job_role}}</li>
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

                                <li class="list-group-item"><strong>Institution Name:</strong> IPB
                                <ul>

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
                                <label for="job_role" class="col-sm-2 control-label">Job Role:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="job_role" class="form-control" id="job_role" placeholder="Job Role">
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
                var job_role= $('#job_role').val();
                var activity= $('#activity').val();
                $.post('{{route('seeker.work')}}', {'_token':$('input[name=_token]').val(), 'job_title':job_title,'job_role':job_role,'activity':activity }, function(data) {
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
                var degree = $('#degree_level').val();
                var field = $('#field').val();
                $.post('{{route('seeker.edu')}}',{'_token':$('input[name=_token]').val(), 'degree':degree, 'field':field}, function(data) {
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