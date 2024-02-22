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

        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone'=> 'required',
            'email'=> 'email',
            'motivo_contatos_id'=> 'required',
            'mensagem'=> 'required|max:2000',
        ];

        $feedback = [
            //'nome.required' => 'O campo nome precisa ser preenchido',
            'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'nome.unique' => 'O nome informado já está em uso',
            //'telefone.required' => 'O campo telefone precisa ser preenchido',
            'email.email' => 'O campo email precisa ser válido',
            //'motivo_contatos_id.required'=> 'O campo motivo precisa ser preenchido',
            //'mensagem.required' => 'O campo mensagem precisa ser preenchido',
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',

            'required'=> 'O campo :attribute precisa ser preenchido'
        ];


        $request->validate($regras,$feedback) ;
     

        SiteContato::create($request->all());

        return redirect()->route('site.index');
    }
}
