@extends('layouts.plantilla')

@section('title','Agregar nuevo tratamiento')

@section('content')
    <h1>Agregue un nuevo tratamiento</h1>
    <a href="">Agregar</a>
    <form action="">
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
            <br>
        </label>
        <label>
            Duración:
            <br>
            <input type="duracion">
            <br>
        </label>
        <label>
            Costo:
            <br>
            <input type="costo">
            <br>
        </label>
    </form>
@endsection

