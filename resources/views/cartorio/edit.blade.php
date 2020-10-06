@extends('layout.site')

@section('title', 'edit')

@section('content')
  <form action="{{ route($forma.'.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('cartorio.form.form')
  </form>
@endsection
