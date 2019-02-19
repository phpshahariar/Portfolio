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


                            <th>First Office Name</th>
                            <th>Project Description</th>


                            <th>Second Office Name</th>
                            <th>Project Description</th>


                            <th>Third Office Name</th>
                            <th>Project Description</th>


                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1;?>
                        @foreach($experiences as $experience)

                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $experience->first_office }}</td>
                                <td>{{ $experience->first_project }}</td>

                                <td>{{ $experience->second_office }}</td>
                                <td>{{ $experience->second_project }}</td>

                                <td>{{ $experience->third_office }}</td>
                                <td>{{ $experience->third_project }}</td>

                                <td>{{ $experience->publication_status ==1 ? 'Published' : 'Unpublished'}} </td>
                                <td>
                                    @if($experience->publication_status ==1)
                                        <a href="{{url('/unpublished-experience/'.$experience->id)}}" name="btn" class="btn btn-xs btn-success" title="Update Experience">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/published-experience/'.$experience->id)}}" name="btn" class="btn btn-xs btn-warning" title="Update Experience">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/edit-experience/'.$experience->id)}}" name="btn" class="btn btn-xs btn-primary" title="Edit Experience">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/delete-experience/'.$experience->id)}}" name="btn" class="btn btn-xs btn-danger" title="Remove Experience" onclick="return confirm('Are You Sure You Want to Remove This!')">
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