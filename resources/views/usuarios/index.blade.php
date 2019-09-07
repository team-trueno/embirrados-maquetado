@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="float-left">Listado de Usuarios</h3>
                </div>

                <div class="card-body">
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead class="thead-dark">
                            <th>Nombre</th>
                            <th>Avatar</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Usuario</th>
                            <th>Fecha Nacimiento</th>
                            <th>País</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @forelse ($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->name}}</td>
                                    <td><img src="/storage/{{$usuario->avatar}}" alt=""></td>
                                    <td>{{$usuario->apellido}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>{{$usuario->usuario}}</td>
                                    <td>{{$usuario->fecha_nac}}</td>
                                    <td>{{$usuario->pais}}</td>
                                    <td>
                                        <a href="{{ route('usuarios.show', $usuario->id) }}"><u><i>Ver</i></u></a>
                                        <a>/</a>
                                        <a href="{{ route('usuarios.edit', $usuario->id) }}"><u><i>Editar</i></u></a>
                                        <a>/</a>
                                        <form id="form_delete" action="{{ route('usuarios.destroy', $usuario->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')

                                        <a href="{{ route('usuarios.destroy', $usuario->id)}}" onclick="document.getElementById('form_delete').submit();; return false;"><u><i>Eliminar</i></u></a>
                                    </td>                     
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12">No hay registros cargados.</td>
                                </tr>
                            @endforelse
                        </tbody>    
                    </table>
                        {{ $usuarios->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection