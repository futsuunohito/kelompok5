@extends('layout.employer_main')

@section('title', 'Home')

@section('content')

    <section id="emp_home_first_section" class="top">
        <div class="container-fluid">
        <h1 align="center" class="first_sec_h1" style="font-family: Brush Script MT; font-size: 75px">Need!</h1>
            <p align="center" style="font-family: Impact">
                We Rise By Lifting Others</p>
            <div class="container home_search">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="row" style="text-align: center;">
                            <div class="col-lg-5 col-lg-offset-1">
                                <div class="form-group">
                                    <a class="btn btn-success form-control" style="border-radius: 0;" href="{{route('employer.post_job')}}">Post a Job Now</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <a class="btn btn-primary form-control" style="border-radius: 0;" href="{{route('employer_cv_view')}}">Search our CV Database</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- row ends here -->
            </div>
        </div>
        <!-- first container-fluid ends here -->
    </section>

    <section style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                    <div class="row">
                            <div class="col-lg-3 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-aqua">
                                <div class="inner">
                                  <h3>By Category</h3>
                    
                                  <p>Search</p>
                                </div>
                                <a href="{{route('employer_cv_view')}}" class="small-box-footer">search <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-green">
                                <div class="inner">
                                  <h3>By Company</sup></h3>
                    
                                  <p>Search</p>
                                </div>
                                <a href="{{route('employer_cv_view')}}" class="small-box-footer">search <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-yellow">
                                <div class="inner">
                                  <h3>By Location</h3>
                    
                                  <p>Search</p>
                                </div>
                                <a href="{{route('employer_cv_view')}}" class="small-box-footer">search <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-red">
                                <div class="inner">
                                  <h3>By Skills</h3>
                    
                                  <p>Search</p>
                                </div>
                                <a hrf="{{route('employer_cv_view')}}" class="small-box-footer">search <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                          </div>

            </div>
            <div class="row" align="center" style="margin-bottom:20px;">
                <div class="col-lg-4 col-lg-offset-4 more_btn">
                    <h2>Find Exceptional People</h2>
                    <br>
                    <a href="{{route('employer.register')}}" class="btn btn-info btn-lg">SIGN UP NOW</a>
                </div>
            </div>
        </div>
        <!-- first container ends here -->
    </section>
@endsection
