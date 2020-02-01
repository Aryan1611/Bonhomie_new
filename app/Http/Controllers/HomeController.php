<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Event;

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
    public function index()
    {
        $events = Event::all();
        return view('admin.events')->with('events',$events);
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
    
}
