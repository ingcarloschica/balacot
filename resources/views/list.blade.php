@extends('layouts.main')
@section('titulo','Listado de Posts')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Título</th>
        <th scope="col">Texto</th>
        <th scope="col" colspan="2" class="text-center">Acción</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{$post['id']}}</th>
            <th>{{$post['title']}}</th>
            <th>{{$post['body']}}</th>
            <th><a class="btn btn-success btn-sm" href="{{route('post.edit',$post['id'])}}">Editar</a></th>
            <form action="{{route('post.destroy',$post['id'])}}" method="post">
                @csrf
                @method('delete')
                <th><button class="btn btn-danger btn-sm" type="submit" onclick="pregunta()">Eliminar</button></th>
            </form>
          </tr>
        @endforeach
    </tbody>
  </table>
  <script language="JavaScript">
    function pregunta(){
        if (confirm('¿Estas seguro de Eliminar el post?')){
           document.tuformulario.submit()
        }
    }
    </script>
@endsection