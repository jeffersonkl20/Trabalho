<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoTarefa;

class TipoTarefaController extends Controller
{

    public function index() {

        return view('tipo');
    }

    public function adicionar (Request $request) {

        $tipo_tarefa = new TipoTarefa;

        $tipo_tarefa->nome = $request->nome_form;

        $tipo_tarefa->save();
    }
}
