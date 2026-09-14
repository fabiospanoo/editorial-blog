<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function articles()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('articles', compact('articles'));
    }

    public function article(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function createArticle()
    {
        return view('articles.create');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSend(Request $request)
    {
        $request->validate([
            'name'    => 'required|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required',
        ]);

        Mail::to(config('mail.from.address'))
            ->send(new ContactMessage($request->name, $request->email, $request->message));

        return back()->with('success', 'Messaggio inviato con successo.');
    }
}
