<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::get()->map(function ($event) {
            $event->image_url = asset('storage/' . $event->image);
            return $event;
        });

        return view('AssessmentPublic',compact('events'));

        // return Inertia::render('Events/Event', [
        //     'events' => $events,
        // ]);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $event->image_url = asset('storage/' . $event->image);

        $events = Event::whereNotIn('id', [$id])->inRandomOrder()->limit(4)->get()->map(function ($event) {
            $event->image_url = asset('storage/' . $event->image);
            return $event;
        });
        
        return view('AssessmentDetail',compact('event','events'));
        
        // return Inertia::render('Events/EventDetail', [
        //     'event' => $event,
        // ]);
    }
}
