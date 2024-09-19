@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear Empresa</h1>
    <form action="{{ route('empresa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div  class="form-group">
            <label for="nit">NIT:</label>
            <input type="text" name="nit" id="nit" value="{{ old('nit') }}" class="form-control">
        </div>
        
        <div  class="form-group">
            <label for="tipoContribuyente">Tipo Contribuyente:</label>
            <input type="text" name="tipoContribuyente" id="tipoContribuyente" value="{{ old('tipoContribuyente') }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="digitoVerificacion">Dígito de Verificación:</label>
            <input type="text" name="digitoVerificacion" id="digitoVerificacion" value="{{ old('digitoVerificacion') }}" class="form-control">
        </div>
        
        <div  class="form-group">
            <label for="nombreEmpresa">Nombre Empresa:</label>
            <input type="text" name="nombreEmpresa" id="nombreEmpresa" value="{{ old('nombreEmpresa') }}" class="form-control">
        </div>

        <div  class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" class="form-control">
        </div>

        <div  class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="rut">RUT:</label>
            <input type="text" name="rut" id="rut" value="{{ old('rut') }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="logo">Logo:</label>
            <input type="file" name="logo" id="logo" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Guardar Empresa</button>
        </div>
    </form>
    <a href="{{ route('empresa.index') }}" class="btn-create">Volver a la lista</a>

</div>


@endsection
