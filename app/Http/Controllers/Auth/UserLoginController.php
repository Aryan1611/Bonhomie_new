<?php


namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Auth;
use App\Student;
// use App\Event;

class UserLoginController extends Controller
{
    // public function __construct(){
    //     $this->middleware('guest:student');
    // }
    
    public function index()
    {
        return view('signin');
    }

    public function login(Request $request){


        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
        


        $errors = new MessageBag;

            if(Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password])){
                // return redirect()->intended('/');
                // $events = Event::all();
                // return view('students.profile')->with('events',$events);
                $student = Student::where('email',$request->email)->first();
                return view('students.profile')->with('student',$student);
            }
            $errors = new MessageBag(['password' => ['Invalid email or password.']]);
            return redirect()->back()->withErrors($errors);

    }
}
