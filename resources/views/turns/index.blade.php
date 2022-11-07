@extends('layout')
@section('content')
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('turns.create') }}">Nuevo</a>
        <a class="btn btn-success" href="{{ route('turns.report') }}" target="_blank">Reporte</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Hora de entrada</th>
            <th scope="col">Hora Salida</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $elemento)
        <tr>
            <th scope="row">{{$elemento->id}}</th>
            <td>{{$elemento->name}}</td>
            <td>{{$elemento->clock_in}}</td>
            <td>{{$elemento->cock_out}}</td>
            @include('general.actions', ['id' => $elemento->id, 'edit_route' => 'turns.edit', 'destroy_route' => 'turns.destroy'])
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
