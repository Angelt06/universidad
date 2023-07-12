CREACION SALONES

<form action="{{ url('/salon') }}" method="post">
    @csrf
    @include('salon.form')
</form>