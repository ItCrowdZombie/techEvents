
@extends('layouts.app')

@section( 'content')
<main>
  <a href="{{ route('create')}}" class="text-decoration-none"> <h3>Create Event</h3> </a>

  
  {{-- @include('components.searchButton') --}}


  <div class="album py-5 bg-light">
    <div class="container">
      

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @include('components.eventcard_admin')
      </div>
      
    </div>
  </div>
        
</main>
@endsection
