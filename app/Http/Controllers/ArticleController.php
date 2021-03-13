<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
      $articles = Article::latest()->paginate(20);

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

        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'titlcomme'=>'required|min:3',
            'description'=>'required'

        ]);


      Article::create($request->all());
     //  return $this->index();
      
      return redirect()->route('articles.index')->with('success', 'Article ajouté avec Succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.view', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        $request->validate([
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Article Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec Succès');
    }


    public function add_like($id){

        $article = Article::find($id);



        $article->nbre_like++;

        $article->save();


        return back();


    }

    public function unlike ($id)
    {
        $article = Article::find($id);

        $article->nbre_unlike++;

        $article->save();

        return back();
    }




}
