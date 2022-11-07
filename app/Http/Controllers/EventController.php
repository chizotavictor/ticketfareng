<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function createEventPage(Request $request)
    {
        return view('organizer.event.event-create');
    }
}
