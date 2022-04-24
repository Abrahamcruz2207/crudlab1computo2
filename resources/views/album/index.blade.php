@extends('layouts.plantillabase');

@section('contenido')
<a href="albums/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($albums as $album)
            <tr>
                <td>{{$album->id}}</td>
                <td>{{$album->codigo}}</td>
                <td>{{$album->nombre}}</td>
                <td>{{$album->descripcion}}</td>
                <td>{{$album->precio}}</td>
                <td>
                    <a class="btn btn-info">Editar</a>
                    <button class="btn btn-info">Borrar</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
