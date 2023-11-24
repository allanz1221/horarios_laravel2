<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Docente;
use App\Models\Salone;

/**
 * Class HorarioController
 * @package App\Http\Controllers
 */
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::paginate();

        return view('horario.index', compact('horarios'))
            ->with('i', (request()->input('page', 1) - 1) * $horarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia = Materia::all(['id', 'nombre', 'generacion_id'])
        ->map(function ($item) {
            return [
                'id' => $item->id,
                'nombre' => "{$item->nombre} - {$item->generacione->nombre}  - {$item->generacione->Semestre->pe->nombre}" // Puedes ajustar según tus necesidades
            ];
        })
        ->pluck('nombre', 'id');
        $docente = Docente::pluck('nombre','id');
        $salon = Salone::pluck('nombre','id');
        $horario = new Horario();
        $dia = [
            'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'
        ];
        $diasAsociativos = array_combine($dia, $dia);

        return view('horario.create', compact('horario','materia','docente','salon','diasAsociativos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Horario::$rules);

        $horario = Horario::create($request->all());

        if ($this->hasCollision($request)) {
            return "Colision";
            return redirect()->back()->withInput()->withErrors(['message' => '¡Colisión de horarios!']);
        }
        
        return redirect()->route('horarios.index')
            ->with('success', 'Horario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = Horario::find($id);

        return view('horario.show', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::find($id);
        $materia = Materia::all(['id', 'nombre', 'generacion_id'])
        ->map(function ($item) {
            return [
                'id' => $item->id,
                'nombre' => "{$item->nombre} - {$item->generacion_id}" // Puedes ajustar según tus necesidades
            ];
        })
        ->pluck('nombre', 'id');
        $docente = Docente::pluck('nombre','id');
        $salon = Salone::pluck('nombre','id');
        $dia = [
            'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'
        ];
        $diasAsociativos = array_combine($dia, $dia);

        return view('horario.edit', compact('horario','materia','docente','salon','diasAsociativos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Horario $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        request()->validate(Horario::$rules);

        if ($this->hasCollision($request)) {
            return "Colision";
            return redirect()->back()->withInput()->withErrors(['message' => '¡Colisión de horarios!']);
        }

        $horario->update($request->all());
        return redirect()->route('horarios.index')
            ->with('success', 'Horario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horario = Horario::find($id)->delete();

        return redirect()->route('horarios.index')
            ->with('success', 'Horario deleted successfully');
    }

    private function hasCollision(Request $request)
    {
        $start_time = $request->input('hora_inicio');
        $classroom_id = $request->input('salon_id');
        $docente_id = $request->input('docente_id');

        // Verificar colisiones en la base de datos
        $collision = Horario::where(function ($query) use ($start_time, $docente_id, $classroom_id) {
            $query->where('hora_inicio', '=', $start_time)
                ->where('docente_id', '=', $docente_id)
                ->where(function ($subquery) use ($classroom_id) {
                    // Excluir la misma aula y también asegurarse de que el aula no sea "PLA"
                    $subquery->where('salon_id', '<>', $classroom_id)
                        ->orWhere('salon_id', '10');
                });
        })->exists();

        return $collision;
    }

    
}
