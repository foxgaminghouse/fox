@extends('layouts.plantilla')

@section('title', 'Sectores edit')

@section('content')
    <h1>En esta pagina podras editar un sectore</h1>
    <form action="{{route('sectores.update', $sectore)}}" method="post">

        @csrf

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $sectore->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5" >{{old('descripcion', $sectore->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $sectore->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button tyoe="submit">Actualizar Formulario</button>
    </form>
@endsection