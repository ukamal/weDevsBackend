@extends('backend.layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Student Grade</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Grade</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>
                                    Student Grade List
                                    
                                    <a href="{{ route('marks-grade-add') }}" class="btn btn-primary float-sm-right"> <i class="fa fa-plus-circle"></i> Add Student Grade</a>
                                    
                                </h3>
                            </div>
                            <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL:</th>
                                        <th>Grade Name</th>
                                        <th>Grade Point</th>
                                        <th>Start Marks</th>
                                        <th>End Marks</th>
                                        <th>Start Point</th>
                                        <th>End Point</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grades as $key => $grade)
                                    <tr class="{{$grade->id}}">
                                        <td>{{$key +1}}</td>
                                        <td>{{$grade->grade_name}}</td>
                                        <td>{{$grade->grade_point}}</td>
                                        <td>{{$grade->start_marks}}</td>
                                        <td>{{$grade->end_marks}}</td>
                                        <td>{{$grade->start_point}}</td>
                                        <td>{{$grade->end_point}}</td>
                                        <td>{{$grade->remakrs}}</td>
                                        <td>
                                            <a title="Edit" href="{{ route('marks-grade-edit',$grade->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection