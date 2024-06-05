
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pedidos</h2>

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pedidos.create') }}"> Crear  Pedido</a>
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
            <th>Fecha del pedido</th>
            <th>Total</th>
            <th>Cliente</th>
            <th>Empleado</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $pedido->fecha_pedido }}</td>
                <td>{{ $pedido->total }}</td>
                <td>{{ $pedido->id_cliente }}</td>
                <td>{{ $pedido->id_empleado }}</td>

                <td>
                    <form action="{{ route('pedidos.destroy',$pedido->id_pedido) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('pedidos.show',$pedido->id_pedido) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('pedidos.edit',$pedido->id_pedido) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
