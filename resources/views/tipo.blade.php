@extends('adminlte::page')

@section('title', 'Tarefas Diarias')

@section('content_header')
    <h1> Aqui Estao suas Tarefas Diarias  !</h1>
@stop

@section('content')
    <div class="row">
        
         <div class="col-md-6">

         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro Tipos De Tarefas </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
              <div class="box-body">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">nome</label>
                  <input type="text" class="form-control" nome="nome_form" required>
                              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar Tarefa </button>
              </div>
            </form>
          </div>


        </div>

    </div>  
@stop