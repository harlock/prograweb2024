
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Clientes</h2>

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Crear  cliete</a>
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
            <th>Direccion</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->email }}</td>

                <td>
                    <form action="{{ route('clientes.destroy',$cliente->id_cliente) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('clientes.show',$cliente->id_cliente) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id_cliente) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
