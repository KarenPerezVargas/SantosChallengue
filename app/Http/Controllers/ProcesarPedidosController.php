<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcesarPedidosController extends Controller
{
    public function index(){
        return view('pedidos.personalPedidos.procesarPedido.index');
    }
}
