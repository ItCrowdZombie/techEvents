<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\joinEvent;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function join($eventId){
        
    $user = Auth::user();
    if (!$user->isJoined($eventId)) {$user->joinEvent()->attach($eventId); $correo = new joinEvent; Mail::to('rodriguez.m.lucas@gmail.com')->send($correo); return back();} 
    if ($user->isJoined($eventId)) {$user->joinEvent()->detach($eventId);}
    return back();    
    }
}