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
        </tr>
    @endforeach
    </tbody>
</table>
