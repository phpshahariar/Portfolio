@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form class="form-horizontal" action="{{ url('/new-experience') }}" method="post">
        @csrf
        <div class="well">

            <div class="form-group">
                <label  class="col-sm-3 control-label">First Office Name</label>
                <div class="col-sm-7">
                    <input name="first_office" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('university_name') ? $errors->first('university_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Project Description</label>
                <div class="col-sm-7">
                    <textarea name="first_project" class="form-control"></textarea>
                    <span style="color: red"> {{ $errors->has('university_description') ? $errors->first('university_description') : ' ' }}</span>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">Second Office Name</label>
                <div class="col-sm-7">
                    <input name="second_office" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('college_name') ? $errors->first('college_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Project Description</label>
                <div class="col-sm-7">
                    <textarea name="second_project" class="form-control"></textarea>
                    <span style="color: red"> {{ $errors->has('college_description') ? $errors->first('college_description') : ' ' }}</span>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">Third Office  Name</label>
                <div class="col-sm-7">
                    <input name="third_office" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('school_name') ? $errors->first('school_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Project Description</label>
                <div class="col-sm-7">
                    <textarea name="third_project" class="form-control"></textarea>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Save Experience Info</button>
                </div>
            </div>
        </div>
    </form>
@endsection