<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travel::all();

        return response()->json([

            "data" => $travels,
            "message" => "Viajes recibidos correctamente",


        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $travel = new Travel();

        // $travel->user_id->Auth_id;

        $travel->price->$request->input('price');

        $travel->from->$request->input('from');

        $travel->to->$request->input('to');

        $travel->save();

        return response()->json([

            "data" => $travel,

            "message" => "Viaje creado correctamente",
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $travel = Travel::all()->find($id);


        return response()->json([
            "data" => $travel,
            "message" => "Encontrado el viaje correctamente"

        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $travel = Travel::all()->find($id);
        $travel->price->$request->input('price');

        $travel->from->$request->input('from');

        $travel->to->$request->input('to');

        $travel->save();

        return response()->json([

            "data" => $travel,

            "message" => "Viaje actualizado correctamente",
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
