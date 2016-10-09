<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('front.articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        dd($article->published_at->addDays(8)->format('Y-m-d')); // ->diffForHumans()

        return view('front.articles.show', compact('article'));
    }

    public function create()
    {
        //$model = new App\Article()
        return view('front.articles.create');
    }


    public function store(CreateArticleRequest $request) // Request
    {
        /*$this->validate($request, [
            'title' => 'required|min:5',
            'body' => 'required',
            'published_at' => 'required|date'
        ]);*/

        //$input = Request::all();
        //$input['published_at'] = Carbon::now();

        //Article::create($input);
        $article = new Article($request->all());
        $article->save();

        return redirect('front.articles');
    }
}
