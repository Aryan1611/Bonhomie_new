<?php

namespace App\Http\Controllers;

use App\Event_participation;
use Illuminate\Http\Request;
use App\Student;
use App\Event;

class EventParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        
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
        dd($request->event_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event_participation  $event_participation
     * @return \Illuminate\Http\Response
     */
    public function show(Event_participation $event_participation)
    {
        dd($request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event_participation  $event_participation
     * @return \Illuminate\Http\Response
     */
    public function edit(Event_participation $event_participation)
    {
        dd($request);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event_participation  $event_participation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event_participation $event_participation)
    {
        $event_participation->event_id=$request->event_id;
        $event_participation->student_id=session('user_id');
        $event_participation->save();
        return ("Thanks");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event_participation  $event_participation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event_participation $event_participation)
    {
        dd($request);
        
    }

    
}
