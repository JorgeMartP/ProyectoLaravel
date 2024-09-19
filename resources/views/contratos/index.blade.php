@extends('layouts.app')

@section('content')

<div class="container">
<h1>Lista de Contratos</h1>

<a href="{{ route('contratos.create') }}" class="btn-create">Crear Nuevo Contrato</a>

<table class="centered-table">
    <thead>
        <tr>
            <th>ID Contrato</th>
            <th>Tipo Contrato</th>
            <th>Salario</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Cargo</th>
            <th>Nivel Riesgo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contratos as $contrato)
            <tr>
                <td>{{ $contrato->idContrato }}</td>
                <td>{{ $contrato->tipoContrato }}</td>
                <td>{{ $contrato->salario }}</td>
                <td>{{ $contrato->fechaInicioFormatted }}</td>
                <td>{{ $contrato->fechaFinFormatted }}</td>
                <td>{{ $contrato->Cargo }}</td>
                <td>{{ $contrato->nivelRiesgo }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection