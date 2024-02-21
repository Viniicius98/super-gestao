<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;


class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'RJ';
        $fornecedor->email = 'fornecedor@contato.com';
        $fornecedor->save();

        Fornecedor::create([
            'nome'=>'Fornecedor 122',
            'site'=>'fornecedor12.com.br',
            'uf'=>'RJ',
            'email'=>'fornecedor@contato.com',
        ]);

        /*
        \DB::table('fornecedores')->insert([
            'nome'=>'Fornecedor 100',
            'site'=>'fornecedor100.com.br',
            'uf'=>'RJ',
            'email'=>'fornecedor@contato.com',
        ]);*/
    }
}
