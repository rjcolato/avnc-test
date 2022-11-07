<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBranchesRequest;
use App\Http\Requests\UpdateBranchesRequest;
use App\Models\Employees;
use App\Models\Turns;
use App\Models\Branches;
use App\Models\Shifts;
use function App\helpers\generate_pdf;

class BranchesController extends Controller
{
    private $elementos_a_validar = [
        'name' => 'required',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Branches::all();
        return view('branches.index')->with('data', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBranchesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBranchesRequest $request)
    {
        request->validate($this->elementos_a_validar);
        $record = new Branches;
        $record->fill($request->post())->save();
        return redirect()->route('branches.index')->with('success', 'Registro creado extiosamente'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function show(Branches $branches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function edit(Branches $branches)
    {
        return view('branches.edit')->with('elemento', $branches); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBranchesRequest  $request
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBranchesRequest $request, Branches $branches)
    {
        $request->validate($this->elementos_a_validar);
        $branches->fill($request->post())->save();
        return redirect()->route('branches.index')->with('message', 'Registro actualizado exitosamente');  //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branches $branches)
    {
        $branches->forceDelete();
        return redirect()->route('branches.index')->with('message', 'Registro eliminado exitosamente');  //
    }
    public function report()
    {
        return generate_pdf(['data' => Branches::all()], 'branches.report', 'rpt_branches');
    }
}
