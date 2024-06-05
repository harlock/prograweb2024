@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Pedido</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fecha de pedido:</strong>
                            <input type="date" name="fecha_pedido" class="form-control" placeholder="Fecha de pedido">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Total:</strong>
                            <input type="number" name="total" class="form-control" placeholder="Total">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            <select name="id_cliente" id="">
                                <option value="" selected disabled>Seleccciona una opcion</option>
                                @foreach($clientes as $cliente)
                                    <option value="{{$cliente->id_cliente}}">{{$cliente->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Empleado:</strong>
                            <select name="id_empleado" id="">
                                <option value="" selected disabled>Seleccciona una opcion</option>

                                @foreach($empleados as $empleado)
                                    <option value="{{$empleado->id_empleado}}">{{$empleado->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

@endsection
