  <div class="form-group">
    <label for="tipo_certidao">Tipo certidao:</label>
    <input type="text" class="form-control" name="tipo_certidao" id="tipo_certidao"
      value="{{ $data->tipo_certidao?? '' }}">
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
    <label for="data_certidao">Data do Certidao:</label>
    <input type="date" class="form-control" name="data_certidao" id="data_certidao"
      value="{{ $data->data_certidao ?? '' }}">
  </div>
  <div class="form-group">
    <label for="valor">Tabeliao:</label>
    <select name="tabeliao" id="tabeliao">
      @foreach ($tabelioes as $tabeliao)
        <option value="{{ $tabeliao->nome }}">{{ $tabeliao->nome }}</option>
      @endforeach
    </select>
  </div>
