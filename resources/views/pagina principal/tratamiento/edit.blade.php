@extends('layouts.plantilla')

@section('title','Editar Tratamiento')

@section('content')
    <h1>Editar tratamiento</h1>
    <form action="{{route('tratamientos.update',$tratamiento)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre',$tratamiento->nombre)}}">
        </label>
        @error('nombre')
            <br>
                <small>*{{$message}}</small>
            <br>    
        @enderror
        <label>
            <br>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion',$tratamiento->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
                <small>*{{$message}}</small>
            <br>   
        <label>
            <br>
            Costo:
            <br>
            <input type="text" name="costo" value="{{old('costo',$tratamiento->costo)}}">
        </label>
        @error('costo')
        <br>
            <small>*{{$message}}</small>
        <br>    
         @enderror
        <button type="submit">Actualizar tratamiento</button>
    </form>
@endsection