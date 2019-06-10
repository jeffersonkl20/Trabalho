<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefaController extends Controller
{
     public function index() {

        return view('tare');
    }

    public function adicionar (Request $request){
        
      // dd($request->all());

          $tarefa = new Tarefa ;


            $tarefa->titulo = $request->titulo_form;
            $tarefa->clienteresponsavel = $request->clienteresponsavel_form;
            $tarefa->privacidade = $request->privacidade_form;
            $tarefa->descricao = $request->descricao_form;
            $tarefa->tipo = $request->tipo_form;
            $tarefa->status = $request->status_form;
            $tarefa->data = $request->data_form;

            $tarefa->save();
    }

}   
