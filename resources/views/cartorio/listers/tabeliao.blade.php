<a href="{{ route('tabeliao.create') }}" class="btn btn-success float-right mt-5">Criar um novo</a>
<table class="table">
  <thead>
    <tr>
      <td class="col-4" scope="col">Id</td>
      <td class="col-4" scope='col'>nome</td>
      <td class="col-4" scope="col">ações</td>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $dice)
      <tr>
        <td>{{ $dice->id }}</td>
        <td>{{ $dice->nome }}</td>
        <td>
          <div class="d-flex justify-content-between">
            <a href="{{ route($forma . '.edit', $dice->id) }}" class="btn btn-outline-primary">editar</a>
            <form action="{{ route($forma . '.delete', $dice->id) }}" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-outline-danger">deletar</button>
          </div>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
