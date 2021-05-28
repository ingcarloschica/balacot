<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CrudController extends Controller
{
    public function index()
    {

            $response = http::get('https://jsonplaceholder.typicode.com/posts');
            $posts = $response->json();
            return view('list',compact('posts'));
    }

    public function edit($id)
    {
        $response = http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        $post = $response->json();
       
        return view('edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $response = http::withHeaders([
            'Content-type' =>  'application/json; charset=UTF-8'
        ])
        ->put('https://jsonplaceholder.typicode.com/posts/'.$id,[
            'id'      => $id,
            'title'   => $request['titulo'],
            'body'    => $request['texto'],
            'userId'  => 1,
        ]);

        $post = $response->json();
        $status = 'Registro Actualizado';

        return view('edit',compact('post','status'));
    }

    public function destroy($id){
        $response = http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);

        return redirect()->route('post.index')->with('status','Registro Eliminado');

    }

}
