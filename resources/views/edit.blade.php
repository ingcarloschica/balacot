@extends('layouts.main')
@section('titulo','Editar Post')
@section('content')
@if (isset($status))
    
    <div class="alert alert-success">
        {{ $status }}
    </div>
@endif
<form action="{{route('post.update',$post['id'])}}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value="{{$post['title']}}">
    </div>
    
    <div class="form-group">
      <label for="texto">Texto</label>
      <textarea class="form-control" id="texto" name="texto" rows="5">{{$post['body']}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" onclick="pregunta()">Actualizar</button>
  </form>
  <script language="JavaScript">
    function pregunta(){
        if (confirm('¿Estas seguro de actualizar el post?')){
           document.tuformulario.submit()
        }
    }
    </script>
@endsection