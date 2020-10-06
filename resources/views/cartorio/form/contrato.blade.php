  <div class="form-group">
    <label for="tipo_contrato">Tipo contrato:</label>
    <input type="text" class="form-control" name="tipo_contrato" id="tipo_contrato"
      value="{{ $data->tipo_contrato ?? '' }}">
  </div>
  <div class="form-group">
    <label for="envolvido1">Envolvido 1:</label>
    <input type="text" class="form-control" name="envolvido1" id="envolvido1" value="{{ $data->envolvido1 ?? '' }}">
  </div>
  <div class="form-group">
    <label for="envolvido2">Envolvido 2:</label>
    <input type="text" class="form-control" name="envolvido2" id="envolvido2" value="{{ $data->envolvido2 ?? '' }}">
  </div>
  <div class="form-group">
    <label for="data_contrato">Data do Contrato:</label>
    <input type="date" class="form-control" name="data_contrato" id="data_contrato"
      value="{{ $data->data_contrato ?? '' }}">
  </div>
  <div class="form-group">
    <label for="valor">Valor:</label>
    <input type="text" class="form-control" name="valor" id="valor" value="{{ $data->valor ?? '' }}">
  </div>

  <div class="form-group">
    <label for="valor">Tabeliao:</label>
    <select name="tabeliao" id="tabeliao">
      @foreach ($tabelioes as $tabeliao)
          <option value="{{ $tabeliao->nome }}">{{ $tabeliao->nome }}</option>
      @endforeach
    </select>
  </div>
