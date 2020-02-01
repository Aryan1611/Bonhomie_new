<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('students.events')->with('events',$events);
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

    public function today_events()
    {
        $date = date('Y-m-d');
        $events = Event::where('date',$date)->get();
        return view('students.today-events')->with('events',$events);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
            $event->event_name = $request->event_name;
            $event->category = $request->category;
            $event->description = $request->description; 
            $event->date = $request->date; 
            $event->time = $request->time; 
            $event->rules = $request->rules; 
            $event->fee = $request->fee; 
            $event->prize = $request->prize;
            
            $event->save();

            return redirect()->route('allevents');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('students.eventdetail')->with('event', $event);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.editevent')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event1 = Event::where("id", $event->id)->first();

        $event1->event_name = $request->event_name;
        $event1->description = $request->description;
        $event1->rules = $request->rules;
        $event1->date = $request->date; 
        $event1->time = $request->time;
        $event1->fee = $request->fee;
        $event1->prize = $request->prize; 

        $event1->save();


        return redirect()->route('allevents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back();
    
    }
}
