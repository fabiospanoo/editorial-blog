<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function articles()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('article', compact('articles'));
    }

    public function createArticle()
    {
        return view('article.create');
    }

    public function contact()
    {
        return view('contact');
    }
}
