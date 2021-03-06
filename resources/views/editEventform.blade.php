
@extends('layouts.app')

@section( 'content')
<main>

  <div class="album py-5 bg-light">
    <div class="container">
      
      <form class="row g-3" action="{{route('update',$event->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
          <label for="inputTitle" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="inputTitle" value="{{$event->title}}">
        </div>
        
        <div class="col-12">
          <label for="img" class="form-label">Image</label>
          <input type="file" class="form-control" placeholder="{{$event->img}}" name="file" id="" accept="image/*" value="{{$event->img}}">
          @error('file')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="max_users" class="form-label">Max_Users </label>
          <input type="number" class="form-control" name="max_users" value={{$event->max_users}}>
        </div>
        <div class="col-12">
          <label for="description" class="form-label">Description</label>
          <input type="textarea" class="form-control" name="description"value={{$event->description}}>
        </div>

        <div class="col-12">
          <label for="link" class="form-label">Event link</label>
          <input type="url" class="form-control" name="link" value={{$event->link}}>
        </div>
      
        <div class="col-md-6">
          <label for="event_date" class="form-label">Event Date</label>
          <input type="datetime-local" class="form-control" name="event_date"value={{$event->event_date}} required>
        </div>
        <div class="col-12">
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

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>

    </div>
  </div>
        
</main>
@endsection
