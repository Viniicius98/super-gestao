<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $contato = new SiteContato();
        // $contato-> nome = 'Sistema SG';
        // $contato-> telefone = '(00)000000000';
        // $contato-> email = 'sisteSG@contato.com';
        // $contato-> motivo_contato = 1;
        // $contato-> mensagem = 'Olá php laravel';
        // $contato->save();

        \App\Models\SiteContato::factory()->count(100)->create();
    }
}
