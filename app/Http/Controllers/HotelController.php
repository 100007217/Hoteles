<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoteles = DB::table('hotels')->get();
        //return $listacoches;

        //Las dos siguientes lineas son identicas, solo cambia la forma de escribirlas

        //return view('vista', compact('listaCoches'));
        //Este vista de aqui abajo es el nombre del fichero .blade
        return view('vista', ['hoteles' => $hoteles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear');
    }

    public function createPost(Request $request)
    {
        $datos = $request->except('_token');
        DB::table('hotels')->insert([
            'name' => $datos['hotel_name'],
            'city' => $datos['hotel_city'],
            'stars' => $datos['hotel_stars'],
        ]);
        return redirect("/index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $datosHotel=DB::table('hotels')->where('id', '=',$id)->get();
        //return $datosHotel;
        return view('modificar', ['detallesHotel' => $datosHotel]);
    }
    public function updateHotelPost(Request $request){
        $id = $request->input('hotel_id');
        $name = $request->input('hotel_name');
        $city = $request->input('hotel_city');
        $stars = $request->input('hotel_stars');
        DB::update('update hotels set name = ?,city=?,stars=? where id = ?',[$name,$city,$stars,$id]);
        return redirect('/index');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('hotels')->where('id', '=',$id)->delete();
        return redirect('/index');
    }
}
