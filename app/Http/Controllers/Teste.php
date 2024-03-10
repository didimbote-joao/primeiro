<?php

namespace App\Http\Controllers;

// use app\Models\Socios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Teste extends Controller
{
    public function index(){
        // Para apresentar mais de uma tabela, devemos pó-las como um array, caso contrário basta sem array
        // $resultados = DB::table('socios')->get(['telefone','nome'])->all(); 

        // WHERE
        // $resultados =DB::table('socios')->where('nome', 'Zito Fernando')->get()->all();

        // Buscar dados de uma coluna
        // $resultados =DB::table('socios')->pluck('telefone')->all();

        // $resultados = DB::table('socios')->get('nome')->all(); 
        
        // Chunk (buscar metade da tabela)

        // DB::table('socios')->orderBy('id_socio')->chunk(100, function($socios){
        //     foreach($socios as $socio){
        //         echo "<p>O socio $socio->nome tem o numero $socio->telefone</p>";
        //     }
        // });

        // foreach ($resultados as $socio){
        //     echo '<p>'.$socio->telefone . '</p>';
        //     echo '<p>'.$socio->nome . '</p>';
        // }

        // echo'<pre>';
        // print_r($resultados);
        //return view('home');

        //Contar e somar
        // echo DB::table('socios')->count();
        //echo DB::table('socios')->sum('telefone');

        // Insert
        // DB::table('socios')->insert([
        //     'nome' => 'Melly',
        //     'telefone' => '954',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => \Carbon\Carbon::now()
        // ]);

        // Update
        DB::table('socios')->where('id_socio', 4)->update([
            'nome' => 'Didimbote Zimpevo',
            'updated_at' => \Carbon\Carbon::now(),
        ]);
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
