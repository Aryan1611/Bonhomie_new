@extends('admin.base')
@section('content')
<!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Events</h4>
                        <form action='/allevents' method="POST">
                            @csrf
                            <label>Category</label>
                                <select name="category" old>
                                    <option value="all">All</option>
                                    <option value="Technical">Technical</option>
                                    <option value="Cultural">Cultural</option>
                                    <option value="Sports">Sports</option>   
                                    
                                </select>
                                <input type="submit" value="Go" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Events</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            
                            <h3 class="box-title">Events</h3>
                            
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
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Rules</th>
                                            <th>Fee</th>
                                            <th>Prize</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 0;
                                        @endphp
                                        @if(count($events) == 0)                                         
                                        <tr>
                                            <td>
                                            NO EVENTS AVAILABLE
                                            </td>
                                            </tr>
                                        @else
                                        @foreach ($events as $e)
                                            <tr>
                                                <td>@php echo ++$no @endphp</td>
                                                <td>{{$e->event_name}}</td>
                                                <td>{{$e->category}}</td>
                                                <td>{{$e->description}}</td>
                                                <td>{{$e->date}}</td>
                                                <td>{{$e->time}}</td>
                                                <td>{{$e->rules}}</td>
                                                <td>{{$e->fee}}</td>
                                                <td>{{$e->prize}}</td>
                                                <td><a href="{{action('EventController@edit',$e)}}">Edit</a></td>
                                                <td>
                                                    <form action="{{action('EventController@destroy',$e)}}" method="POST" onsubmit="return confirm('Remove Member ?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button title="Remove event" type="submit"><i class="fa fa-trash-o remove" aria-hidden="true"></i></button>
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