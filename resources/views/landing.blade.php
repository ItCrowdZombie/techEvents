
@extends('layouts.app')

@section( 'content')
<main>
  
  <a href="{{ route('user_view')}}" class="text-decoration-none"> <h3>Mis cursos</h3></a>

  <div class="album py-5 bg-light">
    <div class="container">
      

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @include('components.eventcard')
        <hr/>
        <h3>Eventos pasados</h3>
        <hr/>
        @include('components.pasteventcard')
      </div>
      
    </div>
  </div>
        
</main>
@endsection
