@extends('template.app')

@section('content')
@include('sweetalert::alert')
<div class="p-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="{{route("users.create")}}" class="btn btn-success">
                    AGREGAR
                </a>
            </div>
        </div>
    </div>
    <hr>
    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cedula</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Especialidad</th>
                <th>Semestre</th>
                <th>U.C.</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr> 
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->apellido}}</td>
                    <td>{{$user->cedula}}</td>
                    <td>{{$user->edad}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->especialidad}}</td>
                    <td>{{$user->semestre}}</td>
                    <td>{{$user->uc}}</td>
                    {{-- <td>{{$info->linea->titulo}}</td> --}}
                    {{--  --}}
                    <td>
                        <div class="btn-group">
                            <a href="{{route("users.edit",[$user])}}" class="btn btn-success" wire:click="Edit({{$user->id}})"><i class="bi bi-file-earmark-plus"></i></a>
                            <form action="{{route("users.destroy", [$user])}}" method="post">
                                @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection