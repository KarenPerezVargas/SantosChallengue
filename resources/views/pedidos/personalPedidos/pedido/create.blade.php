@extends('layouts.personalPedidos')

@section('puntos', '../')

@section('dashName', 'Registar Pedido')

@section('mainContent')
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="{{route('pedido.store')}}" class="row g-3">
                @csrf

                <label for=""><h6 style="color: rgb(52, 94, 52)">-------------- DATOS PEDIDO --------------</h6></label>

                <div class="row">
                {{-- PEDIDOS --}}
                    <div class="col-12 col-md-7">
                        <div class="col">
                            <div class="form-group" style="padding-top: 10px">
                                <label for=""><h6>Descipción:</h6></label>
                                <input type="text"  class="form-control input_user @error('descripcion') is-invalid @enderror" 
                                placeholder="¿Qué esta pidiendo?"  id="descripcion" name="descripcion" >
                                @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-7 col-md-6">
                        <div class="col-7">
                            <div class="form-group" style="padding-top: 10px">
                                <label for=""><h6>Precio:</h6></label>
                                <input type="decimal"  class="form-control input_user @error('precios') is-invalid @enderror" 
                                placeholder="Costo"  id="precio" name="precio" >
                                @error('precio')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div> 

                    <div class="col-7 col-md-6">
                        <div class="col-5">
                            <div class="form-group" style="padding-top: 10px">
                                <label for=""><h6>Cantidad:</h6></label>
                                <input type="number"  class="form-control input_user @error('cantidad') is-invalid @enderror" 
                                placeholder="Cantidad"  id="cantidad" name="cantidad" >
                                @error('cantidad')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div> 
                </div>

                <br>
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="col-4">
                            <div class="form-group" style="padding-top: 10px">
                                <label for=""><h6>Tipo de producto:</h6></label>
                                <input type="text"  class="form-control input_user @error('tipo') is-invalid @enderror" 
                                placeholder="Tipo"  id="tipo" name="tipo" >
                                @error('tipo')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div> 
                </div>

                <br>
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="col-4">
                            <div class="form-group" style="padding-top: 10px">
                                <label for=""><h6>Cliente:</h6></label>
                                <select class="form-control @error('idCliente') is-invalid @enderror" name="idCliente">
                                    <option value="">Selecciona un cliente</option>
                                    @if (count($cliente)<=0)
                                    <option>No hay clientes</option>
                                    @else   
                                        @foreach($cliente as $cliente)
                                            <option value="{{ $cliente->idCliente }}">{{ $cliente->nombres}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('idCliente')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div>
                </div>


                <br>
                {{-- Botones --}}
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
                    <a href="{{route('cancelar-pedido')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a>
                </div>
                <br>
            </form>
        </div>
    </div>
@endsection