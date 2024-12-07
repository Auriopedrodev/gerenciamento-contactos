@extends('header')

@section('content')
<div class="container mt-4">
        <p style="text-align: justify; margin-left: auto; margin-right: auto; width: 80%;">A nossa <strong>Central de Contactos</strong> está disponível para oferecer suporte eficiente e rápido a todas as suas necessidades. </p>
    </div>

<div class="container">
  <div class="d-flex justify-content-start mb-2" style="margin-left:130px">
    <a href="{{ route('contactos.create') }}" class="btn btn-success btn-sm">Adicionar novo contacto</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif

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
        @foreach($contactos as $contacto)
        <tr>
          <th scope="row">{{ $contacto->id }}</th>
          <td>{{ $contacto->nome }}</td>
          <td>{{ $contacto->contacto }}</td>
          <td>{{ $contacto->email }}</td>
          <td>
            <a href="{{ route('contactos.edit', $contacto->id) }}" class="btn btn-primary btn-sm me-1">Editar</a>
            <a href="{{ route('contactos.show', $contacto->id) }}" class="btn btn-secondary btn-sm">Detalhes</a>
            <form action="{{ route('contactos.destroy', $contacto->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm me-1" onclick="return confirm('Tem certeza?')">Excluir</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection