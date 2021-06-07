@extends('layouts.plantilla')

@section('title','Agregar nuevo tratamiento')

@section('content')
    <h1>Agregue un nuevo tratamiento</h1>
    <form action="{{route('tratamientos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
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
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
                <small>*{{$message}}</small>
            <br>    
        @enderror
        <label>
            <br>
            Costo:
            <br>
            <input type="text" name="costo" value="{{old('costo')}}">
        </label>
        @error('costo')
            <br>
                <small>*{{$message}}</small>
            <br>    
        @enderror
        <br>
        <button type="submit">registrar tratamiento</button>
        <a href="{{route('principal.tratamiento')}}">Volver a Tratamientos</a>
    </form>
@endsection

