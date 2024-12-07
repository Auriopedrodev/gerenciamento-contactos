@extends('header')

@section('content')
<div class="container mt-4">
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('contactos.update', $contacto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-3">
      <div class="col">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="{{ old('nome', $contacto->nome) }}">
      </div>
      <div class="col">
        <label for="contacto" class="form-label">Contacto</label>
        <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Digite o contacto" value="{{ old('contacto', $contacto->contacto) }}">
      </div>
      <div class="col">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email" value="{{ old('email', $contacto->email) }}">
      </div>
    </div>

    <div class="d-flex gap-2">
      <button type="submit" class="btn btn-success">Atualizar</button>
      <a href="{{ route('contactos.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
  </form>
</div>
@endsection