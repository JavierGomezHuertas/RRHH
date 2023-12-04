@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Empleado</h2>
        <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
                <legend>Datos Personales</legend>

                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" value="{{ old('nombres', $empleado->nombres) }}" required>
                @error('nombres')
                    <span role="alert">{{ $message }}</span>
                @enderror

                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos', $empleado->apellidos) }}" required>
                @error('apellidos')
                    <span role="alert">{{ $message }}</span>
                @enderror

                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" value="{{ old('edad', $empleado->edad) }}" required>
                @error('edad')
                    <span role="alert">{{ $message }}</span>
                @enderror
            </fieldset>

            <fieldset>
                <legend>Fecha de Ingreso</legend>

                <input type="date" id="fecha_ingreso" name="fecha_ingreso" value="{{ old('fecha_ingreso', $empleado->fecha_ingreso) }}" required>
                @error('fecha_ingreso')
                    <span role="alert">{{ $message }}</span>
                @enderror
            </fieldset>

            <fieldset>
                <legend>Comentarios</legend>

                <textarea id="comentarios" name="comentarios">{{ old('comentarios', $empleado->comentarios) }}</textarea>
            </fieldset>
            <button type="submit">Actualizar Empleado</button>
        </form>
    </div>
@endsection
