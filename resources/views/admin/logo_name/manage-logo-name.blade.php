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
                            <th>Profile Picture</th>
                            <th>Profile Name</th>
                            <th>Profile Title</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1;?>
                        @foreach($logos as $logo)

                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>
                                    <img src="{{ asset($logo->image) }}" height="100" width="100" alt="logo">
                                </td>
                                <td>{{ $logo->name }}</td>
                                <td>{{ $logo->title }}</td>
                                <td>{{ $logo->publication_status ==1 ? 'Published' : 'Unpublished'}} </td>
                                <td>
                                    @if($logo->publication_status ==1)
                                        <a href="{{url('/unpublished-logo-name/'.$logo->id)}}" name="btn" class="btn btn-xs btn-success" title="Published Logo & Name">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/published-logo-name/'.$logo->id)}}" name="btn" class="btn btn-xs btn-warning" title="Unpublished Logo & Name">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/edit-logo-name/'.$logo->id)}}" name="btn" class="btn btn-xs btn-primary" title="Edit Logo & Name">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/delete-logo-name/'.$logo->id)}}" name="btn" class="btn btn-xs btn-danger" title="Remove Logo & Name" onclick="return confirm('Are You Sure You Want to Remove This!')">
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