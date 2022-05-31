<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\ConsoleOutput;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */


    public function __invoke(Request $request)
    {
        return request()->header();
    }



    public function index()
    {



        return response()->json([

            "message" => "Te devuelvo los usuarios :D",

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([

            'email' => $request->email,

            'password' => $request->password,

        ]);
        $user->save();

        return response()->json([

            "data" => $user,

            "message" => "Usuario Registrado correctamente",
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if ($user) {

            return response()->json([
                "message" => "Found this",
                "data" => $user,
            ]);
        }

        return response()->json([
            "message" => "Found Nothing",
            "data" => null,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function Login(Request $request)
    {

        $user = User::Where('email', $request->email)->where('password', $request->password)->first();

        if ($user) {

            return response()->json([
                "data"=> $user,
                "message" => "Entro " . $request->email, 
            ]);

        }else {
            return response()->json([
                "data"=> null,
                "message" =>  "Email o contraseña incorrectos" ,
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
    }
}
