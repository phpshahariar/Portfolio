@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form name="editServiceForm" class="form-horizontal" action="{{ url('/update-service') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-3 control-label">Services Category</label>
                <div class="col-sm-7">
                    <input name="service_name" value="{!! $services->service_name !!}" type="text" class="form-control">
                    <input name="service_id" value="{!! $services->id !!}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Services Description</label>
                <div class="col-sm-7">
                    <textarea name="service_description" class="form-control">{!! $services->service_description !!}</textarea>
                    <span style="color: red"> {{ $errors->has('service_description') ? $errors->first('service_description') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Services Image</label>
                <div class="col-sm-7">
                    <input name="service_image" type="file" accept="image/*">
                    <img src="{!! asset('service-images/'.$services->service_image) !!}" height="90" width="90" alt="'image">
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Service Info</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editServiceForm'].elements['publication_status'].value="{!! $services->publication_status !!}";
    </script>
@endsection