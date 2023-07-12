<label for="nombre">Nombre:</label>
<input type="text" name="nombre" value=" {{ isset($universidad->nombre) ? $universidad->nombre : ''  }} " id="nombre">
<br>
<label for="direccion">Dirección:</label>
<input type="text" name="direccion" 
value="  {{ isset($universidad->direccion) ? $universidad->direccion : ''  }} " id="direccion">
<br>
<label for="email">Email:</label>
<input type="email" name="email" value=" {{ isset($universidad->email) ? $universidad->email : ''  }} " id="email">
<br>
<label for="fecha">Fecha:</label>
<input type="date" name="fecha"
value="{{ isset($universidad->fecha) ? date('Y-m-d', strtotime($universidad->fecha)) : '' }}" id="fecha">
<br>
<label for="telefono">Teléfono:</label>
<input type="text" name="telefono" value="  {{ isset($universidad->telefono) ? $universidad->telefono : ''  }} " id="telefono">
<br>
<label for="cant_salones">Cantidad de salones:</label>
<input type="number" name="cant_salones" 
value="{{ isset($universidad->cant_salones) ? intval($universidad->cant_salones) : '' }}" id="cant_salones">
<br>
<input type="submit" value="{{ $modo }}">
<br>
<a href="{{ url('universidad') }}">Inicio</a>