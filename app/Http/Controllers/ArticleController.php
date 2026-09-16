<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); 
        return view('articles', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required|max:255',
            'author'   => 'required|max:255',
            'category' => 'required|max:255',
            'content'  => 'required',
            'img'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $img = $request->hasFile('img')
            ? $request->file('img')->store('images', 'public')
            : null;

        Article::create([
            'title'    => $request->title,
            'author'   => $request->author,
            'category' => $request->category,
            'content'  => $request->content,
            'img'      => $img
        ]);

        return redirect()->route('articles')->with('message', 'Articolo creato con successo!!!');
    }
}