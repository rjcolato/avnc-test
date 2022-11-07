@extends('layout')
@section('content')
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('employees.create') }}">Nuevo</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Codigo de empleado</th>
            <th scope="col">Email</th>
            <th scope="col">Direccion</th>
            <th scope="col">Pais</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Telefono</th>
            <th scope="col">Fecha de Contratacion</th>
            <th scope="col">Estado</th>
            <th scope="col">Genero</th>
            <th scope="col">Turno</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $elemento)
        <tr>
            <th scope="row">{{$elemento->id}}</th>
            <td>{{$elemento->first_name}}</td>
            <td>{{$elemento->last_name}}</td>
            <td>{{$elemento->branches->branch_id}}</td>
            <td>{{$elemento->birthdate}}</td>
            <td>{{$elemento->employee_code}}</td>
            <td>{{$elemento->email}}</td>
            <td>{{$elemento->address}}</td>
            <td>{{$elemento->country}}</td>
            <td>{{$elemento->city}}</td>
            <td>{{$elemento->phone}}</td>
            <td>{{$elemento->hiring_Date}}</td>
            <td>{{$elemento->status}}</td>
            <td>{{$elemento->gengre->gengre_id}}</td>
            <td>{{$elemento->turns->turn_id}}</td>
            
            @include('general.actions', ['id' => $elemento->id, 'edit_route' => 'employees.edit', 'destroy_route' => 'employees.destroy'])
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
