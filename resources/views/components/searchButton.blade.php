<script>
    let input = document.getElementById(input);
    let event = input.value;
</script>

{{-- FALTA PASAR ID DE EVENTO A RUTA...PERO COMO¿? --}}

<form action="{{route ('show', 'event') }}" method="GET">
    @csrf 
    @method('GET')
    
    <p>
      <h3>Event Search:</h3>
      <input type="select"  id ="input" placeholder="Search an Event" list="eventList" value="">
      <input type="hidden"  id ="inputId"  list="eventList" value="">
      <input type="submit"  class="btn btn-sm btn-outline-secondary" value="View Event">
    </p>

  
      
    <datalist id="eventList">
        @foreach ($events as $event)
        <option value="{{$event->title}}">
        @endforeach
    </datalist>
</form> 