<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        @for($i=1; $i < count($eventHigh);$i++)    
        <li data-bs-target="#myCarousel" data-bs-slide-to="{{$i}}"></li>
        @endfor
    </ol>
    <div class="carousel-inner"> 
        @if(!empty ($eventHigh))    
            {{-- @if($event->is_it_featured) --}}
                <div class="carousel-item active">
                    <img class="d-block w-100"  src="{{$eventHigh[0]->img}}" height="300vw"  alt="{{$eventHigh[0]->title}}">
                </div>
        @endif 

        @for($i=1; $i < count($eventHigh);$i++)    
            {{-- @if($event->is_it_featured) --}}
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{$eventHigh[$i]->img}}" height="300vw"  alt="{{$eventHigh[$i]->title}} slide">
                </div>
           {{--  @endif --}}
        @endfor

    </div>

    <!--Carousel controls--> 
    <a class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev"> 
        <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
        <!-- <span class="visually hidden">Previous</span> -->
    </a> 
    <a class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next"> 
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <!-- <span class="visually hidden">Next</span> -->
    </a>
</div>