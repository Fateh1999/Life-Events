<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class UserController extends Controller
{
    public function home(){
        return view('home');
    }
    public function addEvent(Request $request){
        // dd($request);
        $request->validate([
            'eventName' => 'required',
            'eventDate' => 'required',
            'eventDescription' => 'required',
            'eventImage' => 'required'
        ]);

        //upload event
        $event = new Events;
        $event->eventName = $request->eventName;
        $event->eventDate = $request->eventDate;
        $event->eventDescription = $request->eventDescription;
        $event->eventImage = $request->eventImage;
        $event->save();

        return redirect()->route ('home.page')->withSuccess('Successfully created');
    }
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
}
