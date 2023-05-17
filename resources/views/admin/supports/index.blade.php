<style>
  body{
    background-color: rgba(12, 1, 134, 0.429);
    display: flex;
    justify-content: center;
    align-items: center;
    grid-gap: 10px;
    flex-direction: column;
  }
</style>

<h1>Listagem do supporte</h1>
<a href="{{ route('supports.create')}}">Criar duvida</a>
<table>
  <thead>
    <th>assuntos</th>
    <th>status</th>
    <th>descrição</th>
    <th></th>
  </thead>
  <tbody>
    @foreach ($supports as $support)
      <tr>
        <td>{{ $support->subject }}</td>
        <td>{{ $support->status }}</td>
        <td>{{ $support->body }}</td>
        <td>></td>
      </tr>    
    @endforeach
  </tbody>
</table>