<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTratamiento;
use App\Http\Requests\UpdateTratamiento;

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
    public function store(StoreTratamiento $request)
    {
        

        //
        /*$tratamiento=new Tratamiento();

        $tratamiento->nombre = $request->nombre;
        $tratamiento->descripcion = $request->descripcion;
        $tratamiento->costo = $request->costo;

        $tratamiento->save();*/
        $tratamiento = Tratamiento::create($request->all());

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
    public function update(UpdateTratamiento $request,Tratamiento $tratamiento)
    {
        
        /*$request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'costo' => 'required'
        ]);*/
        
        /*$tratamiento->nombre=$request->nombre;
        $tratamiento->descripcion=$request->descripcion;
        $tratamiento->costo=$request->costo;

        $tratamiento->save();*/
        $tratamiento->update($request->all());

        return redirect()->route('tratamientos.show',$tratamiento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tratamiento $tratamiento)
    {
        //
        $tratamiento->delete();
        return redirect()->route('principal.tratamiento',$tratamiento);
    }
}
