
@extends('layouts.app')

@section( 'content')
<main>

  <div class="album py-5 bg-light">
    <div class="container">
      

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @include('components.eventcard')
      </div>
    </div>
  </div>
        
</main>
@endsection
