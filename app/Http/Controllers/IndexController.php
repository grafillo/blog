<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use App\Http\Requests\PostRequest;
use App\Models\Autor;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (){

        $content = Post::orderBy('id', 'desc')->paginate(5);

        return view('index',['content'=>$content]);
    }

    public function create (){

        return  view('create');
    }


    public function addtopic (PostRequest $req){

        $useruestions= new Post();
        $useruestions->title = $req-> input('title');
        $useruestions->description = $req-> input('message');
        $useruestions->name = $req-> input('autor');
        $useruestions->save();

        return redirect()->route('create')->with('success',"Ваша статья успешно добавлена!");

    }

    public function viewPost ($id) {

        $content = Post::where('id', $id)->first();
        return view('topic',['content'=>$content]);

    }

    public function addComment(CommentsRequest $req){

        $useruestions= new Comment();
        $useruestions->post_id = $req-> input('id');
        $useruestions->comment = $req-> input('comment');
        $useruestions->name = $req-> input('autor');
        $useruestions->save();

        return back();
    }

    public function autors ($id){

        $autor = Post::where('id',$id)->first()->name;
        $content = Post::where('name',$autor)->paginate(5);


        return  view('autors',['content'=>$content]);
    }

}
