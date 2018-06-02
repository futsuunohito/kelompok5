@extends('layout.employer_main')

@section('title', 'CV Search')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container">
            <div class="row top">
<!-- ---------Section for cv list--------------------------- -->
                <div class="col-lg-8 col-lg-offset-2">
                <h3 style="text-align: center;"><strong> Public CV List </strong></h3>
                @foreach($users as $user)
                    <div class="box box-primary" style="margin-top: 20px; border-style: solid; border-color: #075dc6">
                        <div class="box-header with-border" style="text-align: center">
                            <h3 class="panel-title" style="font-weight: bold;"><img src="/img/kucing.jpg" alt="Profile Picture" class="img-circle" style="height: 30px; width: 30px;">    {{$user->name}}</h3>
                        </div>
                        <div class="panel-body">
                                <div class="col-lg-3"><i class="fa fa-envelope"></i> {{$user->email}}</div> 
                                <div class="col-lg-3"><i class="fa fa-location-arrow"></i> {{$user->location}}</div> 
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-10">
                                            <a href="/employer/view/seeker-cv/{{$user->id}}" class="btn btn-warning btn-flat btn-xs">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-10">
                                            <a href="/admin/user/delete-cv/{{$user->id}}" class="btn btn-warning">DELETE CV</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    
                    @endforeach
                    </div>
                    
                </div>
            </div>
            <!-- row ends here----------- -->

        </div>
        <!-- First container-fluid ends here -->
    </section>
@endsection
