
<?php
use Carbon\Carbon;
use Carbon\CarbonTimeZone;



$tz = CarbonTimeZone::create('Europe/Madrid');
$date = Carbon::now($tz);

?>


@foreach ($events as $event)
@if ($event->event_date > $date)
    

<div class="col">
    <div class="card shadow-sm">
{{--     <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
 --}}
      <div class="card-body">
        <p class="card-text">{{$event->title}}</p>
        <img src="{{$event->img}}"alt="" class="card-img-top">
        <p class="card-text">{{$event->description}}</p>
        <p class="card-text">{{$event->event_date}}</p>
        <p class="card-text">Max. users: {{$event->max_users}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            @auth
            @php 
            $user = Auth::user();
            if (!$user->isJoined($event)) {$join="suscribe";}
            if ($user->isJoined($event)) {$join="unsubscribe";}
            @endphp
            <form action="{{route ('join', $event->id) }}" method="POST">
              @csrf 
              @method('POST')
              <button type="submit" class="btn btn-sm btn-outline-secondary">{{$join}}</button>
            </form>
            @endauth
          </div>

        </div>
      </div>
    </div>

</div>
@endif
@endforeach 
 


