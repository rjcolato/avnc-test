@extends('layout')
@if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
@endif
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form class="row g-3" action="{{ route('cooperante.update', $elemento->id) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <div class="form-group">
                    <strong>Hora de entrada:</strong>
                    <input type="text" name="clock_in" class="form-control" placeholder="Hora de entrada" value="{{$elemento->clock_in}}">
                    @error('clock_in')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Hora de salida:</strong>
                    <input type="text" name="clock_out" class="form-control" placeholder="Hora de salida" value="{{$elemento->clock_out}}">
                    @error('clock_in')
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
                            <option value="{{$employee->id}}"
                                {{isSelected($employee->id, $elemento->employees_id)}}>
                                {{$employee->name}}
                            </option>
                        @endforeach
                    </select>
                    @error('employees_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    </form>
</div>
<div class="col-2"></div>
</div>
