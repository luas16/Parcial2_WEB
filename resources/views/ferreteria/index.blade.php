@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
lista de productos
<a href="{{ url('ferreteria/create') }}" class = "btn btn-danger">Ingresar nuevo Producto</a>
<br>
<br>
<table class="table table-bordered">
    <thead class= "thead-light">
        <tr>
            <th>Código del Producto</th>
            <th>Imagen</th>
            <th>Nombre Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $productos as $producto )
            <tr>
                <td>{{ $producto->Codigo}}</td>
                <td>
                <img src="{{ asset('storage').'/'.$producto->ImagenProducto }}" alt="" width="100">    
                </td>
                <td>{{ $producto->NombreProducto}}</td>
                <td>{{ $producto->Precio}}</td>
                <td>{{ $producto->Cantidad}}</td>
                <td> 
                 <a href="{{url('//'.$producto->id.'/edit') }}" class = "btn btn-info">
                    Editar
                </a>   
               
                <form action="{{ url('/ferreteria/'.$producto->id) }}" class="d-inline" method = "post">
                @csrf 
                {{ method_field('DELETE')}}
                    <input type="submit" value="Borrar" onclick="return confirm('¿Quieres borrar?')">
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>

    
</table>
</div>
@endsection