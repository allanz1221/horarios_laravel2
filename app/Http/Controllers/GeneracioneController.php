<?php

namespace App\Http\Controllers;

use App\Models\Generacione;
use Illuminate\Http\Request;
use App\Models\Semestre;

/**
 * Class GeneracioneController
 * @package App\Http\Controllers
 */
class GeneracioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generaciones = Generacione::paginate();

        return view('generacione.index', compact('generaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $generaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semestre = Semestre::all(['id', 'nombre', 'pe_id'])
        ->map(function ($item) {
            return [
                'id' => $item->id,
                'nombre' => "{$item->nombre} - {$item->pe->nombre}" // Puedes ajustar según tus necesidades
            ];
        })
        ->pluck('nombre', 'id');
        $generacione = new Generacione();
        #$semestre = Semestre::pluck('nombre','id');
        return view('generacione.create', compact('generacione','semestre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Generacione::$rules);

        $generacione = Generacione::create($request->all());

        return redirect()->route('generaciones.index')
            ->with('success', 'Generacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $generacione = Generacione::find($id);

        return view('generacione.show', compact('generacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generacione = Generacione::find($id);
        $semestre = Semestre::all(['id', 'nombre', 'pe_id'])
        ->map(function ($item) {
            return [
                'id' => $item->id,
                'nombre' => "{$item->nombre} - {$item->pe->nombre}" // Puedes ajustar según tus necesidades
            ];
        })
        ->pluck('nombre', 'id');
        
        return view('generacione.edit', compact('generacione','semestre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Generacione $generacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generacione $generacione)
    {
        request()->validate(Generacione::$rules);

        $generacione->update($request->all());

        return redirect()->route('generaciones.index')
            ->with('success', 'Generacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $generacione = Generacione::find($id)->delete();

        return redirect()->route('generaciones.index')
            ->with('success', 'Generacione deleted successfully');
    }
}
