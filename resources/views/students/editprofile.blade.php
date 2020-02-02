    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile Update</h4>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-2 col-xs-2"></div>
                    <div class="col-md-8 col-xs-8">
                        <div class="white-box">
                            <form action="{{action('StudentController@updateprofile',$student)}}" method="GET" class="form-horizontal form-material">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="col-md-12">Name</label>
                                    <div class="col-md-12">
                                    <input type="text" name="name" value="{{$student->name}}"
                                            class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-md-12">Phone</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$student->phone}}" class="form-control form-control-line" name="phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="email" value="{{$student->email}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rollno" class="col-md-12">Roll No.</label>
                                    <div class="col-md-12">
                                        <input type="text" name="rollno" value="{{$student->rollno}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="dept" class="col-md-12">Deptartment</label>
                                    <div class="col-md-12">
                                        <input type="text" name="dept" value="{{$student->dept}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                        <label for="year" class="col-md-12">Year</label>
                                        <div class="col-md-12">
                                            <input type="text" name="year" value="{{$student->year}}" class="form-control form-control-line"> 
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