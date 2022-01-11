<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{url('/createHotelPost')}}" method="post">
        @csrf
        {{method_field('post')}}
        <input type="text" name="hotel_name" id="" placeholder="Nombre del hotel">
        <input type="text" name="hotel_city" id="" placeholder="Ciudad del Hotel">
        <input type="number" name="" id="" min="1" max="5" placeholder="1-10">Estrellas
    </form>
</body>
</html>