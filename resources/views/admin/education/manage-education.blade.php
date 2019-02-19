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


                            <th>University Name</th>
                            <th>Program Description</th>


                            <th>College Name</th>
                            <th>Program Description</th>


                            <th>School Name</th>
                            <th>Program Description</th>


                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1;?>
                        @foreach($educations as $education)

                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $education->university_name }}</td>
                                <td>{{ $education->university_description }}</td>

                                <td>{{ $education->college_name }}</td>
                                <td>{{ $education->college_description }}</td>

                                <td>{{ $education->school_name }}</td>
                                <td>{{ $education->school_description }}</td>

                                <td>{{ $education->publication_status ==1 ? 'Published' : 'Unpublished'}} </td>
                                <td>
                                    @if($education->publication_status ==1)
                                        <a href="{{url('/unpublished-education/'.$education->id)}}" name="btn" class="btn btn-xs btn-success" title="Update Education">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/published-education/'.$education->id)}}" name="btn" class="btn btn-xs btn-warning" title="Update Education">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/edit-education/'.$education->id)}}" name="btn" class="btn btn-xs btn-primary" title="Edit Education">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/delete-education/'.$education->id)}}" name="btn" class="btn btn-xs btn-danger" title="Remove Education" onclick="return confirm('Are You Sure You Want to Remove This!')">
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