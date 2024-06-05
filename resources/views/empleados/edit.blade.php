@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar empleado</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
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
    <form action="{{ route('empleados.update',$empleado->id_empleado) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$empleado->nombre}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            <input type="text" name="apellido" class="form-control" placeholder="Apellidos" value="{{$empleado->apellido}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Posición:</strong>
                            <input type="text" name="posicion" class="form-control" placeholder="Posición" value="{{$empleado->posicion}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fecha de contratación:</strong>
                            <input type="date" name="fecha_contratacion" class="form-control" placeholder="Fecha de contratación" value="{{$empleado->fecha_contratacion}}">
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
