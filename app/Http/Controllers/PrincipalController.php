<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function index()
    {
        return view('pagina principal.index');
    }
    public function paciente()
    {
        return view('pagina principal.paciente');
    }
    public function tratamiento()
    {
        return view('pagina principal.tratamiento');
    }
    public function cita()
    {
        return view('pagina principal.cita');
    }
    public function show()
    {
        return view('pagina principal.show');
    }
}
