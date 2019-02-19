@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form class="form-horizontal" name="editTouchForm" action="{{ url('/update-touch') }}" method="post">
        @csrf
        <div class="well">

            <div class="form-group">
                <label  class="col-sm-3 control-label">Location</label>
                <div class="col-sm-7">
                    <input name="location" value="{!! $touchs->location !!}" type="text" class="form-control">
                    <input name="location_id" value="{!! $touchs->id !!}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-7">
                    <textarea name="description" class="form-control">{!! $touchs->description !!}</textarea>
                    <span style="color: red"> {{ $errors->has('service_description') ? $errors->first('service_description') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">E-mail</label>
                <div class="col-sm-7">
                    <input name="email" value="{!! $touchs->email !!}" type="text" class ="form-control">
                    <span style="color: red"> {{ $errors->has('service_image') ? $errors->first('service_image') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Phone</label>
                <div class="col-sm-7">
                    <input name="number" value="{!! $touchs->number !!}" type="number" class ="form-control">
                    <span style="color: red"> {{ $errors->has('service_image') ? $errors->first('service_image') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Fonts</label>
                <div class="col-sm-7">
                    <input name="font" value="{!! $touchs->font !!}" type="text" class ="form-control">
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Touch Info</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editTouchForm'].elements['publication_status'].value="{!! $touchs->publication_status !!}"
    </script>
@endsection