@extends('layouts.app')

@section('content')

<div class="container">
<h1>Lista de Horas Extra</h1>

<a href="{{ route('horas_extras.create') }}" class="btn-create">Crear Nueva Hora Extra</a>

<table class="centered-table">
    <thead>
        <tr>
            <th>ID Horas Extra</th>
            <th>Cantidad de Horas</th>
            <th>Total</th>
            <th>Tipo de Horas Extra</th>
        </tr>
    </thead>
    <tbody>
        @foreach($horasExtras as $horasExtra)
            <tr>
                <td>{{ $horasExtra->idHorasExtra }}</td>
                <td>{{ $horasExtra->cantidadHoras }}</td>
                <td>{{ $horasExtra->total }}</td>
                <td>{{ $horasExtra->tipoHorasExtra }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection