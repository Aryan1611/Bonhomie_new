@extends('admin.base')
@section('content')
<!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Coordinators</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Coordinators</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Coordinators</h3>
                            <form action='/coordinators' method="POST">
                                @csrf
                                <label>Branch</label>
                                    <select name="branch" old>
                                        <option value="all">All</option>
                                        <option value="CO">Computer</option>
                                        <option value="ME">Mechanics</option>
                                        <option value="CE">Civil</option>
                                        <option value="EE">Extc</option>
                                        <option value="EXTC">Electrical</option>
                                        <option value="PHARM">Pharmacy</option>
                                        <option value="ARCH">Architecture</option>
                                    </select>
                                    <label>Year</label>
                                        <select name="year" old>
                                            <option value="all">All</option>
                                            <option value="1">First</option>
                                            <option value="2">Second</option>
                                            <option value="3">Third</option>
                                            <option value="4">Fourth</option>
                                        </select>
                                    <input type="submit" value="Go" class="btn btn-primary">
                            </form>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <style>
                                                .table th{
                                                    color:black;
                                                }
                                                .edit{
                                                    font-size: 20px;
                                                    color:#1b68e4;
                                                }
                                                .remove{
                                                    font-size: 20px;
                                                    /* color:red; */
                                                }
                                            </style>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>RollNo</th>
                                            <th>Department</th>
                                            <th>Year</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 0;
                                        @endphp
                                         @if(count($student) == 0)                                         
                                         <tr>
                                             <td >
                                             NO STUDENTS AVAILABLE
                                             </td>
                                             </tr>
                                         @else
                                        @foreach ($coordinators as $c)
                                            <tr>
                                                <td>@php echo ++$no @endphp</td>
                                                <td>{{$c->name}}</td>
                                                <td>{{$c->phone}}</td>
                                                <td>{{$c->email}}</td>
                                                <td>{{$c->rollno}}</td>
                                                <td>{{$c->dept}}</td>
                                                <td>{{$c->year}}</td>
                                                <td>
                                                    <form action="{{action('StudentController@destroy',$c)}}" method="POST" onsubmit="return confirm('Remove Member ?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button title="Remove member" type="submit"><i class="fa fa-trash-o remove" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>                                           
                                            </tr>      
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
@endsection