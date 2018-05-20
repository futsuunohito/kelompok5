@extends('layout.seeker_main')

@section('title', 'Find Jobs')

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
            <!-- <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form class="form-inline" action="/seeker/keyword-wise-jobs" method="get">
                    {{csrf_field()}}
                        <div class="form-group">
                            <div class="input-group margin">
                                    <input type="text" class="form-control" name="searchQuery" class="form-control" placeholder="masih salah Search" value="{{ old('searchQuery') }}" style="padding-left: 20px;padding-right: 400px;">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                        </div>
                    </form>
                </div>
            </div> -->

            <div class="row top" style="margin-top:18px">
                <div class="col-lg-4">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="panel-title">Job Location</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/seeker/location-wise-jobs" method="get">
                            {{csrf_field()}}
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="location[]" value="Babakan Raya"> Babakan Raya
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="location[]" value="Dhaka"> Dhaka
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="location[]" value="Babakan Tengah"> Babakan Tengah
                                    </label>
                                </div>
                                <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="location[]" value="Cibanteng"> Cibanteng
                                        </label>
                                </div>
                                <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="location[]" value="Dramaga Cantik"> Dramaga Cantik
                                        </label>
                                </div>
                                <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="location[]" value="Puri D'kost"> Puri D'kost
                                        </label>
                                </div>
                                <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="location[]" value="IPB Dramaga"> IPB Dramaga
                                        </label>
                                </div>
                                <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="location[]" value="IPB Baranangsiang"> IPB Baranangsiang
                                        </label>
                                </div>
                
                                    <div class="box-footer">
                                        <input type="submit" class="btn btn-primary" value="Search" />
                                    </div>
                            </form>
                        </div>
                    </div>

                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="panel-title">Category/Industry</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/seeker/category-wise-jobs" method="get">
                            {{csrf_field()}}
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="category[]" value="IT/Software"> IT/Software
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="category[]" value="Agricultural"> Agricultural
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="category[]" value="Accounting/Finance"> Accounting/Finance
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="category[]" value="Data Entry/Operator"> Data Entry/Operator
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="category[]" value="Design/Creative"> Design/Creative
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="category[]" value="Driving"> Driving
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="category[]" value="Education/Training"> Education/Training
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="category[]" value="Engineer/Architect"> Engineer/Architect
                                    </label>
                                </div>
                                
                                    <div class="box-footer">
                                            <input type="submit" class="btn btn-success" value="Search">
                                    </div>
                            </form>
                            
                        </div>
                    </div>
            </div>
<!-- ---------Section for Jobs--------------------------- -->
                <div class="col-lg-6 ">
                @foreach($jobs as $job)
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="panel-title">{{$job->title}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4"><i class="glyphicon glyphicon-briefcase"></i> {{$job->user->company->name}}</div> 
                                {{-- here the relationship is job belongs to one user->and user has one company --}}
                                <div class="col-lg-4"><i class="fa fa-location-arrow"></i> {{$job->city}}</div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-5">
                                            <a href="/seeker/job/view/{{$job->id}}" target="_blank" class="btn btn-warning btn-flat btn-xs">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
            <!-- row ends here----------- -->

        </div>
        <!-- First container-fluid ends here -->
    </section>
@endsection
