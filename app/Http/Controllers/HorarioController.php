<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Salone;
use App\Models\Generacione;
use Illuminate\Support\Facades\DB;

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

    public function generaciones()
    {
        $materias = Materia::all();
        $generaciones = Generacione::paginate();
        $horarios = Horario::paginate();
        return view('horario.generaciones', compact('horarios','generaciones','materias'))
            ->with('i', (request()->input('page', 1) - 1) * $horarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = Materia::all();
        $salon = Salone::pluck('nombre','id');
        $horario = new Horario();
        $dia = [
            'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'
        ];
        $diasAsociativos = array_combine($dia, $dia);

        return view('horario.create', compact('horario','materias','salon','diasAsociativos'));
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


        if ($this->hasCollision($request)) {
            return redirect()->back()->withInput()->withErrors(['message' => '¡Colisión de horarios!']);
        }
        $horario = Horario::create($request->all());

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
        $materias = Materia::all();
        $salon = Salone::pluck('nombre','id');
        $dia = [
            'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'
        ];
        $diasAsociativos = array_combine($dia, $dia);

        return view('horario.edit', compact('horario','materias','salon','diasAsociativos'));
    }
    public function obtenerHorarios($materia_id)
    {
        // Aquí puedes utilizar el $materia_id para obtener la información que necesitas
        $horarios = Horario::where('materia_id', $materia_id)->get();

        // Devolver la información en formato JSON
        return response()->json(['horarios' => $horarios]);
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
        $hora = $request->input('hora_inicio');
        $salon = $request->input('salon_id');
        $materia = $request->input('materia_id');
        $docente = Materia::find($materia)->get('id');
        $dia = $request->input('dia');

        //Checa disponibilidad de salon
        // $collision1 = Horario::where('hora_inicio', '=', $hora)->where('salon_id', '=', $salon)->where('dia', '=', $dia)->exists();
        //Checa disponibilidad de docente
/*         $collision2 = Horario::where('dia', '=', $dia)
        ->where('hora_inicio', '=', $hora)
        ->whereHas('materia', function ($query) use ($docente) {
            $query->where('docente_id', '=', $docente);
        }); */

        //Checa disponibilidad de materia
     //   $collision3 = Horario::where('hora_inicio', '=', $hora)->where('materia', '=', $salon)->where('dia', '=', $dia)->exists();

        
        // Verificar colisiones en la base de datos
/*         $collision = Horario::where(function ($query) use ($hora, $salon, $materia, $dia) {
            $query->where('hora_inicio', '=', $hora)
                ->where('docente_id', '=', $docente->docente_id)
                ->where(function ($subquery) use ($classroom_id) {
                    // Excluir la misma aula y también asegurarse de que el aula no sea "PLA"
                    $subquery->where('salon_id', '<>', $classroom_id)
                        ->orWhere('salon_id', '10');
                });
        })->exists(); */
        $collision = Horario::where(function ($query) use ($hora, $salon, $dia) {
            $query->where('hora_inicio', '=', $hora)
                ->where('salon_id', '=', $salon)
                ->where('dia', '=', $dia);
        })->orWhere(function ($query) use ($hora, $docente, $dia) {
            $query->where('dia', '=', $dia)
                ->where('hora_inicio', '=', $hora)
                ->whereHas('materia', function ($subquery) use ($docente) {
                    $subquery->where('docente_id', '=', $docente[0]);
                });
        })->orWhere(function ($query) use ($hora, $materia, $dia) {
            $query->where('hora_inicio', '=', $hora)
                ->where('materia_id', '=', $materia)
                ->where('dia', '=', $dia);
        })->exists();
        return $collision;
    }

    
}
