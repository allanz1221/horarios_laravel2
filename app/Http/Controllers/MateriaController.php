<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use App\Models\Generacione;
use App\Models\Docente;
use App\Models\Horario;
/**
 * Class MateriaController
 * @package App\Http\Controllers
 */
class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::paginate();

        return view('materia.index', compact('materias'))
            ->with('i', (request()->input('page', 1) - 1) * $materias->perPage());
    }

    public function cuenta($id)
    {
        $numeroDeRegistros = Horario::where('materia_id', $id)->count();
        return $numeroDeRegistros;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia = new Materia();
        $generacion = Generacione::all(['id', 'nombre', 'semestre_id'])
        ->map(function ($item) {
            return [
                'id' => $item->id,
                'nombre' => "{$item->nombre} - {$item->Semestre->nombre}  - {$item->Semestre->pe->nombre}" // Puedes ajustar según tus necesidades
            ];
        })
        ->pluck('nombre', 'id');
        $docente = Docente::orderBy('nombre', 'asc')
        ->get(['id', 'nombre'])
        ->map(function ($item) {
            return [
                'id' => $item->id,
                'nombre' => "{$item->nombre}"
            ];
        })
        ->pluck('nombre', 'id');
        return view('materia.create', compact('materia','docente','generacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Materia::$rules);

        $materia = Materia::create($request->all());

        return redirect()->route('materias.index')
            ->with('success', 'Materia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materia = Materia::find($id);
        $horarios = Horario::all();
        return view('materia.show', compact('materia','horarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Materia::find($id);
        $generacion = Generacione::all(['id', 'nombre', 'semestre_id'])
        ->map(function ($item) {
            return [
                'id' => $item->id,
                'nombre' => "{$item->nombre} - {$item->Semestre->nombre}  - {$item->Semestre->pe->nombre}" // Puedes ajustar según tus necesidades
            ];
        })
        ->pluck('nombre', 'id');
        $docente = Docente::orderBy('nombre', 'asc')
        ->get(['id', 'nombre'])
        ->map(function ($item) {
            return [
                'id' => $item->id,
                'nombre' => "{$item->nombre}"
            ];
        })
        ->pluck('nombre', 'id');             
        return view('materia.edit', compact('materia','generacion','docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        request()->validate(Materia::$rules);

        $materia->update($request->all());

        return redirect()->route('materias.index')
            ->with('success', 'Materia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materia = Materia::find($id)->delete();

        return redirect()->route('materias.index')
            ->with('success', 'Materia deleted successfully');
    }
}
