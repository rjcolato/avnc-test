@extends('layout')
@if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
@endif
<form class="row g-3" action="{{ route('shifts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <div class="form-group">
            <strong>Hora de entrada:</strong>
            <input type="text" name="clokc_in" class="form-control" placeholder="Hora de entrada">
            @error('clock_in')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <div class="form-group">
            <strong>Hora de Salida:</strong>
            <input type="text" name="clokc_out" class="form-control" placeholder="Hora de salida">
            @error('clock_out')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <div class="form-group">
            <strong>Empleado:</strong>
            <select class="form-select" aria-label="Default select example" name="employees_id">
                <option selected>--seleccione uno--</option>
                @foreach($employee as $employee)
                    <option value="{{$employees->id}}">{{$employee->name}}</option>
                @endforeach
            </select>
            @error('empleado_id')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
</form>
