@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Agregar Empleado</h2>
        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf

            <fieldset>
                <legend>Datos Personales</legend>

                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" value="{{ old('nombres') }}" required>
                @error('nombres')
                    <span role="alert">{{ $message }}</span>
                @enderror

                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" required>
                @error('apellidos')
                    <span role="alert">{{ $message }}</span>
                @enderror

                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" value="{{ old('edad') }}" required>
                @error('edad')
                    <span role="alert">{{ $message }}</span>
                @enderror
            </fieldset>

            <fieldset>
                <legend>Fecha de Ingreso</legend>

                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}" required>
                @error('fecha_ingreso')
                    <span role="alert">{{ $message }}</span>
                @enderror
            </fieldset>

            <fieldset>
                <legend>Comentarios</legend>

                <label for="comentarios">Comentarios:</label>
                <textarea id="comentarios" name="comentarios">{{ old('comentarios') }}</textarea>
            </fieldset>

            <button type="submit">Agregar Empleado</button>
        </form>
    </div>
@endsection
