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
<label for="NombreProducto"> Codigo </label>
<input type="text" name = "Codigo">
<br>
<label for="NombreProducto"> Nombre </label>
<input type="text" name = "NombreProducto">
<br>
<label for="Precio"> Precio </label>
<input type="text" name = "Precio">
<br>
<label for="Cantidad"> Cantidad </label>
<input type="text" name = "Cantidad">
<br>
<label for="Imagen"> Imagen producto </label>
<input type="file" name = "ImagenProducto">
<br>
<input type="submit" value = "Enviar"> <br>

</form>

<a href="{{ url('ferreteria/') }}">Regresar</a>

</div>
@endsection