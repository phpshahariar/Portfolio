@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form name="editBgImageForm" class="form-horizontal" action="{{ url('/update-bg-image') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-3 control-label">Background Picture</label>
                <div class="col-sm-7">
                    <input name="background_image" type="file" accept="image/*">
                    <img src="{{asset($bgimages->background_image)}}" height="100" width="100"/>
                    <input name="background_id" value="{!! $bgimages->id !!}" type="hidden">
                    <span style="color: red"> {{ $errors->has('background_image') ? $errors->first('background_image') : ' ' }}</span>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Bg Image Info</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editBgImageForm'].elements['publication_status'].value="{!! $bgimages->publication_status !!}";
    </script>
@endsection