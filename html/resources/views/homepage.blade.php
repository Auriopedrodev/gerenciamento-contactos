@extends('header')

@section('content')
        <!-- As a link -->

        <div class="container">
  <!-- Botão para adicionar novo contacto -->
  <div class="d-flex justify-content-start mb-2" style="margin-left:130px">
    <button class="btn btn-success btn-sm">Adicionar novo contacto</button>
  </div>

  <!-- Tabela de contactos -->
  <div class="d-flex justify-content-center">
    <table class="table mt-3 table-bordered text-center" style="width: 80%;">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Contacto</th>
          <th scope="col">Email</th>
          <th scope="col">Configurações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button class="btn btn-primary btn-sm me-1">Editar</button>
            <button class="btn btn-secondary btn-sm">Detalhes</button>
            <button class="btn btn-danger btn-sm me-1">Excluir</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>
            <button class="btn btn-primary btn-sm me-1">Editar</button>
            <button class="btn btn-secondary btn-sm">Detalhes</button>
            <button class="btn btn-danger btn-sm me-1">Excluir</button>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry the Bird</td>
          <td>-</td>
          <td>@twitter</td>
          <td>
            <button class="btn btn-primary btn-sm me-1">Editar</button>
            <button class="btn btn-secondary btn-sm">Detalhes</button>
            <button class="btn btn-danger btn-sm me-1">Excluir</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

    
        
@endsection