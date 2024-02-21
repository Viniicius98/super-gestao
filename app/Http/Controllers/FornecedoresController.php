<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index (){
        $fornecedores = [
           0 => [
                'nome'=>'Fornecedor 1',
                'status' => 'N',
                'CNPJ'=>'00.000.000/000.00',
                'ddd' => '21',
                'telefone' => '00000-0000'
                ],
           1 => [
                'nome'=>'Fornecedor 2',
                'status' => 'S',
                'CNPJ'=>'00.000.000/000.00',
                'ddd' => '11',
                'telefone' => '00000-0000'
                ],
           2 => [
                'nome'=>'Fornecedor 3',
                'status' => 'S',
                'CNPJ'=>'00.000.000/000.00',
                'ddd' => '32',
                'telefone' => '00000-0000'
                ]
        ];

       

        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
