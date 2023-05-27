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
</style>

<h1>Dúvida: {{ $support->id }}</h1>

<form action=" {{ route('supports.update', $support->id) }}" method="POST">
  @csrf
  <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
  <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body }} </textarea>
  <button type="submit">Salvar</button>
</form>