<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
        return view('pagina principal/tratamiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'costo' => 'required'
        ]);

        //
        $tratamiento=new Tratamiento();

        $tratamiento->nombre = $request->nombre;
        $tratamiento->descripcion = $request->descripcion;
        $tratamiento->costo = $request->costo;

        $tratamiento->save();
        return redirect()->route('tratamientos.show',$tratamiento);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tratamiento $tratamiento){
        //
        return view('pagina principal/tratamiento.show',compact('tratamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tratamiento  $tratamiento)
    {
        return view('pagina principal/tratamiento.edit',compact('tratamiento'));
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Tratamiento $tratamiento)
    {
        
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'costo' => 'required'
        ]);
        
        
        
        $tratamiento->nombre=$request->nombre;
        $tratamiento->descripcion=$request->descripcion;
        $tratamiento->costo=$request->costo;

        $tratamiento->save();

        return redirect()->route('tratamientos.show',$tratamiento);
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
