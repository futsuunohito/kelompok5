@extends('layout.seeker_main')

@section('title', 'Jobseeker education')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                   <h4 style="text-align: center"><strong>Your Education</strong></h4>
                    <form action="{{route('seeker.edu')}}" method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="college">College/University</label>
                            <input type="text" name="college" class="form-control" id="college" placeholder="Institute name">
                        </div>
                        <div class="form-group">
                            <label for="degree_level">Degree Level</label>
                             <select name="degree_level" class="form-control" id="degree_level">
                                <option value="Bachelor">Bachelor</option>
                                <option value="Master's">Master's</option>
                                <option value="Diploma">Diploma</option>
                                <option value="SSC/HSC">SSC/HSC</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="field">Field of Study</label>
                            <input type="text" name="field" class="form-control" id="field" placeholder="Field of study">
                        </div>
                        <div class="form-group">
                            <label for="grade">Grade</label>
                            <input type="text" name="grade" class="form-control" id="grade" placeholder="Grade (i.e A, 100%)">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                             <select name="country" class="form-control" id="country">
                                <option value="Indonesia">Indonesia</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="language">Languages</label>
                            <input type="text" name="language" class="form-control" id="language" placeholder="Languages">
                        </div>
                         <div class="form-group">
                            <label for="interest">Interests and Activities</label>
                            <input type="text" name="interest" class="form-control" id="interest" placeholder="Interests and activities">
                        </div>
                        
                        <button type="submit" class="btn btn-warning form-control" style="text-transform:uppercase;border-radius:0;">SAVE CHANGES</button><br><br><br>
                    </form>
                </div>
            </div><!-- row ends here -->

        </div>
    </section>
@endsection