<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index() {

        return view('clie');
    }

    public function adicionar(Request $request){

      //  dd($request->all());

       $cliente = new Cliente;
            
       $cliente->nome = $request->nome_form;
       $cliente->sexo = $request->sexo_form;
       $cliente->email = $request->email_form;
       $cliente->telefone = $request->telefone_form;
       $cliente->dataNascimento = $request->dataNascimento_form;
       $cliente->login = $request->login_form;
       $cliente->senha = $request->senha_form;

        $cliente->save();
    } 

}
