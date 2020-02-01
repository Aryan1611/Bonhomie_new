<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'password'=>'min:8',
    ]);

    //Trainer Register
        if (Student::where('rollno', '=', $request->rollno)->exists() or Student::where('email', '=', $request->email)->exists()) {
            return redirect()->back()->withErrors(['Email Id or Roll No. already exists']); 
        }
        else{
            $student = new Student;
            $student->name = $request->name;
            $student->phone = $request->phone;
            $student->email = $request->email; 
            $student->dept = $request->dept; 
            $student->year = $request->year; 
            $student->rollno = $request->rollno; 
            $student->role = 'student';
            $student->flag='0';
            $student->password = Hash::make($request->password); 
            
            $student->save();

            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student->flag=1;
        $student->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
       dd($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->role='coordinator';
        $student->flag=2;
        $student->save();
        return redirect()->back();
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back();
    }
}
