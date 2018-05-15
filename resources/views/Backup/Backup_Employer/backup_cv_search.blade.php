@extends('layout.employer_main')

@section('title', 'CV Search')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container">
            <div class="row top">

<!-- ---------Section for cv list--------------------------- -->
                <div class="col-lg-8 col-lg-offset-2">
                @foreach($users as $user)
                    <div class="box box-default" style="margin-top: 20px;">
                        <div class="box-header with-border">
                            <img src="/img/kucing.jpg" alt="Profile Picture" class="img-circle" style="height: 30px; width: 30px;">
                            <h3 class="panel-title">{{$user->name}}</h3>
                        </div>
                        <div class="panel-body">
                                <div class="col-lg-4"><i class="fa fa-envelope"></i> {{$user->email}}</div> 
                                <div class="col-lg-4"><i class="fa fa-automobile"></i> {{$user->activity->location}}</div> 
                                <div class="col-lg-3">
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
