@extends('layout')
@section('content')
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('branches.create') }}">Nuevo</a>
        <a class="btn btn-success" href="{{ route('branches.report') }}" target="_blank">Reporte</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
                        <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $elemento)
        <tr>
            <th scope="row">{{$elemento->id}}</th>
            <td>{{$elemento->name}}</td>
            @include('general.actions', ['id' => $elemento->id, 'edit_route' => 'branches.edit', 'destroy_route' => 'branches.destroy'])
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
