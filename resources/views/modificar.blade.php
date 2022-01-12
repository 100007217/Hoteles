<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{url('/updateHotelPost')}}" method="post">
        @csrf
        {{method_field('put')}}
        <input type="hidden" name="hotel_id" value="{{$detallesHotel[0]->id}}">
        <input type="text" name="hotel_name" id="" value="{{$detallesHotel[0]->name}}">
        <input type="text" name="hotel_city" id="" value="{{$detallesHotel[0]->city}}">
        <input type="number" name="hotel_stars" id="" min="1" max="5" value="{{$detallesHotel[0]->stars}}">Estrellas
        <input type="submit" value="Modificar">
    </form>
</body>
</html>