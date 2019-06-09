<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_Tarefa;

class TipoTarefaController extends Controller
{
    public function index() {

        return view('tipo');
    }
    
    public function adicionar(Request $request){

       // dd($request->all());

       $tipos_tarefas = new Tipo_Tarefa;


    
       $tipos_tarefas->nome = $request->nome_form;

         $tipos_tarefas->save();
 
    }
}
