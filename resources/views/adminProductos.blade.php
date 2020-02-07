@extends('layout/plantilla')

    @section('title', 'Panel de administración de productos')


    @section('main')

        @section('h1', 'Panel de administración de productos')

{{--  muestreo si NO hay contenidos --}}
    @if ( count( $productos ) == 0 )
        <div class="alert alert-warning">No se han encontrado registros</div>
    @else
{{--  muestreo si hay contenidos --}}
        {{-- mensajes de ok --}}
        @if( session()->has('mensaje') )
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
        @endif

        <table class="table table-bordered table-stripped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre producto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoría</th>
                    <th>Presentacion</th>
                    <th>Stock</th>
                    <th>Imagen</th>
                    <th colspan="2" class="text-center">
                        <a href="/formAgregarProducto" class="btn btn-outline-light px-4">
                            <i class="far fa-plus-square fa-lg mr-2"></i>
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach( $productos as $producto )
                <tr>
                    <td>{{ $producto->prdNombre }}</td>
                    <td>{{ $producto->prdPrecio }}</td>
                   <td>{{ $producto->getMarca->mkNombre }} {{-- $producto->idMarca --}}</td>
                   <td>{{ $producto->getCategoria->catNombre }}{{-- $producto->idCategoria --}}</td>
                    <td>{{ $producto->prdPresentacion }}</td>
                    <td>{{ $producto->prdStock }}</td>
                    <td>
                        <img src="images/productos/{{ $producto->prdImagen }}" class="img-thumbnail">
                    </td>
                    <td>
                        <a href="/formEditarProducto/{{ $producto->idProducto }}" class="btn btn-outline-secondary px-4">
                            <i class="far fa-edit fa-lg mr-2"></i>
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="/formEliminarProducto/{{ $producto->idProducto }}" class="btn btn-outline-secondary px-4">
                            <i class="far fa-minus-square fa-lg mr-2"></i>
                            Eliminar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $productos->links() }}

    @endif

    @endsection

