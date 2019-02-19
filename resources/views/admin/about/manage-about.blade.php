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
                    About Table
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Designation</th>
                            <th>Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1;?>
                        @foreach($abouts as $about)

                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $about->designation_title }}</td>
                                <td>{{ $about->description }}</td>
                                <td>{{ $about->publication_status ==1 ? 'Published' : 'Unpublished'}} </td>
                                <td>
                                    @if($about->publication_status ==1)
                                        <a href="{{url('/unpublished-about/'.$about->id)}}" name="btn" class="btn btn-xs btn-success" title="Update About">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/published-about/'.$about->id)}}" name="btn" class="btn btn-xs btn-warning" title="Update About">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/edit-about/'.$about->id)}}" name="btn" class="btn btn-xs btn-primary" title="Edit About">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/delete-about/'.$about->id)}}" name="btn" class="btn btn-xs btn-danger" title="Remove About" onclick="return confirm('Are You Sure You Want to Remove This!')">
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