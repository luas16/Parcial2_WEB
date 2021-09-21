@extends('layouts.app')

@section('content')
<div class="container">
formulario de creacion de Productos

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif
<h1>Ingresar Producto</h1>
<form action="{{url('/ferreteria')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
<label for="NombreProducto"> Codigo </label>
<input class="form-control" type="text" name = "Codigo">
<br>
</div>
<div class="form-group">
<label for="NombreProducto"> Nombre </label>
<input class="form-control"  type="text" name = "NombreProducto">
<br>
</div>
<div class="form-group">
<label for="Precio"> Precio </label>
<input class="form-control"  type="text" name = "Precio">
<br>
</div>
<div class="form-group">
<label for="Cantidad"> Cantidad </label>
<input class="form-control"  type="text" name = "Cantidad">
<br>
</div>

<div class="form-group">
<label for="Imagen"> Imagen producto </label><br>
<input type="file" name = "ImagenProducto">
<br>
</div>

<input  class="btn btn-success"  type="submit" value = "Ingresar">
<a class="btn btn-primary" href="{{ url('ferreteria/') }}">Regresar</a>
</form>



</div>
@endsection