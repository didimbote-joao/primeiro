<?php

namespace App\Http\Controllers;

use app\Models\Socios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Teste extends Controller
{
    public function index(){
        $model = new Socios();
        $resultado = $model->get_socio();
        // echo '<pre>';
        // print_r($resultado);
        foreach($resultado as $socio){
            echo '<p>' . $socio->nome . '</p>';
        }
    }

    // ============================================================
    public function servico(){
        return view('servico');
    }

    // ============================================================
    public function galeria($pagina){
        $data['pagina'] = $pagina;
        return view('galeria', $data);
    }

    // ============================================================
    public function contacto($nome, $apelido = ''){
        $data['nome'] = $nome;
        $data['apelido'] = $apelido;
        return view('contacto', $data);
    }
}
