@extends('layout.employer_main')

@section('title', 'Create new company')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <h3 style="text-align:center;"><strong>PROFILE PICTURE</strong></h3>
            <br>
            <div class="row">
                <div class="col-lg-2 col-md-offset-5">
                    <img src="" alt="Company Brand Image" class="img-thumbnail img-responsive" style="height: 180px; width: 500px;">
                    <br>
                    <form action="{{route('employer.image')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="file" name="image">
                        <br>
                        <input type="submit" class="btn btn-primary" id="upload" value="UPLOAD">
                    </form><br>
                </div>
                <div class="col-lg-10">
                    <!-- -----------------First section------------------ -->
                    <div class="form-horizontal" id="company_form">
                        <div class="form-group{{$errors->has('name')?' has-error':''}}">
                            <label for="name" class="col-sm-2 control-label">Name: </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="" class="form-control" id="name" placeholder="Enter Your Name" required>
                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="save" class="btn btn-warning">Save</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->
        </div>
        <!-- First container-fluid ends here -->
        {{csrf_field()}}
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // $('#save').click(function(event) {//when clicking on the Save btn second time this code doesn't work.So i need to use the code given below.
            //     var name = $('#name').val();
            //     var country = $('#country').val();
            //     var city = $('#city').val();
            //     var industry = $('#industry').val();
            //     var website = $('#website').val();
            //     var about = $('#about').val();

            //     $.post('{{route('employer.company')}}',{'_token':$('input[name=_token]').val(),'name':name,'country':country,'city':city,'industry':industry,'website':website,'about':about}, function(data) {
            //         $('#company_form').load(location.href + ' #company_form');
            //         console.log(data);
            //     });
            // });

            $(document).on('click','#save', function(event) {
                event.preventDefault();
                var name = $('#name').val();
                var country = $('#country').val();
                var city = $('#city').val();
                var industry = $('#industry').val();
                var website = $('#website').val();
                var about = $('#about').val();

                $.post('{{route('employer.company')}}',{'_token':$('input[name=_token]').val(),'name':name,'country':country,'city':city,'industry':industry,'website':website,'about':about}, function(data) {
                    $('#company_form').load(location.href + ' #company_form');
                    console.log(data);
                });
            });
        });
    </script>
@endsection