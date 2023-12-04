@extends('layouts.app')

@section('content')
    <div class="container mt-3 p-5 bg-info bg-opacity-10 border border-info border-opacity-25 rounded-4">
        <h2>Editar Empleado</h2>
        <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset class="mb-3">
                <legend class="mt-3">Datos Personales</legend>

                <label for="nombres" class="col-sm-2 col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres', $empleado->nombres) }}" required>
                @error('nombres')
                    <span role="alert">{{ $message }}</span>
                @enderror

                <label for="apellidos" class="col-sm-2 col-form-label">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ old('apellidos', $empleado->apellidos) }}" required>
                @error('apellidos')
                    <span role="alert">{{ $message }}</span>
                @enderror

                <label for="edad" class="col-sm-2 col-form-label">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" value="{{ old('edad', $empleado->edad) }}" required>
                @error('edad')
                    <span role="alert">{{ $message }}</span>
                @enderror
            </fieldset>

            <fieldset class="mt-3">
                <legend class="mb-3">Fecha de Ingreso</legend>

                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{ old('fecha_ingreso', $empleado->fecha_ingreso) }}" required>
                @error('fecha_ingreso')
                    <span role="alert">{{ $message }}</span>
                @enderror
            </fieldset>

            <fieldset class="mt-3">
                <legend class="mb-3">Comentarios <small class="text-muted" style="font-size: 70%;">(opcional)</small></legend>

                <textarea id="comentarios" class="form-control" name="comentarios">{{ old('comentarios', $empleado->comentarios) }}</textarea>
            </fieldset>
            <button type="submit" class="btn btn-primary mt-3">Actualizar Empleado</button>
        </form>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary mt-2">Volver a la Lista</a>
    </div>
@endsection
