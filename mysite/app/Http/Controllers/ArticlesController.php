<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller
{
    # LIST
    public function index() // action home
    {
        #$articles = \App\article::all(); # namespace. \ para começar na raiz
        $articles = Article::all();
        #$articles = auth()->user()->articles; # exemplo: projs de user com login atual
        #return $articles; // retorna em json
        return view('articles.index', ['articles' => $articles]);
        #return view('articles.index', compact($articles);  # igual a ['article' => $article], apenas quando mesmo nome
    }
    # CREATE
    public function create()
    {
        return view('articles.create');
    }
    public function store() # recebe do form e guarda os dados na BD
    {
        $validated = request()->validate([
            'title' => ['required', 'min:2', 'max:255'],
            'content' => 'required'
        ]);
        #return $validated;

        $article= Article::create($validated);if(request('featured')=='on') {$article->featured=1;$article->save();}

        return redirect('/articles');
    }
    public function storeAlt()
    {
        #return request()->all();
        #return request('title');
        $article = new article(); // criar novo
        // atribuir dados
        $article->title = request('title');
        $article->content = request('title');
        $article->save();
        return redirect('/articles');
    }
    # EDIT / UPDATE
    public function edit($id)
    {
        #dd('hi'); # imprimir para debug
        $article = article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    public function update(article $article) {
        $validated = request()->validate([
            'title' => ['required', 'min:3', 'max:200'],
            'content' => 'required',
            'featured' => 'required'
        ]);
        $article->update($validated);
        return redirect('/articles');
    }
    public function updateValAlt(article $article) {
        $article->update(
            request()->validate([
                'title' => 'required',
                'content' => 'required',
                'featured' => 'required'
            ])
        );
        return redirect('/articles');
    }
    public function updateAlt(article $article) {
        $article->update(request(['title', 'content', 'featured']));
        return redirect('/articles');
    }
    public function updateAlt2($id) {
        #dd(request()->all()); # debug: die and dump
        $article = article::find($id);
        $article->title = request('title');
        $article->content = request('content');
        $article->featured = request('featured');
        $article->save();
        return redirect('/articles');
    }
    # DELETE
    public function destroy($id)
    {
        $article = article::findOrFail($id)->delete();
        # OR
        #$article = article::findOrFail($id)
        #$article->delete();
        return redirect('/articles');
    }

    # ORDER









    # SHOW
    public function show($id)
    {
        $article = article::findOrFail($id);
        #return $article; # json
        return view('articles.show', compact('article'));  # compact ou ['article' => $article]
    }
    public function showAlt(article $article)
    {
        return view('articles.show', compact('article'));  # compact ou ['article' => $article]
    }
    # EXER
    public function first()
    {
        $article = article::all()->first(); # funciona sem all()
        return view('articles.show', compact('article'));
    }
    public function last()
    {
        $article = article::all()->last(); # tem de ter all()
        #$article = article::last()->get(); # alternativa
        return view('articles.show', compact('article'));
    }
}
