

<style>
  body,form{
    background-color: rgba(12, 1, 134, 0.429);
    display: flex;
    justify-content: center;
    align-items: center;
    grid-gap: 10px;
    flex-direction: column;
  }
</style>
<h1>Create está aqui</h1>


<form  action=" {{ route('supports.store')}} " method="POST">
  @csrf()
  <input type="text" placeholder="assunto" name="subject">
  <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição"></textarea>
  <button type="submit">Enviar</button>
</form>