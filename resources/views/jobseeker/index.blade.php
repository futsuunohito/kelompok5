@extends('layout.seeker_main')

@section('title', 'Home')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="css/need.css">
</head>

<body>
    ini bakal jadi info, profil
  <!--  <section id="home_first_section" class="top" style="margin-top: 50px;">
        <div class="container-fluid">
        <br><br>
        <h1 align="center"><img src="https://3.bp.blogspot.com/-dqSQLXBnaas/Wvuq85ST7sI/AAAAAAAACrk/Ym4tbxJtogMxae_P8wZ0RUiVSSq2TC2TgCLcBGAs/s1600/logo.png" width="200px"> </h1>
            <p align="center" style="font-size: 18px; font-weight: bold">
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
</body>
    
    <section>
        <div class="container">
        </div>
    </section>
-->
@endsection