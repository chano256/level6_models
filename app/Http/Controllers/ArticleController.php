<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(5);

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $article = new Article();
        // $article->title = $request->title;
        // $article->article_text = $request->article_text;
        // $article->save();

        // Article::create($request->all());
        // Article::create($request->only(['title', 'article_post']));
        
        // Can also create this way to check if exists
        // $article = Article::where('title', $request->title)->where('user_id', auth()->id())->first();

        // if(!$article) {
        //     $article = Article::create([
        //             'title' => $request->title,
        //             'article_post' => $request->article_text
        //     ]);
        // } else {
        //     $article->update([
        //         'article_text' => $request->article_text
        //     ]);
        // }

        // // One line can be used to check the above code
        // $article = Article::firstOrCreate([
        //     'title' => $request->title,
        //     'article_text' => $request->article_text
        // ]);

        // $article->chapters()->create($request->chapters);

        Article::create($request->all());
        
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
