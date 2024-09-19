<!-- resources/views/empresa/index.blade.php -->
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">


    <h1>Lista de Empresas</h1>

    <a href="{{ route('empresa.create') }}" class="btn-create">Crear Nueva Empresa</a>
    <table class="centered-table">
        <thead>
            <tr>
                <th>NIT</th>
                <th>Tipo Contribuyente</th>
                <th>Nombre Empresa</th>
                <!-- Agrega otras columnas según sea necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->nit }}</td>
                    <td>{{ $empresa->tipoContribuyente }}</td>
                    <td>{{ $empresa->nombreEmpresa }}</td>
                    <!-- Agrega otras columnas según sea necesario -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection