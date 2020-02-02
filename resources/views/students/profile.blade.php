<a href="{{action('EventController@index')}}">show events</a>

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
                                            <tr>
                                                <td>{{$student->name}}</td>
                                                <td>{{$student->phone}}</td>
                                                <td>{{$student->email}}</td>
                                                <td>{{$student->rollno}}</td>
                                                <td>{{$student->dept}}</td>
                                                <td>{{$student->year}}</td>
                                                <td>
                                                <a href = "{{action('StudentController@editprofile')}}">
                                                Edit 
                                                </a>
                                                </td>                                           
                                            </tr>
<h1><a href = "{{action('StudentController@logout')}}">Logout</a></h1>
@if($student->flag==0)
<a href="{{action('StudentController@update',$student)}}">Enroll as Coordinator</a>
@else
<h1>Request sent
@endif