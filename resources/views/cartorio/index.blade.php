@extends('layout.site')

@section('title', 'Listagem')

@section('content')
  <label class="display-3">Litagem</label>
  @if ($forma == 'tabeliao')

    @include('cartorio.listers.tabeliao')

  @elseif($forma == 'contrato')

    @include('cartorio.listers.contrato')

  @else

    @include('cartorio.listers.certidao')
    
  @endif

@endsection
