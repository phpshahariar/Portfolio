@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-lg-12">
            @if($message = Session::get('message'))
                <h1 class="page-header">{{$message}}</h1>
            @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Author Name</th>
                            <th>Company Name</th>
                            <th>Client Comment</th>
                            <th>Client Picture</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1;?>
                        @foreach($testimonials as $testimonial)

                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{!! $testimonial->author_name !!} </td>
                                <td>{!! $testimonial->company_name !!}</td>
                                <td>{!! $testimonial->client_comment !!}</td>
                                <td>
                                    <img src="{!! asset('service-images/'.$testimonial->client_picture) !!}" height="100" width="100" alt="image">
                                </td>
                                <td>{{ $testimonial->publication_status ==1 ? 'Published' : 'Unpublished'}} </td>
                                <td>
                                    @if($testimonial->publication_status ==1)
                                        <a href="{{url('/unpublished-testimonial/'.$testimonial->id)}}" name="btn" class="btn btn-xs btn-success" title="Update About">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/published-testimonial/'.$testimonial->id)}}" name="btn" class="btn btn-xs btn-warning" title="Update About">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/edit-testimonial/'.$testimonial->id)}}" name="btn" class="btn btn-xs btn-primary" title="Edit About">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/delete-testimonial/'.$testimonial->id)}}" name="btn" class="btn btn-xs btn-danger" title="Remove About" onclick="return confirm('Are You Sure You Want to Remove This!')">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection