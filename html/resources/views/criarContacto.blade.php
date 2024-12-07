@extends('header')


@section('content')

<div class="container mt-4">
  <!-- Formulário de Inserção -->
  <form>
    <div class="row mb-3">
      <div class="col">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
      </div>
      <div class="col">
        <label for="contacto" class="form-label">Contacto</label>
        <input type="text" class="form-control" id="contacto" placeholder="Digite o contacto">
      </div>
      <div class="col">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Digite o email">
      </div>
    </div>

    <!-- Botões alinhados -->
    <div class="d-flex gap-2">
      <button type="submit" class="btn btn-success">Adicionar</button>
      <!-- Botão para sair -->
      <button type="button" class="btn btn-danger" >Sair</button>
    </div>
  </form>
</div>



@endsection