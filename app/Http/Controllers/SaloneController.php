<?php

namespace App\Http\Controllers;

use App\Models\Salone;
use Illuminate\Http\Request;

/**
 * Class SaloneController
 * @package App\Http\Controllers
 */
class SaloneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salones = Salone::paginate();

        return view('salone.index', compact('salones'))
            ->with('i', (request()->input('page', 1) - 1) * $salones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salone = new Salone();
        return view('salone.create', compact('salone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Salone::$rules);

        $salone = Salone::create($request->all());

        return redirect()->route('salones.index')
            ->with('success', 'Salone created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salone = Salone::find($id);

        return view('salone.show', compact('salone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salone = Salone::find($id);

        return view('salone.edit', compact('salone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Salone $salone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salone $salone)
    {
        request()->validate(Salone::$rules);

        $salone->update($request->all());

        return redirect()->route('salones.index')
            ->with('success', 'Salone updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $salone = Salone::find($id)->delete();

        return redirect()->route('salones.index')
            ->with('success', 'Salone deleted successfully');
    }
}
