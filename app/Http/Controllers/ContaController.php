<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    // Listar as contas
    public function index(){
        // dd('Listar');
        // echo 'Estou no controlador';

        // Carrega a VIEW
        return view('contas.index');
    }

    // Carregar o formulario cadastrar nova conta
    public function create(){
        // Carrega a VIEW
        return view('contas.index');
    }
}
