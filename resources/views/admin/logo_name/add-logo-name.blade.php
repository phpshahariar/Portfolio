@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form class="form-horizontal" action="{{ url('/new-logo-name') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-3 control-label">Name</label>
                <div class="col-sm-7">
                    <input name="name" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Title</label>
                <div class="col-sm-7">
                    <input name="title" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('title') ? $errors->first('title') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Image</label>
                <div class="col-sm-7">
                    <input name="image" type="file">
                    <span style="color: red"> {{ $errors->has('image') ? $errors->first('image') : ' ' }}</span>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Save Logo & Name</button>
                </div>
            </div>
        </div>
    </form>
@endsection