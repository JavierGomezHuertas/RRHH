<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{

    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request){
        // Valida los datos del formulario
        $request->validate([
        'nombres' => ['required', 'regex:/^[a-zA-ZñÑçÇ\s]+$/', 'max:108'],
        'apellidos' => ['required', 'regex:/^[a-zA-ZñÑçÇ\s]+$/', 'max:40'],
        'edad' => 'required|integer',
        'fecha_ingreso' => 'required|date',
        'comentarios' => 'nullable',
    ]);
        // Crea un nuevo empleado en la base de datos
        Empleado::create($request->all());
        
        // Redirecciona a la vista principal
        return redirect()->route('empleados.index');
    }

    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => ['required', 'regex:/^[a-zA-ZñÑçÇ\s]+$/', 'max:255'], 
            'apellidos' => ['required', 'regex:/^[a-zA-ZñÑçÇ\s]+$/', 'max:255'],
            'edad' => 'required|integer',
            'fecha_ingreso' => 'required|date',
            'comentarios' => 'nullable',
        ]);

        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());

        return redirect()->route('empleados.index');
    }

    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();

        return redirect()->route('empleados.index');
    }

}
