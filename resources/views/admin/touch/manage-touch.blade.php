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
                            <th>Description</th>
                            <th>Location</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Fonts</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1;?>
                        @foreach($touchs as $touch)

                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $touch->description }}</td>
                                <td>{{ $touch->location }}</td>
                                <td>{{ $touch->email }}</td>
                                <td>{{ $touch->number }}</td>
                                <td>{{ $touch->font }}</td>
                                <td>{{ $touch->publication_status ==1 ? 'Published' : 'Unpublished'}} </td>
                                <td>
                                    @if($touch->publication_status ==1)
                                        <a href="{{url('/unpublished-touch/'.$touch->id)}}" name="btn" class="btn btn-xs btn-success" title="Update Touch">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/published-touch/'.$touch->id)}}" name="btn" class="btn btn-xs btn-warning" title="Update Touch">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/edit-touch/'.$touch->id)}}" name="btn" class="btn btn-xs btn-primary" title="Edit Touch">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/delete-touch/'.$touch->id)}}" name="btn" class="btn btn-xs btn-danger" title="Remove Touch" onclick="return confirm('Are You Sure You Want to Remove This!')">
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