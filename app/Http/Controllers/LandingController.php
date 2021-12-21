<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index() {
        $eventsList= Event::all();
        
        return view('landing', ['events' => $eventsList]);
    }

    public function admin(){
        $eventsList= Event::all();
        
        return view('dashboard', ['events' => $eventsList]);
    }

    public function user(){
        $eventsList= Event::all();
        
        return view('user', ['events' => $eventsList]);
    }
};
