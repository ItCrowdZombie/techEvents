<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function join($eventId){
        
    $user = Auth::user();
    if (!$user->isJoined($eventId)) {$user->joinEvent()->attach($eventId); return back();} 
    if ($user->isJoined($eventId)) {$user->joinEvent()->detach($eventId);}
    return back();    
    }
}