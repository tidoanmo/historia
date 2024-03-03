<?php

namespace App\Http\Controllers;

use App\Models\Historia;
use App\Models\Paciente;
use Illuminate\Http\Request;

/**
 * Class HistoriaController
 * @package App\Http\Controllers
 */
class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historias = Historia::paginate(10);

        return view('historia.index', compact('historias'))
            ->with('i', (request()->input('page', 1) - 1) * $historias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function crearParaPaciente($id)
    {
        $historia = new Historia(['paciente_id' => ($id)]);
        return view('historia.create', compact('historia'));
    }

    public function create()
    {
        $historia = new Historia();
        return view('historia.create', compact('historia'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validamos los datos del formulario usando las reglas definidas en el modelo Historia
        $request->validate(Historia::$rules);
    
        // Verificamos si el paciente ya tiene una historia clínica asociada
        $paciente_id = $request->paciente_id;
        if (Historia::where('paciente_id', $paciente_id)->exists()) {
            // Si el paciente ya tiene una historia clínica, redirigimos de vuelta con un mensaje de error
            return redirect()->back()->with('error', 'Este paciente ya tiene una historia clínica.');
        }
    
        // Creamos una nueva instancia de Historia con los datos del formulario
        $historia = Historia::create($request->all());
    
        // Deshabilitamos el formulario después de que se haya creado una historia
        // Puedes hacer esto estableciendo una variable de sesión que indique que se ha creado una historia para este paciente
        // Luego, en tu vista del formulario, puedes usar esta variable de sesión para determinar si el formulario debe estar habilitado o no
    
        // Redirigimos de vuelta a la vista index de historias con un mensaje de éxito
        return redirect()->route('historias.index')->with('success', 'Historia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historia = Historia::find($id);

        return view('historia.show', compact('historia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historia = Historia::find($id);

        return view('historia.edit', compact('historia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Historia $historia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historia $historia)
    {
        request()->validate(Historia::$rules);

        $historia->update($request->all());

        return redirect()->route('historias.index')
            ->with('success', 'Historia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historia = Historia::find($id)->delete();

        return redirect()->route('historias.index')
            ->with('success', 'Historia deleted successfully');
    }
}
