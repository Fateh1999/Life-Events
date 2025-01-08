<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class UserController extends Controller
{
    public function home(){
        return view('home');
    }
    public function add_event(Request $request){
        $request->validate([
            'eventName' => 'required',
            'eventDate' => 'required',
            'eventDescription' => 'required',
            'eventImage' => 'required',
        ]);

        //upload event
        $eventImage = time().'.'.$request->eventImage->extension();
        $request->eventImage->move(public_path('gallery'), $eventImage);

        $event = new Event;
        $event->eventName = $request->eventName;
        $event->eventDate = $request->eventDate;
        $event->eventDescription = $request->eventDescription;
        $event->eventImage = $eventImage;
        $event->save();

        return redirect()->route('home.page');
    }
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
}
