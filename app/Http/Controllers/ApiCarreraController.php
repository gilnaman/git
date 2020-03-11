<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
class ApiCarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return Carrera::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrera= new Carrera;
        $carrera->id_carrera=$request->get('id_carrera');
        $carrera->carrera=$request->get('carrera');
    
        $carrera->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrera=Carrera::find($id);
        return $carrera;
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
        $carrera=Carrera::find($id);
        $carrera->id_carrera=$request->get('id_carrera');
        $carrera->carrera=$request->get('carrera');
    
        $carrera->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Carrera::destroy($id);
    }
}
