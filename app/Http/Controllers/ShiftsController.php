<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShiftsRequest;
use App\Http\Requests\UpdateShiftsRequest;
use App\Models\Employees;
use App\Models\Turns;
use App\Models\Branches;
use App\Models\Shifts;
use function App\helpers\generate_pdf;


class ShiftsController extends Controller
{
    private $elementos_a_validar = [
        'id' => 'required',
        'clock_in' => 'required',
        'clock_out' => 'required',
        'employees_id' => 'required'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shifts.index')->with('data', Shifts::all()); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shifts.create')
            ->with('employees', Employees::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShiftsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShiftsRequest $request)
    {
        $request->validate($this->elementos_a_validar);
        $record = new Shifts;
        $record->fill($request->post())->save();
        return redirect()->route('shifts.index')->with('success', 'Registro creado extiosamente'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shifts  $shifts
     * @return \Illuminate\Http\Response
     */
    public function show(Shifts $shifts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shifts  $shifts
     * @return \Illuminate\Http\Response
     */
    public function edit(Shifts $shifts)
    {
        return view('shifts.edit')
        ->with('elemento', $shifts)
        ->with('employees_id', Employees::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShiftsRequest  $request
     * @param  \App\Models\Shifts  $shifts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShiftsRequest $request, Shifts $shifts)
    {
        $request->validate($this->elementos_a_validar);
        $shifts->fill($request->post())->save();
        return redirect()->route('shifts.index')->with('success', 'Registro creado extiosamente');  //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shifts  $shifts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shifts $shifts)
    {
        $shifts->forceDelete();
        return redirect()->route('shifts.index')->with('success', 'Registro eliminado extiosamente'); //
    }
}
