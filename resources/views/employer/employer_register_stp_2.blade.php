@extends('layout.employer_main')

@section('title', 'Create new company')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <h3 style="text-align:center;"><strong>Personal Information</strong></h3>
            <br>
            <div class="row">
                <div class="col-lg-2">
                    <img src="" alt="Company Brand Image" class="img-thumbnail img-responsive" style="height: 180px; width: 500px;">
                    <br>
                    <form action="{{route('employer.image')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="file" name="image">
                        <br>
                        <input type="submit" class="btn btn-primary" id="upload" value="UPLOAD">
                    </form>
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
                            <label for="country" class="col-sm-2 control-label">Faculty: </label>
                            <div class="col-sm-10">
                                <select name="country" id="country" class="form-control">
                                        <option value="Pertanian">Pertanian</option>
                                        <option value="Kedokteran Hewan">Kedokteran Hewan</option>
                                        <option value="Perikanan dan Ilmu Kelautan">Perikanan dan Ilmu Kelautan</option>
                                        <option value="Peternakan">Peternakan</option>
                                        <option value="Kehutanan">Kehutanan</option>
                                        <option value="Teknik Pertanian">Teknik Pertanian</option>
                                        <option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
                                        <option value="Ekonomi dan Menejemen">Ekonomi dan Menejemen</option>
                                        <option value="Ekologi Manusia">Ekologi Manusia</option>
                                        <option value="Sekolah Bisnis">Sekolah Bisnis</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Address: </label>
                            <div class="col-sm-10">
                                <select name="city" id="city" class="form-control">
                                        <option value="Babakan Raya">Babakan Raya</option>
                                        <option value="Babakan Tengah">Babakan Tengah</option>
                                        <option value="Cibanteng">Cibanteng</option>
                                        <option value="Babakan Lio">Babakan Lio</option>
                                        <option value="Babakan Lebak">Babakan Lebak</option>
                                        <option value="Perwira">Perwira</option>
                                        <option value="Baranangsiang">Baranangsiang</option>
                                        <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="industry" class="col-sm-2 control-label">Category : </label>
                            <div class="col-sm-10">
                                <select name="industry" id="industry" class="form-control">
                                        <option value="Design">Design</option>
                                        <option value="Software Engineer">Software Engineer</option>
                                        <option value="Writing">Writing</option>
                                        <option value="Data Mining">Data Mining</option>
                                        <option value="Business/Accounting">Business/Accounting</option>
                                        <option value="Others">Others</option>
                                        sisanya ambil dari seeker find jobs
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="website" class="col-sm-2 control-label">Phone Number: </label>
                            <div class="col-sm-10">
                                <input type="text" name="website" value="" class="form-control" id="website" placeholder="Enter Your Phone Number">
                            </div>
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="about" class="col-sm-2 control-label">About Me: </label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="4" cols="20" id="about" name="about" placeholder="Skill, Experience, and Achievement"></textarea>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-10 col-sm-offset-2">
                            <textarea class="form-control" rows="4" cols="20" id="about" name="about" placeholder="Deskripsi pengalaman atau prestasi"></textarea>
                            <br>
                        </div> -->

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