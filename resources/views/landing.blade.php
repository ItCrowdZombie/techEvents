
@extends('layouts.app')

@section( 'content')

@include('components.slider')

<main>
  
  @auth
  <a href="{{ route('user_view')}}" class="text-decoration-none"> <h3>Mis cursos</h3></a>
  @endauth
  
  @if (session('mensaje'))
      <div class="alert alert-danger">
          {{ session('mensaje') }}
      </div>
  @endif

  <div class="album py-5 bg-light">
    <div class="container">
      

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          
          @include('components.eventcard')
        </div>
          <h3>Eventos pasados</h3>
          <hr/>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @include('components.pasteventcard')
        </div>
    </div>
      
    </div>
  </div>
        
</main>
@endsection
