@if ($forma == 'tabeliao')

  @include('cartorio.form.tabeliao')

@elseif($forma == 'contrato')

  @include('cartorio.form.contrato')  
  
@else

  @include('cartorio.form.certidao')

@endif
<div class="form-group">
  <button type="submit" class="btn btn-outline-success">Salvar</button>
</div>
