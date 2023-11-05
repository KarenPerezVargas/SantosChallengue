@extends('layouts.gerentealmacen')
@section('puntos', '../')
@section('mainContent')
    <form action="{{ route('actualizarProveedor', $id) }}" method="post">
        <h5 class="title" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <strong>
                <center>Editar datos del proveedor</center>
        </h5>
        @csrf
        <!-- Mover esta etiqueta dentro del formulario -->

        <div>
            <div class="row m-5">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">Código</label>
                        <input type="text" class="form-control" name="codigo_proveedor" value="{{$proveedor->codigo_proveedor}}" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad_proveedor" value="{{$proveedor->ciudad_proveedor}}" id=""
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email_proveedor" id="" value="{{$proveedor->email_proveedor}}"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre_proveedor" value="{{$proveedor->nombre_proveedor}}" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="direccion_proveedor" value="{{$proveedor->direccion_proveedor}}" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="telefono_proveedor" id="" value="{{$proveedor->telefono_proveedor}}" maxlength="9"
                            required>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-2" style="text-align: center">
            <button type="button" class="btn btn-secondary"
                onclick="location.href='{{ route('proveedor') }}'">Atrás</button>
            <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
    </form>
@endsection
