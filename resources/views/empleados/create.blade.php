@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Empleado</h1>


    <form action="{{ route('empleado.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="identificacion">Identificación:</label>
            <input type="text" name="identificacion" class="form-control" value="{{ old('identificacion') }}" required>
        </div>
        <div class="form-group">
            <label for="primerNombre">Primer Nombre:</label>
            <input type="text" name="primerNombre" class="form-control" value="{{ old('primerNombre') }}" required>
        </div>
        <div class="form-group">
            <label for="primerNombre">Segundo Nombre:</label>
            <input type="text" name="segundoNombre" class="form-control" value="{{ old('segundoNombre') }}" required>
        </div>
        <div class="form-group">
            <label for="primerApellido">Primer Apellido:</label>
            <input type="text" name="primerApellido" class="form-control" value="{{ old('primerApellido') }}" required>
        </div>
        <div class="form-group">
            <label for="primerApellido">Segundo Apellido:</label>
            <input type="text" name="segundoApellido" class="form-control" value="{{ old('segundoApellido') }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" class="form-control" value="{{ old('correo') }}" required>
        </div>
        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <input type="text" name="departamento" class="form-control" value="{{ old('departamento') }}" required>
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" class="form-control" value="{{ old('ciudad') }}" required>
        </div>
        <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}" required>
        </div>
        <div class="form-group">
            <label for="banco">Banco:</label>
            <input type="text" name="banco" class="form-control" value="{{ old('banco') }}" required>
        </div>
        <div class="form-group">
            <label for="numCuenta">N° Cuenta:</label>
            <input type="number" name="numCuenta" class="form-control" value="{{ old('numCuenta') }}" required>
        </div>
        <div class="form-group">
            <label for="Nit">Nit:</label>
            <input type="text" name="nit" class="form-control" value="{{ old('nit') }}" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" name="estado" class="form-control" value="Activo" required >
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    <a href="{{ route('empleado.index') }}" class="btn-create">Volver a la lista</a>
</div>
</div>
@endsection