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
        $tz = CarbonTimeZone::create();
        $date = Carbon::now($tz);
        $futureEvents = Event::query()->where('event_date', '>', $date)->orderBy('event_date','ASC')->get();
        $pastEvents = Event::query()->where('event_date', '<', $date)->orderBy('event_date','DESC')->get();
        $event = Event::query()->where('is_it_featured', 1)->get();
        return view('landing', ['futureEvents' => $futureEvents, 'pastEvents'=>  $pastEvents, 'eventHigh'=> $event]);
    }


    public function admin(){
        $eventsList= Event::orderBy('event_date','DESC')->get();
        
        return view('dashboard', ['events' => $eventsList]);
    }

    public function user(){
        $user=Auth::user();
        $userEvents=$user->joinEvent;
        return view('user', ['events' => $userEvents]);
    }
};
