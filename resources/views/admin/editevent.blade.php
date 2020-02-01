@extends('admin.base')

@section('content')
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Event Update</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Event</a></li>
                            <li class="active">Details</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-2 col-xs-2"></div>
                    <div class="col-md-8 col-xs-8">
                        <div class="white-box">
                            <form action="{{action('EventController@update',$event)}}" method="POST" class="form-horizontal form-material">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="event_name" class="col-md-12">Event Name</label>
                                    <div class="col-md-12">
                                    <input type="text" name="event_name" value="{{$event->event_name}}"
                                            class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-md-12">Description</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$event->description}}" class="form-control form-control-line" name="description"
                                            id="example-email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rules" class="col-md-12">Rules</label>
                                    <div class="col-md-12">
                                        <input type="text" name="rules" value="{{$event->rules}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="col-md-12">Date</label>
                                    <div class="col-md-12">
                                        <input type="date" name="date" value="{{$event->date}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="time" class="col-md-12">Time</label>
                                    <div class="col-md-12">
                                        <input type="time" name="time" value="{{$event->time}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                        <label for="fee" class="col-md-12">Fee</label>
                                        <div class="col-md-12">
                                            <input type="text" name="fee" value="{{$event->fee}}" class="form-control form-control-line"> 
                                        </div>
                                    </div>

                                <div class="form-group">
                                        <label for="prize" class="col-md-12">Prize</label>
                                        <div class="col-md-12">
                                            <input type="text" name="prize" value="{{$event->prize}}" class="form-control form-control-line"> 
                                        </div>
                                    </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
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