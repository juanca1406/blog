@extends('layouts.plantilla')
@section('title','curso create')

@section('content')
    <h1>esta pagina podras crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>{{--Salto de linea--}}
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>{{--Salto de linea--}}
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection