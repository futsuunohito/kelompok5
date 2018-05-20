@extends('layout.employer_main')

@section('title', 'Edit job')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><strong>Edit this Job</strong></h3>
                    <form action="/employer/job/store/{{$jobData->id}}" method="post">
                    {{csrf_field()}}
                        <div class="form-group{{$errors->has('title')?' has-error':''}}">
                            <label for="title">Job Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter job title" value="{{$jobData->title}}">
                            @if($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{$errors->first('title')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <select name="salary" class="form-control" id="salary">
                                <option value="Negotiable"@if($jobData->salary == "Negotiable"){{' selected="selected"'}}@endif>Negotiable</option>
                                <option value="0 - 25000 IDR"@if($jobData->salary == "0 - 25000 IDR"){{' selected="selected"'}}@endif>0 - 25000 IDT</option>
                                <option value="25001 - 50000 IDR"@if($jobData->salary == "25001 - 50000 IDR"){{' selected="selected"'}}@endif>25001 - 50000 IDR</option>
                                <option value="50001 - 75000 IDR"@if($jobData->salary == "50001 - 75000 IDR"){{' selected="selected"'}}@endif>50001 - 75000 IDR</option>
                            </select>
                        </div>
                        <div class="form-group{{$errors->has('deadline')?' has-error':''}}">
                            <label for="deadline">Application Deadline</label>
                            <input type="date" name="deadline" class="form-control" id="deadline" placeholder="YYYY-MM-DD" value="{{$jobData->deadline}}">
                            @if($errors->has('deadline'))
                                <span class="help-block">
                                    <strong>{{$errors->first('deadline')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('skill')?' has-error':''}}">
                            <label for="skill">Professional Skills</label>
                            <input type="text" name="skill" class="form-control" id="skill" placeholder="Professional Skills" value="{{$jobData->skill}}"> 
                            @if($errors->has('skill'))
                                <span class="help-block">
                                    <strong>{{$errors->first('skill')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-lg-offset-5">
                                <input type="submit" class="btn btn-warning" style="border-radius: 0;" value="SAVE JOB">
                                <br><br>
                            </div>
                        </div>
                    </form>
                    <!-- form ends here -->
                </div>
            </div>
            <!-- row ends here -->
        </div>
        <!-- first container ends here -->
    </section>
@endsection