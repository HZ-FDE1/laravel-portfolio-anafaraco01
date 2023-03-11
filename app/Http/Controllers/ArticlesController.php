<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        // render a list of a resource

        $articles = Article::latest()->get();

        return view('articles.index', ['articles'=>$articles]);
    }

    public function show($article)
    {
        // show a single resource
        return view('articles.show', ['article' => Article::find($article)]);
    }

    public function create()
    {
        // shows a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {
        // persist or handles the new resource

        Article::create($this->validateArticle());

        return redirect('/blog');

    }

    public function edit($article)
    {
        // Show a view to edit an existing resource
        return view('articles.edit', ['article' => Article::find($article)]);
    }

    public function update(Article $article)
    {
        // Persist the edited resource
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/blog/' . $article->id);
    }

    public function destroy($id)
    {
        // Delete the resource
        Article::find($id)->delete();

        return redirect('/blog');
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
