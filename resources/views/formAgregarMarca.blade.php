@extends('layout.plantilla')

@section('title', 'Admin de Marcas')
@section('h1', 'Alta de Marcas')

@section('main')

    <div class="alert bg-light py-3">
        <form action="/agregarMarca" method="post">
            @csrf
            Marca:
            <br>
            <input type="text" name="mkNombre" class="form-control">
           @error('mkNombre') {{$message}} @enderror
            <br>
            <button class="btn btn-dark">Agregar Marca</button>

        </form>

    </div>


@endsection
