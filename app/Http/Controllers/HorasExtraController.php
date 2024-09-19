<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HorasExtra;

class HorasExtraController extends Controller
{
     // Mostrar el formulario para crear una nueva entrada de horas extra
     public function create()
     {
         return view('horas_extras.create');
     }
 
     // Almacenar una nueva entrada de horas extra en la base de datos
     public function store(Request $request)
     {
         $request->validate([
             'cantidadHoras' => 'required|integer',
             'total' => 'required|numeric',
             'tipoHorasExtra' => 'required|max:255',
         ]);
 
         HorasExtra::create($request->all());
 
         return redirect()->route('horas_extras.index')->with('success', 'Horas extra creadas exitosamente.');
     }
 
     // Listar todas las horas extra
     public function index()
     {
         $horasExtras = HorasExtra::all();
         return view('horas_extras.index', compact('horasExtras'));
     }
}
