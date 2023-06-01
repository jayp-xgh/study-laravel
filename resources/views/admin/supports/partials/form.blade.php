@csrf()
<label for="assunto">assunto</label>
<input type="text" id="assunto" placeholder="exemplo: " name="subject" 
  value="{{ $support->subject ?? old('subject') }}">
<label for="descricao">descrição</label>
<textarea name="body" id="descricao" cols="30" rows="5" placeholder="exemplo:">{{ $support->subject ?? old('body') }}</textarea>
<button type="submit">Enviar</button>