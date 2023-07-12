Editar Universidades

<form action="{{ url('/universidad/'.$universidad->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('universidad.form', ['modo'=>'Editar'])

</form>
