@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form class="form-horizontal" action="{{ url('/new-education') }}" method="post">
        @csrf
        <div class="well">

            <div class="form-group">
                <label  class="col-sm-3 control-label">University Name</label>
                <div class="col-sm-7">
                    <input name="university_name" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('university_name') ? $errors->first('university_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Program Description</label>
                <div class="col-sm-7">
                    <textarea name="university_description" class="form-control"></textarea>
                    <span style="color: red"> {{ $errors->has('university_description') ? $errors->first('university_description') : ' ' }}</span>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">College Name</label>
                <div class="col-sm-7">
                    <input name="college_name" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('college_name') ? $errors->first('college_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Program Description</label>
                <div class="col-sm-7">
                    <textarea name="college_description" class="form-control"></textarea>
                    <span style="color: red"> {{ $errors->has('college_description') ? $errors->first('college_description') : ' ' }}</span>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">School Name</label>
                <div class="col-sm-7">
                    <input name="school_name" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('school_name') ? $errors->first('school_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Program Description</label>
                <div class="col-sm-7">
                    <textarea name="school_description" class="form-control"></textarea>
                    <span style="color: red"> {{ $errors->has('school_description') ? $errors->first('school_description') : ' ' }}</span>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Save Education Info</button>
                </div>
            </div>
        </div>
    </form>
@endsection