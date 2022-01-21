@foreach ($events as $event)
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
        <p class="card-text">Current users: {{$event->subscribedUsersCounter()}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
          <form action="{{route ('show', $event->id) }}" method="GET">
            @csrf 
            @method('GET')
            <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
          </form>
            <form action="{{route('edit',$event->id)}}" method="get">
              @csrf 
              <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
            </form>
            <form action="/events/{{$event->id}}" method="post">
              @csrf 
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
            </form>
          </div>
          @php
            if (!$event->is_it_featured) {$star='fa fa-star-o';}
            if ($event->is_it_featured) {$star='fa fa-star';}
          @endphp

          <small class="text-muted loveButton">
            <span class="btn btn-warning" aria-hidden="true">
              <a href="{{route('updateFeatured',$event->id)}}">
                  <i class= "{{$star}}" aria-hidden="true" name= "highlighted" style="color: rgb(238, 255, 0)"></i>
              </a>
            </span>
          </small>
        </div>
      </div>
    </div>

</div>
@endforeach 
 


