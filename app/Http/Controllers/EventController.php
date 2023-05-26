<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Daycare;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Daycare $daycare)

    {
         $daycareId = auth()->user()->daycare_id;
          $events =Event::where('daycare_id' , $daycareId)->get();


        return view('backend.event.event', compact('events'));
    }

    public function create()
    {
        return view('backend.teacher.add_event');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'daycare_id' => 'required|exists:daycares,id',
            'day' => 'required',
            'month' => 'required',
            'time' => 'required',
            'subject' => 'required',
        ]);

        Event::create($validatedData);

        return redirect()->route('teacher.events.index')->with('success', 'Event created successfully.');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'daycare_id' => 'required|exists:daycares,id',
            'day' => 'required',
            'month' => 'required',
            'time' => 'required',
            'subject' => 'required',
        ]);

        $event->update($validatedData);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
