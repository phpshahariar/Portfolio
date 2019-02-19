@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form class="form-horizontal" action="{{ url('/new-service') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-3 control-label">Services Category</label>
                <div class="col-sm-7">
                    <input name="service_name" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Services Description</label>
                <div class="col-sm-7">
                    <textarea name="service_description" class="form-control"></textarea>
                    <span style="color: red"> {{ $errors->has('service_description') ? $errors->first('service_description') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Services Image</label>
                <div class="col-sm-7">
                    <input name="service_image" type="file">
                    <span style="color: red"> {{ $errors->has('service_image') ? $errors->first('service_image') : ' ' }}</span>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Save Service Info</button>
                </div>
            </div>
        </div>
    </form>
@endsection