<?php

namespace App\Http\Controllers;

use App\Models\Postquirurgico;
use Illuminate\Http\Request;

/**
 * Class PostquirurgicoController
 * @package App\Http\Controllers
 */
class PostquirurgicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postquirurgicos = Postquirurgico::paginate(10);

        return view('postquirurgico.index', compact('postquirurgicos'))
            ->with('i', (request()->input('page', 1) - 1) * $postquirurgicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function crearOperacion($id)
    {
        $postquirurgico = new Postquirurgico(['paciente_id' => ($id)]);
        return view('postquirurgico.create', compact('postquirurgico'));
    }


    public function create()
    {
        $postquirurgico = new Postquirurgico();
        return view('postquirurgico.create', compact('postquirurgico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Postquirurgico::$rules);

        $postquirurgico = Postquirurgico::create($request->all());

        return redirect()->route('postquirurgicos.index')
            ->with('success', 'Postquirurgico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postquirurgico = Postquirurgico::find($id);

        return view('postquirurgico.show', compact('postquirurgico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postquirurgico = Postquirurgico::find($id);

        return view('postquirurgico.edit', compact('postquirurgico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Postquirurgico $postquirurgico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postquirurgico $postquirurgico)
    {
        request()->validate(Postquirurgico::$rules);

        $postquirurgico->update($request->all());

        return redirect()->route('postquirurgicos.index')
            ->with('success', 'Postquirurgico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $postquirurgico = Postquirurgico::find($id)->delete();

        return redirect()->route('postquirurgicos.index')
            ->with('success', 'Postquirurgico deleted successfully');
    }
}
