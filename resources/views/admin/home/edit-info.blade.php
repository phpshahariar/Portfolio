@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form name="editInfoForm" class="form-horizontal" action="{{ url('/update-info') }}" method="post">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-3 control-label">Owner Name</label>
                <div class="col-sm-7">
                    <input name="heading_name" value="{{ $backend->heading_name }}" type="text" class="form-control">
                    <input name="heading_id" value="{{ $backend->id }}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('heading_name') ? $errors->first('heading_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Title</label>
                <div class="col-sm-7">
                    <input name="title" value="{{ $backend->title }}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('title') ? $errors->first('title') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Sub-Title</label>
                <div class="col-sm-7">
                    <input name="sub_title" value="{{ $backend->sub_title }}"  type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('sub_title') ? $errors->first('sub_title') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">E-mail</label>
                <div class="col-sm-7">
                    <input name="email" value="{{ $backend->email }}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Phone</label>
                <div class="col-sm-7">
                    <input name="phone" value="{{ $backend->phone }}" type="number" class="form-control">
                    <span style="color: red"> {{ $errors->has('phone') ? $errors->first('phone') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-7">
                    <textarea name="own_address" class="form-control">{{ $backend->own_address }}</textarea>
                    <span style="color: red"> {{ $errors->has('own_address') ? $errors->first('own_address') : ' ' }}</span>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Home Info</button>
                </div>
            </div>
        </div>
        <script>
            document.forms['editInfoForm'].elements['publication_status'].value="{{ $backend->publication_status }}";
        </script>
    </form>
@endsection