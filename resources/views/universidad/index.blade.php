LISTA UNIVERSIDADES

@if (Session::has('mensaje'))

{{Session::get('mensaje')}}
    
@endif
<br>
<a href="{{ url('universidad/create') }}">Registrar nueva Universidad</a>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Telefono</th>
            <th>Cantidad salones</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($universidads as $universidad )
        <tr>
            <td></td>
            <td> {{$universidad->nombre}} </td>
            <td> {{$universidad->direccion}} </td>
            <td> {{$universidad->email}} </td>
            <td> {{$universidad->fecha}} </td>
            <td> {{$universidad->telefono}} </td>
            <td> {{$universidad->cant_salones}} </td>
            <td> 
                <a href=" {{url('universidad/'.$universidad->id.'/edit')}} ">
                    Editar
                </a> |
            
                <form action=" {{ url('universidad/'.$universidad->id) }} " method="post">
                
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                    
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>