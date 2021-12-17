
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
          <label for="img" class="form-label">Imagen</label>
          <input type="url" class="form-control" name="img">
        </div>
{{--         <div class="col-md-6">
          <label for="inputPlazas" class="form-label">plazas totales </label>
          <input type="number" class="form-control" id="inputPlazas">
        </div>
        <div class="col-12">
          <label for="inputDescription" class="form-label">Description</label>
          <input type="textarea" class="form-control" id="inputDescription">
        </div>
      
        <div class="col-md-6">
          <label for="inputDate" class="form-label">Fecha del evento</label>
          <input type="datetime" class="form-control" id="inputDate">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Destacado
            </label>
          </div>
        </div> --}}
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

    </div>
  </div>
        
</main>
@endsection
