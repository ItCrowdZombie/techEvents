<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\joinEvent;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Event;

class RegisterController extends Controller
{
    public function join($eventId){
       
    $event = Event::findOrFail($eventId);
    $user = Auth::user();
    if (!$user->isJoined($eventId)) 


    
    {$user->joinEvent()->attach($eventId); 
        
        $data = [
            "user"=>$user,
            "evento"=>$event,
           // "titulo"=>$title,

        ];

        $correo = new joinEvent($data); 
       
        Mail::to($user->email)->send($correo); return back();} 
   
        if ($user->isJoined($eventId)) {$user->joinEvent()->detach($eventId);}
    return back();    
    }

    public function userCantSubscribe($eventId) {
        $event = Event::findOrFail($eventId);
      if ($event->subscribedUsersCounter() == $event->max_users) {
        return back()->with('mensaje', 'Máximo de usuarios alcanzado, no puedes subscribirte');

      }
    }
}