<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Services\FileServices;
use Illuminate\Console\Scheduling\Event as SchedulingEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(['file' => 'required|image|max:2048' ]);
        // $images = $request->file('file')->store('public/img');
        // $url = Storage::url($images);

        $fileService = new FileServices();
        $url = $fileService-> storeFile($request);

        $stored_data= [
            'title'=> $request->title,
            'user_id'=> Auth::user()->id,
            'img'=>$url,
            'event_date'=>$request->event_date,
            'description'=>$request->description,
            'max_users'=>$request->max_users,
            'is_it_featured'=>$request->is_it_featured,
            'link'=>$request->link,
        ];
           

        Event::create($stored_data);
        return redirect(route('dashboard'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($eventId)
    {
        $event = Event::findOrFail($eventId);
        return view ('show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventToEdit=Event::findOrFail($id);
        return view('editEventform', ['event'=> $eventToEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $eventToUpdate = Event::findOrFail($id);
        
        $fileService = new FileServices();
        $eventToUpdate->img = $fileService->deleteFile($id);
        $url = $fileService-> storeFile($request);

        $eventToUpdate->title= $request->input('title'); 
        $eventToUpdate->img= $url;

        $eventToUpdate->event_date = $request->input('event_date');
        $eventToUpdate->description = $request->input('description');
        $eventToUpdate->max_users = $request->input('max_users');
        $eventToUpdate->is_it_featured = $request->has('is_it_featured');
        $eventToUpdate->link = $request->input('link');

        $eventToUpdate -> save();
       
        return redirect(route('dashboard'));

    }

    public function updateFeatured(Request $request, $id)
    {
        $eventToUpdate = Event::findOrFail($id);
    
        $eventToUpdate->is_it_featured = $request->has('is_it_featured');

        $eventToUpdate -> save();
       
        return redirect(route('dashboard'));

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$eventToDelete = Event::findOrFail($id);
        //$eventToDelete->delete();

     Event::destroy($id);
        return back();
    }
}
