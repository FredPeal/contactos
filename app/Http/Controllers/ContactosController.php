<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contactos=Contacto::all();
        return response()->json($contactos);
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
        //
        $contacto=Contacto::create([
                "telefono"=>$request->telefono,
                "nombre"=>$request->nombre,
                "email"=>$request->email,
                "telefono2"=>$request->telefono2
        ]);
        return response()->json($contacto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contactos=Contacto::where('nombre','like',$id."%")->get();
        return response()->json($contactos);
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
        //
        $contacto=Contacto::find($id);
        $contacto->nombre=$request->nombre;
        $contacto->telefono=$request->telefono;
        $contacto->email=$request->email;
        $contacto->telefono2=$request->telefono2;
        $contacto->save();
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
        $contacto=Contacto::find($id);
        $contacto->delete();
    }
}
