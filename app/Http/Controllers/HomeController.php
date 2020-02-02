<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Event;
use App\Event_participation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $category = $request->input('category');
        
        if($category == 'Technical'){
            $events = Event::where('category', $category)->get();
            return view('admin.events')->with(array('events'=>$events));
        }
        if($category == 'Sports'){
            $events = Event::where('category', $category)->get();
            // dd($events);

            return view('admin.events')->with(array('events'=>$events));
        }
        if($category == 'Cultural'){
            $events = Event::where('category', $category)->get();
            // dd($events);

            return view('admin.events')->with(array('events'=>$events));
        }
        if($category == 'all'){
            $events = Event::all();
            // dd($events);
            return view('admin.events')->with(array('events'=>$events));
        }
            $events = Event::all();
            return view('admin.events')->with(array('events'=>$events));

    }

    public function view_addevent()
    {
        return view('admin.addevent');
    }

    public function view_coordinators()
    {
        $coordinators = Student::all()->where('role','coordinator');
        return view('admin.coordinators')->with('coordinators',$coordinators);
    }

    public function view_participants()
    {
        $student = Student::all()->where('role','student');
        return view('admin.participants')->with('student',$student);
    }

    public function view_requests()
    {
        $student = Student::all()->where('role','student')->where('flag',1);
        return view('admin.requests')->with('student',$student);
    }

    public function participation()
    {
        $event_participation = Event_participation  ::all();
        // dd($event_participation);
        $events = Event::all();
        return view('admin.participation')->with(array('events'=>$events));
        return view('admin.participation')->with('event_participation',$event_participation);
    }
    
}
