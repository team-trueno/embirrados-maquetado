@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="float-left">Nuevo nivel</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('niveles.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Nivel') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text"
                                    class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                    value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="puntos_a_superar"
                                class="col-md-4 col-form-label text-md-right">{{ __('Puntos a superar') }}</label>

                            <div class="col-md-6">
                                <input id="puntos_a_superar" type="text"
                                    class="form-control @error('puntos_a_superar') is-invalid @enderror" name="puntos_a_superar"
                                    value="{{ old('puntos_a_superar') }}" required autocomplete="puntos_a_superar" autofocus>

                                @error('puntos_a_superar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                        {{ __('Ingresar') }}
                                </button>

                                <a href="/" class="btn btn-dark">Volver a inicio</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection