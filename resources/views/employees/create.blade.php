
@extends('layout')
@if(session('status'))



    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
@endif
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form class="row g-3" action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <div class="form-group">
                    <strong>Nombres:</strong>
                    <input type="text" name="first_name" class="form-control" placeholder="Primer Nombre">
                    @error('first_name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Apellidos:</strong>
                    <input type="text" name="last_name" class="form-control" placeholder="Apellidos">
                    @error('last_name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Sucursal:</strong>
                    <select class="form-select" aria-label="Default select example" name="branches_id">
                        <option selected>--seleccione uno--</option>
                        @foreach($branches as $branches)
                            <option value="{{$branches->id}}">{{$branches->name}}</option>
                        @endforeach
                    </select>
                    @error('branches_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Fecha de nacimiento:</strong>
                    <input type="date" name="birthdate" class="form-control" placeholder="fecha de nacimiento">
                    @error('birthdate')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Codigo de Empleado:</strong>
                    <input type="text" name="employee_code" class="form-control" placeholder="Codigo de empleado">
                    @error('employee_code')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Direccion:</strong>
                    <input type="text" name="address" class="form-control" placeholder="Direccion">
                    @error('address')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
           <div class="mb-3">
                <div class="form-group">
                    <strong>Pais:</strong>
                    <select class="form-select" aria-label="Default select example" name="country_id">
                        <option selected>--seleccione uno--</option>
                        @foreach($country as $country)
                            <option value="{{$country->countryid}}">{{$country->name}}</option>
                        @endforeach
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
           
            <div class="mb-3">
                <div class="form-group">
                    <strong>Ciudad:</strong>
                    <input type="text" name="city" class="form-control" placeholder="Ciudad">
                    @error('city')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="mb-3">
                <div class="form-group">
                    <strong>Telefono:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Telefono">
                    @error('phone')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Fecha de contratacion:</strong>
                    <input type="date" name="hiring_date" class="form-control" placeholder="fecha de contratacion">
                    @error('hiring_date')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Estado de empleado:</strong>
                    <input type="boolean" name="status" class="form-control">
                    @error('status')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Genero:</strong>
                    <select class="form-select" aria-label="Default select example" name="gengre_id">
                        <option selected>--seleccione uno--</option>
                        @foreach($gengre as $gengre)
                            <option value="{{$gengre->id}}">{{$gengre->name}}</option>
                        @endforeach
                    </select>
                    @error('gengre_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Turno:</strong>
                    <select class="form-select" aria-label="Default select example" name="turns_id">
                        <option selected>--seleccione uno--</option>
                        @foreach($turns as $turns)
                            <option value="{{$turns->id}}">{{$turns->name}}</option>
                        @endforeach
                    </select>
                    @error('turns_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary ml-3">Guardar</button>
        </form>
    </div>
    <div class="col-2"></div>
</div>
