@extends('adminlte::page')

@section('title', 'Cadastro de Clientes')

@section('content_header')
    <h1> Aqui iremos cadastra todos os Clientes !</h1>
@stop

@section('content')
<div class="row">
        
        <div class="col-md-6">

        <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Cadastro De Clientes </h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="POST">
             <div class="box-body">

               
               {{ csrf_field() }}

               <div class="form-group">
                 <label for="exampleInputEmail1">nome</label>
                 <input type="text" class="form-control" name="nome_form" required >
               </div>           
               <div class="form-group">
                 <label for="exampleInputPassword1">sexo</label>
                 <input type="text" class="form-control" name="sexo_form"required >
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">email</label>
                 <input type="email" class="form-control" name="email_form"required >
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">telefone</label>
                 <input type="number" class="form-control" name="telefone_form"required >
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">dataNascimento</label>
                 <input type="number" class="form-control" name="dataNascimento_form" required>
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">login</label>
                 <input type="text" class="form-control" name="login_form"required >
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">senha</label>
                 <input type="password" class="form-control" name="senha_form" placeholder="Password">
               </div>
               
             <!-- /.box-body -->
             <div class="box-footer">
               <button type="submit" class="btn btn-primary">Salvar Novo</button>
             </div>
           </form>
         </div>


       </div>

   </div>             
@stop