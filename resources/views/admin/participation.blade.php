@extends('admin.base')
@section('content')

<!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Participation</h4>
                        <form action='/coordinators' method="POST">
                            @csrf
                            <label>Event Name</label>
                                <select name="event_name" old>
                                    <option value="all">All</option>
                                    @foreach ($events as $e)
                                        <option value={{$e->event_name}}>{{$e->event_name}}</option>
                                    @endforeach
                                </select>
                                <input type="submit" value="Go" class="btn btn-primary">
                        </form>
                      </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Participation</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Participation</h3>
                            
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
                                            <th>Event Name</th>
                                            <th>Student Name</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 0;
                                        @endphp
                                         {{-- @if(count($coordinators) == 0)                                         
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
                    
                                        @endforeach
                                        @endif --}}
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