@extends('layouts.plantilla')

@section('title', 'Sectore ' . $sectore->name)

@section('content')
    <h1>Bienvenido al sectore: {{$sectore->name}}</h1>
    <a href="{{route('sectores.index')}}">Volver a sectores</a>
    <br>
    <a href="{{route('sectores.edit', $sectore)}}">Editar sectore</a>
    <p><strong>Categoria: </strong>{{$sectore->categoria}}</p>
    <p>{{$sectore->descripcion}}</p>

    <form action="{{route('sectores.destroy', $sectore)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection