@extends('layout.employer_main')

@section('title', 'Profile Picture')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-offset-5">
                <img src="{{asset('/img/user.jpg')}}" alt="Profile Picture" class="img-thumbnail" style="height: 180px; width: 500px;">
                    <br>
                    <form action="{{route('employer.image')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!-- {{ method_field('put') }} -->
                        <input type="file" name="image">
                        <br>
                        <input type="submit" class="btn btn-primary" id="upload" value="UPLOAD">
                    </form>
                </div>
            </div>
            <!-- row ends here -->
        </div>
        <!-- First container-fluid ends here -->
        {{csrf_field()}}
    </section>
@endsection