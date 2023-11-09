@extends('layouts.gerentealmacen')
@section('dashName', 'Dashboard')
@section('mainContent')
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="navbar">
                    <div class="container-fluid">
                        <h3><i>Ordenes de Compras</i></h3>
                        <a href="{{ route('createCompra') }}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Nuevo
                            Registro</a>

                        <a href="{{ route('reporteCompra') }}" class="btn btn-primary"><i
                                class="fas fa-file-pdf"></i>&nbsp;Generar PDF</a>
                    </div>

                </div>

                <div class="text-center">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>N° Orden</th>
                                <th>RUC</th>
                                <th>Fecha</th>
                                <th>Proveedor</th>
                                <th>Transporte</th>
                                <th>Observaciones</th>
                                <th>Total S/.</th>
                                <th>Opción</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($compra->count() == 0)
                                <tr>
                                    <td>No hay compras</td>
                                </tr>
                            @endif
                            @foreach ($compra as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->ruc }}</td>
                                    <td>{{ $item->fecha }}</td>
                                    <td>{{ $proveedor->find($item->proveedor_id)->nombre_proveedor }}</td>
                                    <td>{{ $transporte->find($item->transporte_id)->trans_codigo }}</td>
                                    <td>{{ $item->indicaciones }}</td>
                                    <td>S/. {{ $item->total }}</td>
                                    <td>
                                        <a href="{{ route('editCompra', [$item->id]) }}" class="btn btn-info btn-sm"><i
                                                class="fas fa-edit"></i> Editar</a>
                                        &nbsp; &nbsp; &nbsp;

                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-{{ $item->id }}">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </button>

                                        <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="{{ route('eliminarCompra', $item->id) }}" method="post">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminacion de la
                                                                compra</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ¿Esta seguro que desea eliminar este
                                                            registro<b>{{ $item->nombre }}</b>? <br>
                                                            <i>Se eliminara toda la información de la compra</i>
                                                        </div>
                                                        <div class="modal-footer m-2">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
