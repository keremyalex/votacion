@extends('adminlte::page')

@section('title', 'Sistema')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Hola Mundo
            </h1>
        </div>
        <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quis repellat quae recusandae tempora veniam, rem sint corrupti voluptas molestias fugit labore molestiae quia voluptatum ducimus quasi ab nemo inventore?
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop