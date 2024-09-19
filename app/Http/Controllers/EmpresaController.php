<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function create()
    {
        return view('empresa.create');
    }

    // Guardar una nueva empresa en la base de datos
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nit' => 'required|unique:empresas,nit|max:255',
            'nombreEmpresa' => 'required|max:255',
            'tipoContribuyente' => 'required|max:255',
            'digitoVerificacion' => 'required|max:2',
            'telefono' => 'nullable|max:15',
            'email' => 'nullable|email|max:255',
            'direccion' => 'nullable|max:255',
            'rut' => 'nullable|max:255',
            'logo' => 'nullable|image|max:2048',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        Empresa::create(array_merge($validated, ['logo' => $logoPath]));

        return redirect()->route('empresa.index')->with('success', 'Empresa creada exitosamente.');
    }
    public function index()
    {
        $empresas = Empresa::all();

        return view('empresa.index', compact('empresas'));
    }
}
