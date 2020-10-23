<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index($id){
        $blogs = Blog::where('id_usuario', $id)->take(50)->get();
        
        return view('blogs.index')->with('blogs', $blogs)->with('user', $id);
    }

    public function store(Request $request){
        $blog = new Blog;
        $blog->titulo_blog = $request->input('titulo');
        $blog->contenido_blog = $request->input('contenido');
        $blog->id_usuario = $request->input('id_usuario');

        if($blog->save()){
            
            return redirect('blogs/'.$blog->id_usuario);
        }
    }

}
