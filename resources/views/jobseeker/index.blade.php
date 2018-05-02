@extends('layout.seeker_main')

@section('title', 'Home')

@section('content')
    <section id="home_first_section" class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <h1 align="center" class="first_sec_h1" style="font-family: Brush Script MT; font-size: 80px">Need!</h1>
            <p align="center" style="font-size: 16px">
                We Rise By Lifting Others</p>
            <div class="container home_search">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <form class="form-inline" action="/seeker/keyword-wise-jobs" method="get">
                        {{csrf_field()}}
                          <div class="form-group">
                                <div class="input-group margin">
                                        <input type="text" class="form-control" name="searchQuery" class="form-control" placeholder="Keywords" value="{{ old('searchQuery') }}" style="padding-left: 20px;padding-right: 400px;">
                                            <span class="input-group-btn">
                                              <button type="submit" class="btn btn-info btn-flat">Go!</button>
                                            </span>
                                        </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-lg-offset-4 more_btn">
                                    <a href="{{route('seeker.register')}}" class="btn btn-success btn-lg">Find More Jobs Here</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
        </div>
    </section>
@endsection