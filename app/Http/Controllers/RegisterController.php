<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\joinEvent;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class RegisterController extends Controller
{
    public function join($eventId){
        
    $user = Auth::user();
    if (!$user->isJoined($eventId)) 
    
    {$user->joinEvent()->attach($eventId); 
        
        $data = [
            "user"=>$user,
            "evento"=>$eventId,

        ];

        $correo = new joinEvent($data); 
       
        Mail::to($user->email)->send($correo); return back();} 
   
        if ($user->isJoined($eventId)) {$user->joinEvent()->detach($eventId);}
    return back();    
    }
}