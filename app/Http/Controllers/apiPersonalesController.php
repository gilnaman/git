<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;

class apiPersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $personal=Personal::all();
        return $personal;
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

        $personal= new Personal;
        $personal->curp=$request->get('curp');
        $personal->nombre=$request->get('nombre');
        $personal->apellidop=$request->get('apellidop');
        $personal->apellidom=$request->get('apellidom');
        $personal->save();

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

        $personal=Personal::find($id);
        return $personal;

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

        $personal=Personal::find($id);
        $personal->curp=$request->get('curp');
        $personal->nombre=$request->get('nombre');
        $personal->apellidop=$request->get('apellidop');
        $personal->apellidom=$request->get('apellidom');
        $personal->save();


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
        return Personal::destroy($id);
    }
}
