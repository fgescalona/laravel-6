<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    
    public function index()
    {
        // Render a list of a resource
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // Show a single redource

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        // Shows a view to create a new resource
        
        return view('articles.create');

    }

    public function store()
    {
        // Persiste the new resource

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        // Show a view to edit a existing resource

        return view('articles.edit', ['article' => $article]);
    }

    public function update($id)
    {
        // Persist the edited resource

        $article->update($this->validateArticle());

        return redirect($article->path());
        
    }

    public function destroy()
    {
        // Delete the resource
        
    }

    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

}
