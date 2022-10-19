@extends('template.app')

@section('content')
{{-- @include('sweetalert::alert') --}}
<form method="POST" action="{{route("users.update", [$user])}}" class="p-0 p-sm-2 p-md-4">
    @method("PUT")
    @csrf
    <div class="row py-3 px-2">
        <p><h3>Actualizar nuevo usuario</h3></p>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input name="name" type="text" class="form-control" placeholder="Ej: Lenny" value={{$user->name}}>
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Apellido</label>
                <input name="apellido" type="text" class="form-control" placeholder="Ej: Valencia" value={{$user->apellido}}>
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">Cedula</label>
                <input name="cedula" type="text" class="form-control" placeholder="Ej: 1231 " value={{$user->cedula}}>
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">Edad</label>
                <input name="edad" type="text" class="form-control" placeholder="Ej: 23" value={{$user->edad}}>
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="email">Email usuario</label>
                <input name="email" type="text" class="form-control" placeholder="Ej: val@gmail.com" value={{$user->email}}>
                @error('email') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">Especialidad</label>
                <input name="especialidad" type="text" class="form-control" placeholder="Ej: Telecomunciacion" value={{$user->especialidad}}>
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">Semestre</label>
                <input name="semestre" type="text" class="form-control" placeholder="Ej: 8" value={{$user->semestre}}>
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name">UC</label>
                <input name="uc" type="text" class="form-control" placeholder="Ej: 7" value={{$user->uc}}>
                @error('name') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
        
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="type">Tipo</label>
                <select name='type' class="form-control" >
                    <option 
                        value=""
                    >s</option>
                    <option 
                        value="ADMIN"
                        {{$user->type == 'ADMIN'?'selected':''}}
                    >Administrador</option>
                    <option 
                        value="DOCENTE"
                        {{$user->type == 'DOCENTE'?'selected':''}}
                    >Docente</option>
                    <option 
                        value="AUXILIAR"
                        {{$user->type == 'AUXILIAR'?'selected':''}}
                    >Auxiliar</option>
                    <option 
                        value="DIRECTOR"
                        {{$user->type == 'DIRECTOR'?'selected':''}}
                    >Director</option>
                    <option 
                        value="GENERAL"
                        {{$user->type == 'GENERAL'?'selected':''}}
                    >General</option>
                </select>
                @error('type') <span class="text-danger er">{{$message}}</span>@enderror
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success" >Guardar</button>
    <a href="{{route('users.index')}}" type="submit" class="btn btn-danger" >Volver</a>
</form>
@endsection