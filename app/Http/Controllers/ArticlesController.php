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

    public function show(Article $blog)
    {
        // show a single resource
        return view('articles.show', ['article' => $blog]);
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

    public function edit(Article $blog)
    {
        // Show a view to edit an existing resource
        return view('articles.edit', compact('blog'));
    }

    public function update(Article $blog)
    {
        // Persist the edited resource
        $blog->update($this->validateArticle());

        return redirect('/blog/' . $blog->id);
    }

    public function destroy($id)
    {
        // Delete the resource
        Article::findOrFail($id)->delete();

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
