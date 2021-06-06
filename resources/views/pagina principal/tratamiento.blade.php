@extends('layouts.plantilla')

@section('title','tratamientos')

@section('content')
    <h1>Bienvenido a la ventana tratamientos</h1>
    <a href="{{route('tratamiento.create')}}">Agregar tratamiento</a>
    <ul>
        @foreach ($tratamientos as $tratamiento)
        <li>
            <a href="{{route('ver.tratamiento',$tratamiento->id)}}">{{$tratamiento->nombre}}</a>
        </li>          
        @endforeach
    </ul>
    {{$tratamientos->links()}}
@endsection


    
   