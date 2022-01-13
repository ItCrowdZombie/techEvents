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
        $event = Event::query()->where('is_it_featured', 1)->get();
        //dd($event);
        //$eventHigh = $event->is_it_featured;
        // $user_date = Carbon::createFromFormat('Y-m-d H:i', $utc_date, 'UTC');
        // $user_date->setTimezone($user->timezone);
        // dd($date);
        return view('landing', ['events' => $eventsList, 'eventHigh'=> $event]);
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
