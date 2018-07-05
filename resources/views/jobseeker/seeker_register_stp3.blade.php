@extends('layout.seeker_main')

@section('title', 'Education')

@section('content')

    <section class="top" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="{{route('seeker.edu')}}" method="post">
                    {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$user_id}}">
                        <div class="form-group">
                            <label for="degree_level">Degree Level</label>
                             <select name="degree_level" class="form-control" id="degree_level">
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="field">Field of Study</label>
                            <input type="text" name="field" class="form-control" id="field" placeholder="Field of study">
                        </div>
                        <button type="submit" class="btn btn-warning form-control" style="text-transform:uppercase;border-radius:0;">SAVE CHANGES</button><br><br><br>
                    </form>
                </div>
            </div>
            <!-- row ends here -->

        </div>
    </section>
@endsection