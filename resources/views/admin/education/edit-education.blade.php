@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form class="form-horizontal" name="editEducationForm" action="{{ url('/update-education') }}" method="post">
        @csrf
        <div class="well">

            <div class="form-group">
                <label  class="col-sm-3 control-label">University Name</label>
                <div class="col-sm-7">
                    <input name="university_name" value="{!! $educations->university_name !!}" type="text" class="form-control">
                    <input name="university_id"  value="{!! $educations->id !!}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('university_name') ? $errors->first('university_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Program Description</label>
                <div class="col-sm-7">
                    <textarea name="university_description" class="form-control">{!! $educations->university_description !!}</textarea>
                    <span style="color: red"> {{ $errors->has('university_description') ? $errors->first('university_description') : ' ' }}</span>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">College Name</label>
                <div class="col-sm-7">
                    <input name="college_name" value="{!! $educations->college_name !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('university_name') ? $errors->first('university_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Program Description</label>
                <div class="col-sm-7">
                    <textarea name="college_description" class="form-control">{!! $educations->college_description !!}</textarea>
                    <span style="color: red"> {{ $errors->has('university_description') ? $errors->first('university_description') : ' ' }}</span>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">School Name</label>
                <div class="col-sm-7">
                    <input name="school_name" value="{!! $educations->school_name !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('school_name') ? $errors->first('school_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Program Description</label>
                <div class="col-sm-7">
                    <textarea name="school_description"  class="form-control">{!! $educations->school_description !!}</textarea>
                    <span style="color: red"> {{ $errors->has('university_description') ? $errors->first('university_description') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Publication Status</label>
                <div class="col-sm-7">
                    <select class="form-control" name="publication_status">
                        <option>---Select Publication Status---</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-7">
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Education Info</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editEducationForm'].elements['publication_status'].value="{!! $educations->publication_status !!}";
    </script>
@endsection