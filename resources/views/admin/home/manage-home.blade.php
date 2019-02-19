@extends('admin.master')

@section('body')
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
                            <th>Owner Name</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1;?>
                        @foreach($backends as $backend)
                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td>{{ $backend->heading_name }}</td>
                            <td>{{ $backend->title }}</td>
                            <td>{{ $backend->sub_title }}</td>
                            <td>{{ $backend->email }}</td>
                            <td>{{ $backend->phone }}</td>
                            <td>{{ $backend->own_address }}</td>
                            <td>{{ $backend->publication_status ==1 ? 'Published' : 'Unpublished'}} </td>
                            <td>
                                @if($backend->publication_status ==1)
                                <a href="{{url('/unpublished-info/'.$backend->id)}}" name="btn" class="btn btn-xs btn-success" title="Update Info">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @else
                                    <a href="{{url('/published-info/'.$backend->id)}}" name="btn" class="btn btn-xs btn-warning" title="Update Info">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif
                                <a href="{{url('/edit-info/'.$backend->id)}}" name="btn" class="btn btn-xs btn-primary" title="Edit Info">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('/delete-info/'.$backend->id)}}" name="btn" class="btn btn-xs btn-danger" title="Remove Info" onclick="return confirm('Are You Sure You Want to Remove This!')">
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