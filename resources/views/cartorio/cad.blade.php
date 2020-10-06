@extends('layout.site')

@section('title', 'Cadastro')

@section('content')
  <form action="{{ route($forma.'.store') }}" method="POST">
      @csrf
      @include('cartorio.form.form')
  </form>
@endsection