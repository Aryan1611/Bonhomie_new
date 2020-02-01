<a href="{{action('EventController@index')}}">show events</a>

<h1>{{$student->name}}

@if($student->flag==0)
<a href="{{action('StudentController@update',$student)}}">Enroll as Coordinator</a>
@else
<h1>Request sent
@endif