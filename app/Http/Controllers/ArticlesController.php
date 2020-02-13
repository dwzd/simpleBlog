<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
//use Request;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::latest()->published()->get();
        return view('articles/index', compact('articles'));

//        return $article->toArray();
//        return '<h1>Articles Page!</h1>';
    }

    public function show($id){
        $article = Article::findOrFail($id);
//        dd($article->published_at->diffForHumans());
//        dd($article);
        return view('/articles/show', compact('article'));
//        return $id;
    }

    public function create(){
        return view('/articles.create');
    }

    public function store(CreateArticleRequest $request){
//        $input = $request->all();
//        return $input;
//        $input['published_at'] = Carbon::now();
        Article::create(array_merge(['user_id' => \Auth::user()->id],$request->all()));
        return redirect('/articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(CreateArticleRequest $request, $id){
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('/articles');
    }

}
