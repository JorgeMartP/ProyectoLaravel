<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;

class ContratoController extends Controller
{
    public function create()
    {
        return view('contratos.create');
    }

    // Almacenar un nuevo contrato en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'idContrato' => 'required|string|max:255|unique:contratos',
            'tipoContrato' => 'required|string|max:255',
            'salario' => 'required|numeric',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'nullable|date',
            'Cargo' => 'required|string|max:255',
            'nivelRiesgo' => 'required|string|max:255',
        ]);

        Contrato::create($request->all());

        return redirect()->route('contratos.index')->with('success', 'Contrato creado exitosamente.');
    }

    // Listar todos los contratos
    public function index()
    {
        $contratos = Contrato::all();
        return view('contratos.index', compact('contratos'));
    }
}
