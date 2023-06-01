<style>
  body{
    height: 100vh;
  }
  body,form{
    display: flex;
    justify-content: center;
    align-items: center;
    grid-gap: 10px;
    flex-direction: column;
    background-color: #1f2533;
    color: #ccddff;
    font-family: 'Inter', sans-serif;
  }
  form{
    align-items: flex-start;

  }
  input, button, textarea{
    padding: 10px;
    border-radius: 5px;
    width: 300px;
    border: solid 2px #3d4b66;
    color: #ccddff;
    background: none;
    outline: none;
  }
  input:hover, textarea:hover{
    border-color: #9999ff; 
  }
  input:focus, textarea:focus{
    border-color: #ccddff; 
  }

  label{
    font-weight: 400;
  }
  button{
    width: 100px;
    border: solid 2px #9999ff;
    cursor: pointer;
  }
  button:hover{
    border-color: #99ffdd; 
    cursor: pointer;
  }
  table, thead, th, tbody, td{
    border: solid 1px #3d4b66;
    padding: 20px;
  }
  a{
    color: #ccddff;
    border: solid 2px #3d4b66;
    border-radius: 5px;
    padding: 10px;
    text-decoration: none; 
  }
  a:hover{
    color: #99ffdd;
    border-color: #99ffdd; 
  }
  
</style>
<h1>listinha de merda</h1>
<a href="{{ route('supports.create')}}">Criar duvida 🐒</a>
<table>
  <thead>
    <th>assuntos</th>
    <th>status</th>
    <th>descrição</th>
    <th>links</th>
  </thead>
  <tbody>
    @foreach ($supports as $support)
      <tr>
        <td>{{ $support['subject'] }}</td>
        <td>{{ $support['status'] }}</td>
        <td>{{ $support['body'] }}</td>
        <td>
          <a href="{{ route('supports.show', $support['id']) }}">ver 👺</a>
          <a href="{{ route('supports.edit', $support['id']) }}">editar 🐘</a>
        </td>
    </tr>   
    @endforeach
  </tbody>
</table>
