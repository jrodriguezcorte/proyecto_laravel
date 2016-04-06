<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return string
     */
    public function index() {

     //   $articles = Article::all();
    //    $articles = Article::latest()->get();

        $articles = Article::orderBy('title','asc')->get();

        return view('articles.index', compact('articles'));

    }

    public function show($id) {

        $article = Article::findOrFail($id);

      //  dd($article);

        return view('articles.show', compact('article'));

    }

    public function create() {

        $tags = \App\Tag::lists('name','id');
        return view('articles.create',compact('tags'));

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
/*
        $this->validate($request, [
            'title' => 'required | min:3',
            'body' => 'required',
        ]);
        Article::create($request->all());
        return redirect('articles');
*/

        $this->validate($request, [
            'title' => 'required | min:3',
            'body' => 'required',
        ]);

        $tagsId = $request->input('tag_list');

        $article = new Article($request->all());
        // voy a guardar mi usuario autenticado dentro de mi articulo
        $article = Auth::user()->articles()->save($article);

        $article->tags()->attach($tagsId);

        // flash temporary
        // put no es temporal
     //   \Session::flash('flash_message', 'Your article has been created');

        return redirect('articles')->with([
            'flash_message' => 'Your article has been created'
        ]);
    }

    /*
    public function store(CreateArticleRequest $request) {

        Article::create($request->all());

        //  $input['published_at'] = Carbon::now();

        // obtener un parametro en particular
        // $input = Request::get('body');



        return redirect('articles');

    }
    */

    public function edit($id) {

        $article = Article::findOrFail($id);

        $tags = \App\Tag::lists('name','id');

     //   $article_tags = \App\Tag::with('tags')->whereId($id)->first();

     //   $article->tag_list->toArray()

        return view('articles.edit', compact('article','tags'));

    }

    public function update($id, Request $request) {

        $article = Article::findOrFail($id);

        $this->validate($request, [
            'title' => 'required | min:3',
            'body' => 'required'
        ]);

        $tagsId = $request->input('tag_list');

        $article->tags()->sync($tagsId);

        $article->update($request->all());

        return redirect('articles');

    }
}
