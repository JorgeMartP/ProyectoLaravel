@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Crear Contrato</h1>

    <form action="{{ route('contratos.store') }}" method="POST">
        @csrf
        <div class="form-group">
        <label for="idContrato">ID Contrato:</label>
        <input type="text" id="idContrato" name="idContrato" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="tipoContrato">Tipo Contrato:</label>
        <input type="text" id="tipoContrato" name="tipoContrato" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="salario">Salario:</label>
        <input type="number" step="0.01" id="salario" name="salario" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="fechaInicio">Fecha Inicio:</label>
        <input type="date" id="fechaInicio" name="fechaInicio" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="fechaFin">Fecha Fin:</label>
        <input type="date" id="fechaFin" name="fechaFin" class="form-control">
        </div>
        <div class="form-group">
        <label for="Cargo">Cargo:</label>
        <input type="text" id="Cargo" name="Cargo" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="nivelRiesgo">Nivel Riesgo:</label>
        <input type="text" id="nivelRiesgo" name="nivelRiesgo" class="form-control" required>
        </div>

        <button type="submit" class="btn">Crear Contrato</button>
    </form>

    <a href="{{ route('contratos.index') }}" class="btn-create">Volver a la lista</a>

</div>

@endsection