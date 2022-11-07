<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTurnsRequest;
use App\Http\Requests\UpdateTurnsRequest;
use App\Models\Employees;
use App\Models\Turns;
use App\Models\Branches;
use App\Models\Shifts;
use function App\helpers\generate_pdf;
use Spatie\FlareClient\View;

class TurnsController extends Controller
{
    private $elementos_a_validar = [
        'name' => 'required',
        'clock_in' => 'required',
        'clock_out' => 'required',
       
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('turns.index')->with('data', Turns::all()); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTurnsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTurnsRequest $request)
    {
        $request->validate($this->elementos_a_validar);
        $record = new Turns;
        $record->fill($request->post())->save();
        return redirect()->route('turns.index')->with('success', 'Registro creado extiosamente'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function show(Turns $turns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function edit(Turns $turns)
    {
        return view('turns.edit')
            ->with('elemento', $turns); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTurnsRequest  $request
     * @param  \App\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTurnsRequest $request, Turns $turns)
    {
        $request->validate($this->elementos_a_validar);
        $turns->fill($request->post())->save();
        return redirect()->route('turns.index')->with('success', 'Registro creado extiosamente');  //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turns $turns)
    {
        $turns->forceDelete();
        return redirect()->route('turns.index')->with('success', 'Registro eliminado extiosamente'); //
    }
    public function report()
    {
        return generate_pdf(['data' => Turns::all()], 'turns.report', 'rpt_turns');
    }
}
