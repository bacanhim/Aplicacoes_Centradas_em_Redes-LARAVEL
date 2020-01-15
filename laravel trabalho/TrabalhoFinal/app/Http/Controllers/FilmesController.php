<?php

namespace App\Http\Controllers;

use App\Filme;
use Illuminate\Http\Request;

class filmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $filmes=Filme::all()->sortByDesc("pontuacao");
        return view("public.ver-filmes",compact("filmes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      
        return view("private.create-filme");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        request()->validate([
            "nome"=>"required|min:1",
            "categoria"=>"required|min:0",
            "pontuacao"=>"required|numeric|min:0|max:10",
        ]);
        $filme = new filme;
        $filme->nome=request("nome");
        $filme->categoria=request("categoria");
        $filme->pontuacao=request("pontuacao");
        $filme->imagem=request("imagem");
        $filme->owner_id=auth()->user()->id;
        $filme->save();
        $plat = array();
        foreach ($data as $key => $value) {
            if($key!="nome" and $key!="categoria" and $key!="pontuacao" and $key!="imagem"){
                array_push($plat, request($key));
            }
        }
        

        return redirect("/home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $filme= filme::findOrFail($id);
        
        return view("public.showFilme",compact("filme"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $filme = filme::findOrFail($id);
        return view("private.edit-filme",compact("filme"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data = $request->all();
        request()->validate([
            "nome"=>"required|min:1",
            "categoria"=>"required|min:0",
            "pontuacao"=>"required|numeric|min:0|max:10",
        ]);
        $filme = filme::findOrFail($id);
        $filme->update(request(["nome","categoria","pontuacao","imagem"]));        
        $plat = array();
        foreach ($data as $key => $value) {
            if($key!="nome" and $key!="categoria" and $key!="pontuacao" and $key!="imagem"){
                array_push($plat, request($key));
            }
        }
        return redirect("/home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $filme = filme::findOrFail($id);    
        $filme->delete();
        return redirect("/home");
    }
    
    public function search(Request $request){
        if(request("invert")){
            if(request("pontuacao")){
                $filmes= filme::where("nome",'like', '%' . request("nome") . '%')->where("pontuacao",">=",request("pontuacao"))->where("categoria",'like', '%' . request("categoria") . '%')->get()->sortBy("pontuacao");
            }else{
                $filmes= filme::where("nome",'like', '%' . request("nome") . '%')->where("categoria",'like', '%' . request("categoria") . '%')->get()->sortBy("pontuacao");
            }
        }else{
            if(request("pontuacao")){
                $filmes= filme::where("nome",'like', '%' . request("nome") . '%')->where("pontuacao",">=",request("pontuacao"))->where("categoria",'like', '%' . request("categoria") . '%')->get()->sortByDesc("pontuacao");
            }else{
                $filmes= filme::where("nome",'like', '%' . request("nome") . '%')->where("categoria",'like', '%' . request("categoria") . '%')->get()->sortByDesc("pontuacao");
            }
        }
       
        
        return view("public.ver-filmes",compact("filmes"));
    }
}
