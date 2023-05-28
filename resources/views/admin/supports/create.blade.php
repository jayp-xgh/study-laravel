

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


@if($errors->any())
  @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
  @endforeach
@endif
<form  action=" {{ route('supports.store')}} " method="POST">
  @csrf()
  <label for="assunto">assunto</label>
  <input type="text" id="assunto" placeholder="exemplo: " name="subject" value="{{ old('subject') }}">
  <label for="descricao">descrição</label>
  <textarea name="body" id="descricao" cols="30" rows="5" placeholder="exemplo:">{{ old('body') }}</textarea>
  <button type="submit">Enviar</button>
</form>