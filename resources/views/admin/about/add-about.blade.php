@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form class="form-horizontal" action="{{ url('/new-about') }}" method="post">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-3 control-label">Designation</label>
                <div class="col-sm-7">
                    <input name="designation_title" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('designation_title') ? $errors->first('designation_title') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-7">
                    <textarea name="description" class="form-control textarea"></textarea>
                    <span style="color: red"> {{ $errors->has('description') ? $errors->first('description') : ' ' }}</span>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Save About Info</button>
                </div>
            </div>
        </div>
    </form>
@endsection