@extends('admin.master')

@section('body')
    <br/>
    <h1>{{ Session::get('message') }}</h1>
    <form name="editTestimonialForm" class="form-horizontal" action="{{ url('/update-testimonial') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-3 control-label">Author Name</label>
                <div class="col-sm-7">
                    <input name="author_name" value="{!! $testimonials->author_name !!}" type="text" class="form-control">
                    <input name="author_id" value="{!! $testimonials->id !!}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('author_name') ? $errors->first('author_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Company Name</label>
                <div class="col-sm-7">
                    <input name="company_name" value="{!! $testimonials->company_name !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('company_name') ? $errors->first('company_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Client Comments</label>
                <div class="col-sm-7">
                    <textarea name="client_comment" class="form-control">{!! $testimonials->client_comment !!}</textarea>
                    <span style="color: red"> {{ $errors->has('client_comment') ? $errors->first('client_comment') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Client Picture</label>
                <div class="col-sm-7">
                    <input name="client_picture" type="file" accept="image/*">
                    <img src="{!! asset('service-images/'.$testimonials->client_picture) !!}" height="100" width="100">
                    <span style="color: red"> {{ $errors->has('client_picture') ? $errors->first('client_picture') : ' ' }}</span>
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Client Info</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editTestimonialForm'].elements['publication_status'].value="{!! $testimonials->publication_status !!}";
    </script>
@endsection