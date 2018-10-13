<div class="form-group">
    <label for="exampleInputEmail1">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="emailHelp" 
        value="{{isset($registro->titulo) ? $registro->titulo : ''}}" placeholder="Título da Notícia" required>           
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Subtítulo</label>
    <input type="text" class="form-control" id="subtitulo" name="subtitulo" aria-describedby="emailHelp" 
        value="{{isset($registro->subtitulo) ? $registro->subtitulo : ''}}" placeholder="Subtítulo da Notícia" required>            
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Descriçao</label>
    <input type="text" class="form-control" id="descricao" name="descricao" rows="9"
        value="{{isset($registro->descricao) ? $registro->descricao : ''}}" required>
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Corpo da notícia</label>
    <textarea type="text" class="form-control" id="corpoNoticia" name="corpoNoticia" rows="8" required>{{isset($registro->corpoNoticia) ? $registro->corpoNoticia : ''}}</textarea>
</div>

<div class="custom-file">
    <input type="file" class="btn btn-outline-primary" id="imagem" name="imagem" lang="en">

    @if(isset($registro->imagem))
        <br><br>       
        <label for="exampleFormControlTextarea1">Capa da notícia</label>
        <img width="90" src="{{asset($registro->imagem)}}">
    @endif
</div>
<br><br>