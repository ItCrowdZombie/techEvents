@foreach ($events as $event)
<div class="col">
    <div class="card shadow-sm">
{{--     <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
 --}}
      <div class="card-body">
        <img src="{{$event->img}}"alt="" class="card-img-top">
        <p class="card-text">{{$event->title}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">Join</button>
            <form action="/events/{{$event->id}}" method="post">
              @csrf 
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
            </form>
            <form action="{{route('edit',$event->id)}}" method="get">
              @csrf 
              <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
            </form>
          </div>
          <small class="text-muted">9 mins</small>
        </div>
      </div>
    </div>

</div>
@endforeach 
 

