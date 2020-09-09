@extends('adminlte::page')

@section('title', 'Sistema')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')

    <style type="text/css">
        table tr{
            text-align: center;
        }
    </style>
    

    <div class="card">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Creación</th>
                    <th>Actualización</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop