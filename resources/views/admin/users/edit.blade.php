@extends('adminlte::page')

@section('title', 'Sistema de Listas')

@section('content_header')
    <h1>Asignar un rol</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

            <h1 class="h5">Nombre</h1>
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <h1 class="h5 mt-3">Correo</h1>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <h1 class="h5 mt-3">Entidad</h1>
            {!! Form::select('entity_id', $entities->pluck('name', 'id'), $user->entity_id, [
                'class' => 'form-control',
            ]) !!}
            @error('entity_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <h1 class="h5 mt-3">Zona Horaria</h1>
            {!! Form::select('timezone', $timezones, $user->timezone, [
                'class' => 'form-control',
            ]) !!}
            @error('timezone')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <h1 class="h5 mt-3">Lista de roles</h1>
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach

            {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-2']) !!}
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-2">Cancelar</a>

            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
