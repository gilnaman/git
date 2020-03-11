<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localidad;

class ApiLocalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Localidad::all();

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
        $localidad=new Localidad;
        $localidad->id_localidad=$request->get('id_localidad');
        $localidad->localidad=$request->get('localidad');
        $localidad->cp=$request->get('cp');
        $localidad->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Localidad::find($id);

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
       $localidad=Localidad::find($id);
       $localidad->id_localidad=$request->get('id_localidad');
       $localidad->localidad=$request->get('localidad');
       $localidad->cp=$request->get('cp');

       $localidad->update();
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

        return localidad::destroy($id);
    }
}
