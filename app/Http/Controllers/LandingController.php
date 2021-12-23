<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Carbon\CarbonTimeZone;


class LandingController extends Controller
{
    public function index() {
        $eventsList= Event::orderBy('event_date','ASC')->get();
       
        // dd($date);
        return view('landing', ['events' => $eventsList]);
    }

    public function admin(){
        $eventsList= Event::orderBy('event_date','ASC')->get();
        
        return view('dashboard', ['events' => $eventsList]);
    }

    public function user(){
        $user=Auth::user();
        $userEvents=$user->joinEvent;
        return view('user', ['events' => $userEvents]);
    }
};
