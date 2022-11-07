@extends('layout')
@section('content')
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('shifts.create') }}">Nuevo</a>
        <a class="btn btn-success" href="{{ route('shifts.report') }}" target="_blank">Reporte</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hora de entrada</th>
            <th scope="col">Hora de Salida</th>
            <th scope="col">Empleado</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $elemento)
        <tr>
            <th scope="row">{{$elemento->id}}</th>
            <td>{{$elemento->clock_in}}</td>
            <td>{{$elemento->clock_out}}</td>
            <td>{{$elemento->employees_id}}</td>
            @include('general.actions', ['id' => $elemento->id, 'edit_route' => 'shifts.edit', 'destroy_route' => 'shifts.destroy'])
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
