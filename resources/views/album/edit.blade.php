@extends('layouts.plantillabase');

@section('contenido')
<h2>Edirtar regitro</h2>

<form action="/albums/{{$albums->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label"> Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{album->codigo}}"> 
</div>
<div class="mb-3">
        <label for="" class="form-label"> Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{album->nombre}}"> 
</div> 
<div class="mb-3">
        <label for="" class="form-label"> Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{album->descripcion}}"> 
</div>     
<div class="mb-3">
        <label for="" class="form-label"> Cantidad</label>
        <input id="cantidad" name="catidad" type="number" class="form-control" value="{{album->cantidad}}"> 
</div> 
<div class="mb-3">
        <label for="" class="form-label"> Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control"> 
</div> 
<a href="/albums" class="btn btn-secondary" tabindex="6">Cancelar</a>
<button type="sumit" class="btn btn-primary" tabindex="5">Guardar</button>

</form>
@endsection