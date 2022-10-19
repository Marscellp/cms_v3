@extends('template.app')

@section('content')
{{-- @include('sweetalert::alert') --}}
<form method="POST" action="{{route("users.store")}}" class="p-0 p-sm-2 p-md-4">
    @csrf
    <div class="row py-3 px-2">
        <p><h3>Agregar nuevo usuario</h3></p>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input name="name" type="text" class="form-control" placeholder="Ej: Lenny">
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Apellido</label>
                <input name="apellido" type="text" class="form-control" placeholder="Ej: Valencia">
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">Cedula</label>
                <input name="cedula" type="text" class="form-control" placeholder="Ej: 1231 ">
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">Edad</label>
                <input name="edad" type="text" class="form-control" placeholder="Ej: 23">
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="email">Email usuario</label>
                <input name="email" type="text" class="form-control" placeholder="Ej: val@gmail.com">
                @error('email') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">Especialidad</label>
                <input name="especialidad" type="text" class="form-control" placeholder="Ej: Telecomunciacion">
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">Semestre</label>
                <input name="semestre" type="text" class="form-control" placeholder="Ej: 8">
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">UC</label>
                <input name="uc" type="text" class="form-control" placeholder="Ej: 7">
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="type">Tipo</label>
                <select name='type' class="form-control">
                    <option value="Elegir" disable>Elegir</option>
                    <option value="ADMIN">Administrador</option>
                    <option value="DOCENTE">Docente</option>
                    <option value="AUXILIAR">Auxiliar</option>
                    <option value="DIRECTOR">Director</option>
                    <option value="GENERAL">General</option>
                </select>
                @error('type') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success" >Guardar</button>
    <a href="{{route('users.index')}}" type="submit" class="btn btn-danger" >Volver</a>
</form>
@endsection