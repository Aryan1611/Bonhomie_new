@extends('admin.base')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Add Event</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Add new</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-2 col-xs-2"></div>
                <div class="col-md-8 col-xs-8">
                    <div class="white-box">
                        @if($errors->any())
                            <p class="alert alert-danger">{{$errors->first()}}</p>
                        @endif
                        
                        <form action='events/' method="POST" class="form-horizontal form-material">
                            @csrf
                            <div class="form-group">
                                <label for="category" class="col-sm-12">Category</label>
                                <div class="col-sm-12">
                                    <select name="category" class="form-control form-control-line" required>
                                        <option value="">Select any one</option>                                            
                                        <option value="Technical">Technical</option>
                                        <option value="Cultural">Cultural</option>
                                        <option value="Sports">Sports</option>                                            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="event_name" class="col-sm-12">Event Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="event_name" class="form-control form-control-line" placeholder="Event Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-12">Description</label>
                                <div class="col-md-12">
                                    <input type="text" name="description" class="form-control form-control-line" placeholder="Description" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-12">Date</label>
                                <div class="col-md-12">
                                    <input type="date" name="date" class="form-control form-control-line" placeholder="Date" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="time" class="col-sm-12">Time</label>
                                <div class="col-md-12">
                                    <input type="time" name="time" class="form-control form-control-line" placeholder="Time" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="rules" class="col-sm-12">Rules</label>
                                <div class="col-md-12">
                                    <input type="text" name="rules" class="form-control form-control-line" placeholder="Rules" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fee" class="col-sm-12">Fee</label>
                                <div class="col-md-12">
                                    <input type="text" name="fee" class="form-control form-control-line" placeholder="Fee" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="prize" class="col-sm-12">Prize</label>
                                <div class="col-md-12">
                                    <input type="text" name="prize" class="form-control form-control-line" placeholder="Prize" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="submit" value="Add Event" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2"></div>

              
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->
@endsection