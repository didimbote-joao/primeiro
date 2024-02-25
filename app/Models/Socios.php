<?php

    namespace app\Models;

    use Illuminate\Support\Facades\DB;

    class Socios{
        public function get_socio(){
           return DB::select("SELECT * FROM socios");
        }
    }
