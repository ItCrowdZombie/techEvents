



@foreach ($pastEvents as $event)
    

<div class="col">
    <div class="card shadow-sm" style="color: rgb(168, 167, 167)">
{{--     <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
 --}}
      <div class="card-body">
        <p class="card-text">{{$event->title}}</p>
        <img src="{{$event->img}}"alt="" class="card-img-top">
        <p class="card-text">{{$event->description}}</p>
        <p class="card-text">{{$event->event_date}}</p>
        <p class="card-text">Max. users: {{$event->max_users}}</p>
        <div class="d-flex justify-content-between align-items-center">

        </div>
      </div>
    </div>

</div>
@endforeach 
 


