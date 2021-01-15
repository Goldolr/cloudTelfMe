<?php

namespace App\Http\Controllers;
use App\Models\Telefono;

use Illuminate\Http\Request;

class TelefonosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefonos = Telefono::all();
        return response()->json([
            "data" => $telefonos, 
            "message" => "Successfully Retrivied All Telefonos",
        ], 200);
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
        $telefono = new Telefono();
        $telefono->marca = $request->marca;
        $telefono->modelo = $request->modelo;
        $telefono->stock = $request->stock;
        $telefono->save();

        return response()->json([
            "data" => $telefono, 
            "message" => "Successfully Created Telefono"
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
        $telefono = Telefono::all()->find($id);

        return response()->jason([
            "data" => $telefono, 
            "message" => "Successfully Retrieved Telefono By ID"
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
        //
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
        $telefono = Telefono::all()->find($id); //busco el objeto con el parametro id
        $telefono->marca = $request->marca;
        $telefono->modelo = $request->modelo;
        $telefono->stock = $request->stock;
        $telefono->save();

        return response()->json([
            "data" => $telefono,
            "message" => "Successfully Updated Telefono"
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
        $telefono = Telefono::all()->find($id);
        $telefono->delete();

        return response()->json([
            "data" => $telefono,
            "message" => "Successfully Deleted Telefono"
        ], 200);
    }
}
