<?php

namespace App\Http\Controllers;

use App\Models\Evolucione;
use Illuminate\Http\Request;

/**
 * Class EvolucioneController
 * @package App\Http\Controllers
 */
class EvolucioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evoluciones = Evolucione::paginate(10);

        return view('evolucione.index', compact('evoluciones'))
            ->with('i', (request()->input('page', 1) - 1) * $evoluciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function crearEvolucion($id)
    {
        $evolucione = new Evolucione(['paciente_id' => ($id)]);
        return view('evolucione.create', compact('evolucione'));
    }

    public function create()
    {
        $evolucione = new Evolucione();
        return view('evolucione.create', compact('evolucione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Evolucione::$rules);

        $evolucione = Evolucione::create($request->all());

        return redirect()->route('evoluciones.index')
            ->with('success', 'Evolucione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evolucione = Evolucione::find($id);

        return view('evolucione.show', compact('evolucione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evolucione = Evolucione::find($id);

        return view('evolucione.edit', compact('evolucione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evolucione $evolucione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evolucione $evolucione)
    {
        request()->validate(Evolucione::$rules);

        $evolucione->update($request->all());

        return redirect()->route('evoluciones.index')
            ->with('success', 'Evolucione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evolucione = Evolucione::find($id)->delete();

        return redirect()->route('evoluciones.index')
            ->with('success', 'Evolucione deleted successfully');
    }
}
