<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    @foreach ($events as $event)
            
         @if ($event->is_it_featured)
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{$event->img}}" height="300vw"  alt="First slide">
            </div>
         @endif
                 
            <div class="carousel-item">
                <img class="d-block w-100" src="{{$event->img}}" alt="Second slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{$event->img}}" alt="Third slide">
            </div>

    @endforeach
    </div>

    <!--Carousel controls--> 
    <a class="carousel-control-prev" type="button" data-bs-slide="prev"> 
        <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
        <!-- <span class="visually hidden">Previous</span> -->
    </a> 
    <a class="carousel-control-next" type="button" data-bs-slide="next"> 
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <!-- <span class="visually hidden">Next</span> -->
    </a>
</div>