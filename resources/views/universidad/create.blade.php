Crear Universidad

<form action="{{ url('/universidad') }}" method="post">
    @csrf
    @include('universidad.form', ['modo'=>'Crear'])
</form>