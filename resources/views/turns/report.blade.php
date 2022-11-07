<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Hora entrada</th>
        <th scope="col">Hora salida</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $elemento)
        <tr>
            <th scope="row">{{$elemento->id}}</th>
            <td>{{$elemento->name}}</td>
            <td>{{$elemento->clock_in}}</td>
            <td>{{$elemento->clock_out}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
