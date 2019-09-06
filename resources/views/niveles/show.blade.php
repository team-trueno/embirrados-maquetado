@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><h3>Nivel "{{ $nivele->nombre }}"</h3></div>
                <div class="card-body">
                    <p><b><u>Nombre:</u></b> {{ $nivele->nombre }} </p>
                    <p><b><u>Puntos a superar:</u></b> {{ $nivele->puntos_a_superar }} </p>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <a href="{{ route('niveles.index') }}" class="btn btn-dark">Atrás</a>
            </div>
            <br>
            <div class="col-md-8 offset-md-4">
                <a class="btn btn-outline-warning btn-xs" href="{{ route('niveles.edit', $nivele->id) }}">Editar</a>
            </div>
        </div>
    </div>
</div>
@endsection