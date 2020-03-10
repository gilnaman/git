<?php

namespace App\Http\Controllers;
use App\Beca;
use Illuminate\Http\Request;

class ApiBecasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Beca::all();
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
        $beca = new Beca;
        $beca->id_beca=$request->get('id_beca');
        $beca->beca=$request->get('beca');

        // $medico->sintoma=$request->get('sintoma');
        
        $beca->save();
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
        $beca=Beca::find($id);
        return $beca;
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
        $beca=Beca::find($id);
        $beca->id_beca=$request->get('id_beca');
        $beca->beca=$request->get('beca');
        $beca->update();
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
        return Beca::destroy($id);
    }
}
