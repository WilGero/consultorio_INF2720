@extends('layouts.plantilla')

@section('title','Tratamiento '.$tratamiento->nombre)

@section('content')
    <h1>Este es el tratamiento {{$tratamiento->nombre}}</h1>
    <a href="{{route('principal.tratamiento')}}">Volver a Tratamientos</a>
    <p><strong>Citas: </strong>{{$tratamiento->duracion}} </p> 
    <p><strong>Costo: </strong>{{$tratamiento->costo                                                                                                                                                                                                      }} Bs</p>
    <p>{{$tratamiento->descripcion}}</p>  
@endsection

