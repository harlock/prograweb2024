
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>empleados</h2>

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('empleados.create') }}"> Crear  cliete</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Posicion</th>
            <th>Fecha de contratación</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellido }}</td>
                <td>{{ $empleado->posicion }}</td>
                <td>{{ $empleado->fecha_contratacion }}</td>

                <td>
                    <form action="{{ route('empleados.destroy',$empleado->id_empleado) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('empleados.show',$empleado->id_empleado) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('empleados.edit',$empleado->id_empleado) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
