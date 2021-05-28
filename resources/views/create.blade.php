@extends('layouts.main')
@section('titulo','Crear Post')
@section('content')

<form action="{{route('post.store')}}" method="post">
    @csrf


    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
    </div>
    
    <div class="form-group">
      <label for="texto">Texto</label>
      <textarea class="form-control" id="texto" name="texto" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" onclick="pregunta()">+ Crer</button>
  </form>
  <script language="JavaScript">
    function pregunta(){
        if (confirm('¿Se va a crear el post. Dese continuar?')){
           document.tuformulario.submit()
        }
    }
    </script>
@endsection