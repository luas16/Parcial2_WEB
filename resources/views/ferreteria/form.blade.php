<label for="Nombre"> Nombre </label>
    <input type="text" name= "Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}">
    <br>
    <label for="ApellidoPaterno"> Apellido Paterno </label>
    <input type="text" name= "ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}">
    <br>
    <label for="ApellidoMaterno"> Apellido Materno </label>
    <input type="text" name= "ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}">
    <br>
    <label for="Correo"> Correo </label>
    <input type="text" name= "Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}">
    <br>
    <label for="Foto"> Foto </label>
    @if(isset($empleado->Foto))
    <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="100">
    @endif
    <input type="file" name= "Foto" value="">
    <br>
    <input type="submit" value="Guardar Empleado">
    <br>