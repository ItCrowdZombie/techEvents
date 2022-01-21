<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @if(!empty ($eventHigh))
        
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active">
            </li>
        
        @for($i=1; $i < count($eventHigh);$i++)  
          
            <li data-bs-target="#myCarousel" data-bs-slide-to="{{$i}}">
            </li>
        
        @endfor
        @endif
    </ol>
    <div class="carousel-inner"> 
        @if(!empty ($eventHigh))    
            {{-- @if($event->is_it_featured) --}}
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <a href="{{route ('show',$eventHigh[0]->id) }}">
                            <img class="d-block"  src="{{$eventHigh[0]->img}}" height="500vw"  alt="{{$eventHigh[0]->title}}">
                        </a>
                    </div>
                </div>
        
        @for($i=1; $i < count($eventHigh);$i++)    
            {{-- @if($event->is_it_featured) --}}
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        {{-- <a href="{{$eventHigh[$i]->img}}"> --}}
                            <a href="{{route ('show', $eventHigh[$i]->id) }}">
                            <img class="d-block" src="{{$eventHigh[$i]->img}}" height="500vw"  alt="{{$eventHigh[$i]->title}} slide">
                        </a>
                    </div>
                </div>
           {{--  @endif --}}
        @endfor
        @endif

    </div>

    <!--Carousel controls--> 
    <a class="carousel-control-prev" type="button" data-bs-target="#myCarousel"  data-bs-slide="prev"> 
        <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
       
    </a> 
    <a class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next"> 
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        
    </a>
</div>

<style>
.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
   }
   
   .carousel-control-next-icon {
     background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
   }

</style>