<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Teste extends Controller
{
    public function index(){
        // echo "Estou no controlador";
        // $data['mostrar']= false;
        // $data['frase']= 'Frase teste';
        // $data['nomes'] = [
        //     'Didi', 'Zito', 'Still', 'Sina', 'Peter'
        // ];
        // return view('home');

        // Inserção de sócio 
        // DB::insert("INSERT INTO socios VALUES (0, ?, ?, NOW(), NOW())", ['Didi', '3333']);

        // Atualização
        DB::update("UPDATE socios SET nome = ?, updated_at = NOW() WHERE id_socio =?", ['Zito Fernando', 2]);

        // Leitura dos socios da Base de dados
        // $resultado = DB::select("SELECT COUNT(*) Total FROM socios");
        $resultado = DB::select("SELECT * FROM socios");
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
