@extends('adminlte::page')

@section('title', 'Tarefas')

@section('content_header')
    <h1> Suas Tarefas !</h1>
@stop

@section('content')
    <div class="row">
        
         <div class="col-md-6">

         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de Tarefas </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
              <div class="box-body">

                {{ csrf_field() }}

                
                <div class="form-group">
                  <label for="exampleInputEmail1">titulo</label>
                  <input type="text" class="form-control" name="titulo_form" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">clienteresponsavel</label>
                  <input type="text" class="form-control" name="clienteresponsavel_form"required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">privacidade</label>
                  <input type="text" class="form-control" name="privacidade_form"required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">descricao</label>
                  <input type="text" class="form-control" name="descricao_form"required >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">tipo</label>
                  <input type="text" class="form-control" name="tipo_form"required >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">status</label>
                  <input type="text" class="form-control" name="status_form"required >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">data</label>
                  <input type="text" class="form-control" name="data_form"required >
                </div>
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar Tarefa </button>
              </div>
            </form>
          </div>


        </div>

    </div>  
@stop