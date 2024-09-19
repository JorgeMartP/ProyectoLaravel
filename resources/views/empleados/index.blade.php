@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Empleados</h1>

    <a href="{{ route('empleado.create') }}" class="btn-create">Crear Nuevo Empleado</a>

    <table class="centered-table">
        <thead>
            <tr>
                <th>Identificación</th>
                <th>Nombre Completo</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Departamento</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->identificacion }}</td>
                    <td>{{ $empleado->primerNombre }} {{ $empleado->primerApellido }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>{{ $empleado->correo }}</td>
                    <td>{{ $empleado->departamento }}</td>
                    <td>{{ $empleado->ciudad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection