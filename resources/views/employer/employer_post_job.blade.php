@extends('layout.employer_main')

@section('title', 'Post Job')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><strong>Post a Job</strong></h3>
                    <form action="{{route('employer.post_job')}}" method="post">
                    {{csrf_field()}}
                        <div class="form-group{{$errors->has('title')?' has-error':''}}">
                            <label for="title">Job Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter job title" value="{{old('title')}}">
                            @if($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{$errors->first('title')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <select name="salary" class="form-control" id="salary">
                                <option value="Negotiable">Negotiable</option>
                                <option value="0 - 25000 IDR">0 - 25000 IDR</option>
                                <option value="25001 - 50000 IDR">25001 - 50000 IDR</option>
                                <option value="50001 - 75000 IDR">50001 - 75000 IDR</option>
                            </select>
                        </div>
                        <div class="form-group{{$errors->has('deadline')?' has-error':''}}">
                            <label for="deadline">Application Deadline</label>
                            <input type="date" name="deadline" class="form-control" id="deadline" placeholder="YYYY-MM-DD" value="{{old('deadline')}}">
                            @if($errors->has('deadline'))
                                <span class="help-block">
                                    <strong>{{$errors->first('deadline')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('skill')?' has-error':''}}">
                            <label for="skill">Professional Skills</label>
                            <input type="text" name="skill" class="form-control" id="skill" placeholder="Professional Skills" value="{{old('skill')}}"> 
                            @if($errors->has('skill'))
                                <span class="help-block">
                                    <strong>{{$errors->first('skill')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-lg-offset-5">
                                <br>
                                <input type="submit" class="btn btn-warning" style="border-radius: 0;" value="POST JOB NOW">
                            </div>
                            {{-- <div class="col-lg-6">
                                <input type="submit" class="btn btn-default" style="border-radius: 0;" value="SAVE AS DRAFT">
                                <br>
                                <br>
                            </div> --}}
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