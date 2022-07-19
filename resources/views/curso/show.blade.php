@extends('layouts.plantilla')
@section('title','curso ' . $curso->name)  
@section('content')
    <h1>bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
@endsection
