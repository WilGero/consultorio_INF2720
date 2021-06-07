<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function principal()
    {
        return view('pagina principal.principal'); 
    }
    public function paciente()
    {
        return view('pagina principal.paciente');
    }
    public function tratamiento()
    {
        //$tratamientos=Tratamiento::all();
        $tratamientos=Tratamiento::orderBy('id','desc')->paginate();
        return view('pagina principal.tratamiento',compact('tratamientos'));
    }
    public function cita()
    {
        return view('pagina principal.cita');
    }
    public function historial()
    {
        return view('pagina principal.historial');
    }
}
