<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function create()
    {
        return view('empleados.create');
    }

    // Guardar un nuevo empleado en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'identificacion' => 'required|unique:empleados,identificacion',
            'primerNombre' => 'required|max:255',
            'primerApellido' => 'required|max:255',
            'telefono' => 'required|max:15',
            'correo' => 'required|email',
            'departamento' => 'required|max:255',
            'ciudad' => 'required|max:255',
            'direccion' => 'required|max:255',
            'banco' => 'required|max:255',
            'numCuenta' => 'required|max:255',
            'estado' => 'required|max:255',
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleado.index')->with('success', 'Empleado creado exitosamente.');
    }

    // Mostrar todos los empleados
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }
}
