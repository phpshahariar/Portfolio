@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form class="form-horizontal" name="editPortfolioForm" action="{{ url('/update-portfolio') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="well">

            <div class="form-group">
                <label  class="col-sm-3 control-label">Category Name</label>
                <div class="col-sm-7">
                    <input name="category_name" value="{!! $portfolios->category_name !!}" type="text" class="form-control">
                    <input name="category_id" value="{!! $portfolios->id !!}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">Project Name</label>
                <div class="col-sm-7">
                    <input name="project_name" value="{!! $portfolios->project_name !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Project Title</label>
                <div class="col-sm-7">
                    <input name="project_title" value="{!! $portfolios->project_title !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Project Category</label>
                <div class="col-sm-7">
                    <input name="project_category" value="{!! $portfolios->project_category !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Project File</label>
                <div class="col-sm-7">
                    <input type="file" name="project_file" accept="image/*">
                    <img src="{!! asset('files/'.$portfolios->project_file) !!}" height="100" width="100"/>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Portfolio Info</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editPortfolioForm'].elements['publication_status'].value="{!! $portfolios->publication_status !!}";
    </script>
@endsection