
@extends('layouts.app')

@section( 'content')
<main>

  <div class="album py-5 bg-light">
    <div class="container">
      
      <form class="row g-3" action="{{route('update',$event->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="col-md-6">
          <label for="inputTitle" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="inputTitle" value="{{$event->title}}">
        </div>
        <div class="col-12">
          <label for="img" class="form-label">Imagen</label>
          <input type="url" class="form-control" name="img" value="{{$event->img}}">
        </div>

        <div class="col-md-6">
          <label for="max_users" class="form-label">Max_Users </label>
          <input type="number" class="form-control" name="max_users" value={{$event->max_users}}>
        </div>
        <div class="col-12">
          <label for="description" class="form-label">Description</label>
          <input type="textarea" class="form-control" name="description"value={{$event->description}}>
        </div>
      
        <div class="col-md-6">
          <label for="event_date" class="form-label">Event Date</label>
          <input type="datetime" class="form-control" name="event_date"value={{$event->event_date}}>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_it_featured" value={{$event->is_it_featured}}>
            <label class="form-check-label" for="gridCheck">
              HighLighted
            </label>
          </div>
        </div> 

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>

    </div>
  </div>
        
</main>
@endsection
