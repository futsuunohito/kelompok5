@extends('layout.seeker_main')

@section('title', 'Home')

@section('content')
<body>
        <div class="main">
                <div class="container tim-container">
                    <div id="extras">
                        <div class="space"></div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-0 col-sm-0 col-sm-offset-1">
                                <div class="text-center">
                                    <img src="{{ asset('/KIT/assets/img/Untitled-1cek.jpg')}}" alt="Rounded Image" class="img-rounded img-responsive img-dog">
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                            <h1 class="text-center">About <strong>NEED!</strong>
                                            
                                            <small class="subtitle">Get to know us</small></h1>
                                            <hr>
                                            <p>
                                            Mahasiswa sering sekali sulit dalam melakukan suatu hal. Bukan hanya karena suatu masalah yang rumit, melainkan mereka belum memiliki keahlian untuk menyelesaikannya. Maka dari itu, dibutuhkan bantuan dari orang lain untuk melakukan hal tersebut. Kebutuhan mahasiswa sangatlah beragam, dimulai dari memasak, mengerjakan tugas, mengembangkan softskill, mengajar dan sebagainya. Setiap mahasiswa juga memiliki keahlian yang berbeda-beda. Aplikasi ini diharapkan dapat membantu mahasiswa yang membutuhkan suatu jasa untuk menemukan mahasiswa lain yang memang berniat membantu dan memiliki pengetahuan serta keahlian yang dibutuhkan untuk memenuhinya. 
                                            </p>
                                            <p>
                                                The pink lines indicate where projects are being posted by employers, and the blue lines indicate where the projects are being performed by freelancers. Thicker lines indicate a higher dollar volume of work. White dots indicate the location of Freelancer's users. </p>
                                            <p>
                                            We take great interest in how our customers use our resources and offer strong support and unlimited updates. We are constantly thinking about how to make our products intuitive, beautiful and extremely easy to understand, so feel free to tell us your thoughts!                                   
                                            </p>
            
                            </div>
                        </div>
                    </div>
                <!--     end extras -->    
                </div>
            <!-- end container -->
            <div class="space-30"></div>

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
    </section> -->
</body>
    
    <section>
        <div class="container">
        </div>
    </section>
@endsection