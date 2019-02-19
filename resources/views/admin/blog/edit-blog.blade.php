@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form class="form-horizontal" name="editBlogForm" action="{{ url('/update-blog') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="well">

            <div class="form-group">
                <label  class="col-sm-3 control-label">Blog Title</label>
                <div class="col-sm-7">
                    <input name="blog_title" value="{!! $blogs->blog_title !!}" type="text" class="form-control">
                    <input name="blog_id" value="{!! $blogs->id !!}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">Blog Name</label>
                <div class="col-sm-7">
                    <input name="blog_name" value="{!! $blogs->blog_name !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Date & Month</label>
                <div class="col-sm-7">
                    <input name="date_month" value="{!! $blogs->date_month !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Blog Image</label>
                <div class="col-sm-7">
                    <input type="file" name="blog_image">
                    <img src="{!! asset('blog-images/'.$blogs->blog_image) !!}" height="100" width="100"/>
                    <span style="color: red"> {{ $errors->has('university_description') ? $errors->first('university_description') : ' ' }}</span>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Blog Info</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editBlogForm'].elements['publication_status'].value="{!! $blogs->publication_status !!}";
    </script>
@endsection