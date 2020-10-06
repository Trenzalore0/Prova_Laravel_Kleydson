<a href="{{ route('contrato.create') }}" class="btn btn-success float-right mt-5">Criar um novo</a>
<table class="table">
  <thead>
    <tr>
      <td class="col-1" scope="col">Id</td>
      <td class="col-1" scope="col">tipo_contrato</td>
      <td class="col-2" scope="col">envolvido1</td>
      <td class="col-2" scope="col">envolvido2</td>
      <td class="col-1" scope="col">data_contrato</td>
      <td class="col-1" scope="col">valor</td>
      <td class="col-1" scope="col">tabeliao</td>
      <td class="col-3" scope="col">ações</td>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $dice)
      <tr>
        <td>{{ $dice->id }}</td>
        <td>{{ $dice->tipo_contrato }}</td>
        <td>{{ $dice->envolvido1 }}</td>
        <td>{{ $dice->envolvido2 }}</td>
        <td>{{ $dice->data_contrato }}</td>
        <td>{{ $dice->valor }}</td>
        <td>{{ $dice->tabeliao }}</td>
        <td>
          <div class="d-flex justify-content-between">
            <a href="{{ route($forma . '.edit', $dice->id) }}" class="btn btn-outline-primary">editar</a>
            <form action="{{ route($forma . '.delete', $dice->id) }}" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-outline-danger">deletar</button>
            </form>
          </div>

        </td>
      </tr>
    @endforeach
  </tbody>
</table>
