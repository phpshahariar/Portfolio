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


                            <th>Category Name</th>
                            <th>Project Name</th>


                            <th>Project Title</th>
                            <th>Project Category</th>


                            <th>Project File</th>
                            <th>Publication Status</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1;?>
                        @foreach($portfolios as $portfolio)

                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $portfolio->category_name }}</td>
                                <td>{{ $portfolio->project_name }}</td>

                                <td>{{ $portfolio->project_title }}</td>
                                <td>{{ $portfolio->project_category }}</td>

                                <td>
                                    <img src="{!! asset('files/'.$portfolio->project_file) !!}" height="100" width="100" alt=""/>
                                </td>

                                <td>{{ $portfolio->publication_status ==1 ? 'Published' : 'Unpublished'}} </td>
                                <td>
                                    @if($portfolio->publication_status ==1)
                                        <a href="{{url('/unpublished-portfolio/'.$portfolio->id)}}" name="btn" class="btn btn-xs btn-success" title="Update Portfolio">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/published-portfolio/'.$portfolio->id)}}" name="btn" class="btn btn-xs btn-warning" title="Update Portfolio">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/edit-portfolio/'.$portfolio->id)}}" name="btn" class="btn btn-xs btn-primary" title="Edit Portfolio">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/delete-portfolio/'.$portfolio->id)}}" name="btn" class="btn btn-xs btn-danger" title="Remove Portfolio" onclick="return confirm('Are You Sure You Want to Remove This!')">
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