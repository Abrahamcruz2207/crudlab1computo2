@extends('layouts.plantillabase');

@section('contenido')
<h2>Crear regitro</h2>

<form action="/albums" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1"> 
</div>
<div class="mb-3">
        <label for="" class="form-label"> Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2"> 
</div> 
<div class="mb-3">
        <label for="" class="form-label"> Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3"> 
</div>     
<div class="mb-3">
        <label for="" class="form-label"> Cantidad</label>
        <input id="cantidad" name="catidad" type="number" class="form-control" tabindex="3"> 
</div> 
<div class="mb-3">
        <label for="" class="form-label"> Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3"> 
</div> 
<a href="/albums" class="btn btn-secondary" tabindex="6">Cancelar</a>
<button type="sumit" class="btn btn-primary" tabindex="5">Guardar</button>

</form>

@endsection