<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste extends Controller
{
    public function index(){
        // echo "Estou no controlador";
        // $data['mostrar']= false;
        // $data['frase']= 'Frase teste';
        // $data['nomes'] = [
        //     'Didi', 'Zito', 'Still', 'Sina', 'Peter'
        // ];
        return view('home');
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
