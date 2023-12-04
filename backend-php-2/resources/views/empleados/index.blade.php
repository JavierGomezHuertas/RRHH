@extends('layouts.app')

@section('content')
    <fieldset class="container mt-3">
        <h2>Listado de Empleados</h2>
        <a href="{{ route('empleados.create') }}" class="btn btn-primary mt-3">Agregar Empleado</a>
        <div class="table-responsive">
            <table class="table table-striped mt-3">
                <thead>
                    <tr class="table-info">
                        <th style="width: 4%" class="text-center">ID</th>
                        <th style="width: 23%">Nombres</th>
                        <th style="width: 17%">Apellidos</th>
                        <th style="width: 5%" class="text-center">Edad</th>
                        <th style="width: 12%" class="text-center">Fecha de Ingreso</th>
                        <th style="width: 25%" class="text-center">Comentarios</th>
                        <th style="width: 14%" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td class="table-light text-center">{{ $empleado->id }}</td>
                            <td class="table-light">{{ $empleado->nombres }}</td>
                            <td class="table-light">{{ $empleado->apellidos }}</td>
                            <td class="table-light text-center">{{ $empleado->edad }}</td>
                            <td class="table-light text-center">{{ $empleado->fecha_ingreso }}</td>
                            <td class="table-light text-center">{{ $empleado->comentarios }}</td>
                            <td class="table-light text-center">
                                <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </fieldset>
@endsection
