@extends('layouts.plantilla')
@section('title','home') 
@section('content')
    <h1>Bienvenido PHP</h1>
    <a href="{{route('cursos.index')}}">Entra a curso</a>
@endsection
