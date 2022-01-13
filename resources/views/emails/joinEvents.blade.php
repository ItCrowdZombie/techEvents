<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola</h1>
    
    <div>
       <p> user: {{$data["user"]->name}}</p>
       <p> evento: {{$data["evento"]->title}}</p>
       <p> fecha del evento: {{$data["evento"]->event_date}}</p>
       <p> link: <a href="{{ route('user_view')}}">{{$data["evento"]->link}}</a></p>
    </div>
   
</body>
</html>