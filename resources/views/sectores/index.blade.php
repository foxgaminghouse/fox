@extends('layouts.plantilla')

@section('title', 'Sectores')

@section('content')
    <h1>Bienvenido a la pagina sectores</h1>
    <a href="{{route('sectores.create')}}">Crear sectore</a>
    <ul>
        @foreach ($sectores as $sectore)
            <li>
                <a href="{{route('sectores.show', $sectore)}}">{{$sectore->name}}</a>
            </li>
            
        @endforeach
    </ul>

    {{$sectores->links()}}

@endsection