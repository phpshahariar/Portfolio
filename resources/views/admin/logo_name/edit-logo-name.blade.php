@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form name="editProfileForm" class="form-horizontal" action="{{ url('/update-profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-3 control-label">Profile Name</label>
                <div class="col-sm-7">
                    <input name="name" value="{{$logos->name}}" type="text" class="form-control">
                    <input name="name_id" value="{{$logos->id}}" type="hidden" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">Profile Title</label>
                <div class="col-sm-7">
                    <input name="title" value="{{$logos->title}}" type="text" class="form-control">

                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Profile Picture</label>
                <div class="col-sm-7">
                    <input name="image"  type="file" accept="image/*" >
                    <img src="{{ asset($logos->image) }}" alt="" height="80" width="80"/>

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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Profile Info</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editProfileForm'].elements['publication_status'].value='{{$logos->publication_status}}';
    </script>
@endsection