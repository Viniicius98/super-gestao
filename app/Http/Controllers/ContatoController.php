<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
       /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
    */
        //$contato = new SiteContato();
        //$contato->fill($request->all());
        //$contato->create($request->all());

        //print_r($contato->getAttributes());

        //$contato->save();
        $motivo_contatos = MotivoContato::all();

        return view('site.contato',['motivo_contatos'=>$motivo_contatos]); 

        


        // return view('site.contato',['nome' => $nome]); //array associativo
        // return view('site.contato',compact('nome')); //Compact
        // return view('site.contato')->with('nome',$nome); // with

    }

    public function salvar(Request $request){

       

        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone'=> 'required',
            'email'=> 'required',
            'motivo_contato'=> 'required',
            'mensagem'=> 'required|max:2000',
        ]);
     

        SiteContato::create($request->all());
    }
}
