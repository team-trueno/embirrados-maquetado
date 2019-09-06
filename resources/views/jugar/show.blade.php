@extends('layouts.main')

@section('title')
Jugar!
@endsection

@section('content')
<div class="card mx-auto" style="width: 25rem;">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
        <h5 class="card-title">Nivel 3</h5>
        <p class="card-text">Esto es una regunta?</p>
    </div>
    <ul class="list-group list-group-flush">
        <button><li class="btn btn-warning list-group-item">Sí</li></button>
        <button><li class="btn btn-warning list-group-item">No</li></button>
        <button><li class="btn btn-warning list-group-item">No sé</li></button>
        <button><li class="btn btn-warning list-group-item">Puede repetir?</li></button>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Siguiente pregunta</a>
    </div>
</div>
@endsection
