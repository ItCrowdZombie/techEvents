<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
     <!-- Carousel indicators  
     <ol class="carousel-indicators"> 
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li> 
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li> 
    </ol> --> 


    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

        @foreach ($events as $event)
            @if ($event->is_it_featured)
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{$event->image}}" alt="First slide">
              </div>
            @endif

        </div>

        @endforeach
    </div>

    
    <!-- Wrapper for carousel items 
    <div class="carousel-inner"> 
        <div class="carousel-item active"> 

        </div>
    </div>  -->
      
    <!-- Carousel controls 
    <a class="carousel-control-prev" data-bs-slide="prev"> 
        <span class="carousel-control-prev-icon"></span> 
    </a> 
    <a class="carousel-control-next" data-bs-slide="next"> 
        <span class="carousel-control-next-icon"></span> 
    </a> --> 
</div>