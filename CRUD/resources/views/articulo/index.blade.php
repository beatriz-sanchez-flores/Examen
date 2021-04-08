@extends('layouts.plantillabase')

@section('contenido')
<a href="articulos/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>            
            <th>Titulo</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
            <tr>
                <td>{{ $articulo->id }}</td>
                <td>{{ $articulo->nombre }}</td>
                <td>{{ $articulo->apellido }}</td>
                <td>{{ $articulo->direccion}}</td>
                <td>{{ $articulo->titulo }}</td>
                <td>
                    <form action="{{ route('articulos.destroy', $articulo->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>\
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection