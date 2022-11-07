@extends('layout')
@if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
@endif
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form class="row g-3" action="{{ route('branches.update', $elemento->id) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre sucursal" value="{{$elemento->name}}">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary ml-3">Actualizar</button>
    </div>
    </form>
</div>
<div class="col-2"></div>
</div>
