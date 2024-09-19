@extends('layouts.app')

@section('content')

<div class="container">
<h1>Crear Horas Extra</h1>

<form action="{{ route('horas_extras.store') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="cantidadHoras">Cantidad de Horas:</label>
    <input type="number" id="cantidadHoras" name="cantidadHoras" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="total">Total:</label>
    <input type="number" step="0.01" id="total" name="total" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="tipoHorasExtra">Tipo de Horas Extra:</label>
    <input type="text" id="tipoHorasExtra" name="tipoHorasExtra" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Crear Horas Extra</button>
</form>

<a href="{{ route('horas_extras.index') }}" class="btn-create">Volver a la lista</a>
</div>

@endsection