<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['id' => 1,'descricao' => "Esportes"]);
        DB::table('categorias')->insert(['id' => 2,'descricao' => "Politica"]);
        DB::table('categorias')->insert(['id' => 3,'descricao' => "Clima"]);
        DB::table('categorias')->insert(['id' => 4,'descricao' => "Outros"]);
    }
}
