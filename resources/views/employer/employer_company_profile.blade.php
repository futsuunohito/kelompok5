@extends('layout.employer_main')

@section('title', 'Create new company')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <h3 style="text-align:center;"><strong>Personal Information</strong></h3>
            <br>
            <div class="row">
                <div class="col-lg-2">
                    <img src="{{asset('public/company_images/'.$company->image)}}" alt="Profile Picture" class="img-thumbnail" style="height: 180px; width: 500px;">
                    <br>
                    <form action="{{route('employer.company_image')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!-- {{ method_field('put') }} -->
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
                                <input type="text" name="name" value="{{$company->name}}" class="form-control" id="name" placeholder="Company name" required>
                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="country" class="col-sm-2 control-label">Fakultas: </label>
                            <div class="col-sm-10">
                                <select name="country" id="country" class="form-control">
                                    <option value="Faperta"@if($company->country == "Faperta"){{'selected="selected"'}}@endif>Fakultas Pertanian</option>
                                    <option value="Fkh"@if($company->country == "Fkh"){{'selected="selected"'}}@endif>Fakultas Kedokteran Hewan</option>
                                    <option value="Fpik"@if($company->country == "Fpik"){{'selected="selected"'}}@endif>Fakultas Perikanan dan Ilmu Kelautan</option>
                                    <option value="Fapet"@if($company->country == "Fapet"){{'selected="selected"'}}@endif>Fakultas Peternakan</option>
                                    <option value="Fahutan"@if($company->country == "Fahutan"){{'selected="selected"'}}@endif>Fakultas Kehutanan</option>
                                    <option value="Fateta"@if($company->country == "Fateta"){{'selected="selected"'}}@endif>Fakultas Teknik Pertanian</option>
                                    <option value="Fmipa"@if($company->country == "Fmipa"){{'selected="selected"'}}@endif>Fakultas Ilmu Pengetahuan Alam</option>
                                    <option value="Fem"@if($company->country == "Fem"){{'selected="selected"'}}@endif>Fakultas Ekonomi dan Menejemen</option>
                                    <option value="Fema"@if($company->country == "Fema"){{'selected="selected"'}}@endif>Fakultas Ekologi Manusia</option>
                                    <option value="SB"@if($company->country == "SB"){{'selected="selected"'}}@endif>Sekolah Bisnis</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Alamat tinggal: </label>
                            <div class="col-sm-10">
                                <select name="city" id="city" class="form-control">
                                    <option value="Babakan Raya"@if($company->city == "Babakan Raya"){{'selected="selected"'}}@endif>Babakan Raya</option>
                                    <option value="Babakan Tengah"@if($company->city == "Babakan Tengah"){{'selected="selected"'}}@endif>Babakan Tengah</option>
                                    <option value="Cibanteng"@if($company->city == "Cibanteng"){{'selected="selected"'}}@endif>Cibanteng</option>
                                    <option value="Dramaga Cantik"@if($company->city == "Dramaga Cantik"){{'selected="selected"'}}@endif>Dramaga Cantik</option>
                                    <option value="Puri D'kost"@if($company->city == "Puri D'kost"){{'selected="selected"'}}@endif>Puri D'kost</option>
                                    <option value="IPB Dramaga"@if($company->city == "IPB Dramaga"){{'selected="selected"'}}@endif>IPB Dramaga</option>
                                    <option value="IPB Baranangsiang"@if($company->city == "IPB Baranangsiang"){{'selected="selected"'}}@endif>IPB Baranangsiang</option>
                                    <!-- belum -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="industry" class="col-sm-2 control-label">Category: </label>
                            <div class="col-sm-10">
                                <select name="industry" id="industry" class="form-control">
                                    <option value="Design"@if($company->industry == "Design"){{'selected="selected"'}}@endif>Design</option>
                                    <option value="IT/Software"@if($company->industry == "IT/Software"){{'selected="selected"'}}@endif>Website IT/Software</option>
                                    <option value="Writing"@if($company->industry == "Writing"){{'selected="selected"'}}@endif>Writing</option>
                                    <option value="Data Entry"@if($company->industry == "Data Entry"){{'selected="selected"'}}@endif>Data Entry</option>
                                    <option value="Business/Accounting/Legal"@if($company->industry == "Business/Accounting/Legal"){{'selected="selected"'}}@endif>Business/Accounting/Legal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="website" class="col-sm-2 control-label">Phone Number: </label>
                            <div class="col-sm-10">
                                <input type="text" name="website" value="{{$company->website}}" class="form-control" id="website" placeholder="Id Line/WhatsApp/LinkedIn">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="about" class="col-sm-2 control-label">Deskripsi diri: </label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="4" cols="20" id="about" name="about" placeholder="Deskripsi keahlian, pengalaman, atau prestasi">{{$company->about}}</textarea>
                            </div>
                        </div>
                        <!--<div class="col-sm-10 col-sm-offset-2">
                            <textarea class="form-control" rows="4" cols="20" id="about" name="about" placeholder="Write something about your Company">{{$company->about}}</textarea>
                            <br>
                        </div>-->

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{route('employer.dashboard')}}" id="save" class="btn btn-warning">Save Changes</a>
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