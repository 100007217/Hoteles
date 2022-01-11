<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>CITY</th>
        <td>
            <form action="{{url('/createHotel')}}" method="get">
                {{method_field('get')}}
                <input type="submit" value="Generar Hotel">
            </form>
        </td>
    </tr>
    
    @forelse ($hoteles as $hotel)
    <tr>
        <td>{{$hotel->id}}</td>
        <td>{{$hotel->name}}</td>
        <td>{{$hotel->city}}</td>
        <td>
            <form action="{{url('updateHotel/'.$hotel->id)}}" method="get">
                <input type="submit" value="Modificar datos">
            </form>
        </td>
        <td>
            <form action="{{url('deleteHotel/'.$hotel->id)}}" method="get">
                <input type="submit" value="Eliminar hotel">
            </form>
        </td>
        <br>
    </tr>

        @empty
    @endforelse
</table>
</body>
</html>