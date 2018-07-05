@extends('layout.employer_main')

@section('title', 'Profile Picture')

@section('content')

<script>

    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(175)
                        .height(175);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>
    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-offset-5">
                <img id="blah" src="{{asset('/img/user.jpg')}}" alt="Profile Picture" class="img-thumbnail" style="height: 180px; width: 500px;">
                    <br>
                    <form action="{{route('employer.image')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!-- {{ method_field('put') }} -->
                    <input type="file" accept=".jpg" name="image" class="btn-xs" style="margin-top: 5px;" onchange="readURL(this);">
                        <br>
                        <input type="submit" class="btn-xs btn-white" style="margin-top: 5px;" id="upload" value="UPLOAD">
                    </form>
                </div>
            </div>
            <!-- row ends here -->
        </div>
        <!-- First container-fluid ends here -->
        {{csrf_field()}}
    </section>
@endsection