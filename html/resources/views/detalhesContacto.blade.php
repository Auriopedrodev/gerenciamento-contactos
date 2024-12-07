@extends('header')

@section('content')
<div class="container mt-4">
  <div class="card">
    <div class="card-header">
      Detalhes do Contacto
    </div>
    <div class="card-body">
      <p><strong>ID:</strong> {{ $contacto->id }}</p>
      <p><strong>Nome:</strong> {{ $contacto->nome }}</p>
      <p><strong>Contacto:</strong> {{ $contacto->contacto }}</p>
      <p><strong>Email:</strong> {{ $contacto->email }}</p>
    </div>
    <div class="card-footer">
      
      <a href="{{ route('contactos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
</div>
@endsection