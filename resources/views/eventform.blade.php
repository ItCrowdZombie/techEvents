
@extends('layouts.app')

@section( 'content')
<main>

  <div class="album py-5 bg-light">
    <div class="container">
      
      <form class="row g-3" action='{{route('store')}}'method="post">
        @csrf
        <div class="col-md-6">
          <label for="inputTitle" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="inputTitle">
        </div>
        <div class="col-12">
          <label for="img" class="form-label">Image</label>
          <input type="url" class="form-control" name="img">
        </div>
         <div class="col-md-6">
          <label for="max_users" class="form-label">Max_Users </label>
          <input type="number" class="form-control" name="max_users">
        </div>
        <div class="col-12">
          <label for="description" class="form-label">Description</label>
          <input type="textarea" class="form-control" name="description">
        </div>

        <div class="col-12">
          <label for="link" class="form-label">Event link</label>
          <input type="url" class="form-control" name="link">
        </div>
      
        <div class="col-md-6">
          <label for="event_date" class="form-label">Event Date</label>
          <input type="datetime-local" class="form-control" name="event_date">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="is_it_featured">
            <label class="form-check-label" for="gridCheck">
              HighLighted
            </label>
          </div>
        </div> 
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

    </div>
  </div>
        
</main>
@endsection
