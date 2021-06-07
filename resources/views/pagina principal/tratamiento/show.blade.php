@extends('layouts.plantilla')

@section('title','Tratamiento '.$tratamiento->nombre)

@section('content')
    <h1>Este es el tratamiento {{$tratamiento->nombre}}</h1>
    <a href="{{route('principal.tratamiento')}}">Volver a Tratamientos</a>
    <br>
    <a href="{{route('tratamientos.edit',$tratamiento)}}">Editar Tratamiento</a>

    <p><strong>Costo: </strong>{{$tratamiento->costo                                                                                                                                                                                                      }} Bs</p>
    <p>{{$tratamiento->descripcion}}</p>  
@endsection

