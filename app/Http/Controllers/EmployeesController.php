<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeesRequest;
use App\Http\Requests\UpdateEmployeesRequest;
use App\Models\Employees;
use App\Models\Turns;
use App\Models\Branches;
use App\Models\Shifts;
use function App\helpers\generate_pdf;

class EmployeesController extends Controller
{
    private $elementos_a_validar = [
        'first_name' => 'required',
        'last_name' => 'required',
        'birthdate' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'clock_out' => 'required',
        'country_id' => 'required',
        'city' => 'required',
        'address' => 'required',
        'hiring_date' => 'required',
        'status' => 'required',
        'gengre_id' => 'required',
        'turns_id' => 'required',

       
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employees.index')->with('data', Employees::all());  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create')
            ->with('branches', Branches::all()); 
            -with('turns', Turns::all());  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeesRequest $request)
    {
        $request->validate($this->elementos_a_validar);
        $record = new Employees;
        $record->fill($request->post())->save();
        return redirect()->route('employees.index')->with('success', 'Registro creado extiosamente');  //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employees)
    {
        return view('employees.edit')->with('elemento', $employees);  //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeesRequest  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeesRequest $request, Employees $employees)
    {
        $request->validate($this->elementos_a_validar);
        $employees->fill($request->post())->save();
        return redirect()->route('employees.index')->with('message', 'Registro actualizado exitosamente'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employees)
    {
        $employees->forceDelete();
        return redirect()->route('employees.index')->with('message', 'Registro eliminado existosamente'); //
    }

    public function report()
    {
        return generate_pdf(['data' => Employees::all()],  'proyecto.report', 'rpt_employees');
    }
}
