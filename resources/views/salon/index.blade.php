LISTA SALONES
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($salons as $salon )
        <tr>
            <td></td>
            <td> {{$salon->categoria}} </td>
            <td> {{$salon->tipo}} </td>
            <td> 
                <a href=" {{url('salon/'.$salon->id.'/edit')}} ">
                    Editar
                </a> |
            
                <form action=" {{ url('salon/'.$salon->id) }} " method="post">
                
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                    
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>