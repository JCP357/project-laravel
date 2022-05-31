<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use Illuminate\Support\Facades\Auth;

class TravelController extends Controller
{

    public function __invoke(Request $request)
    {
        return request()->header();
    }

    
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

        $travel=Travel::create([
            'user_id'=>Auth::id(),

            'price'=>$request->price,
            
            'from'=>$request->from,
            
            'to'=>$request->to,
        ]);
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

        
        $travel->price->$request->price;

        $travel->from->$request->from;

        $travel->to->$request->to;

        $travel->save();

        return response()->json([

            "data" => $travel,

            "message" => "Viaje actualizado correctamente",
        ], 200);
    }

    public function showFrom(Request $request)
    {
       
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
}
