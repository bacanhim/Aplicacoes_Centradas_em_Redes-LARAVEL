<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class seriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $series=Serie::all()->sortByDesc("pontuacao");
        return view("public.ver-series",compact("series"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      
        return view("private.create-serie");
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
        $serie = new serie;
        $serie->nome=request("nome");
        $serie->categoria=request("categoria");
        $serie->pontuacao=request("pontuacao");
        $serie->imagem=request("imagem");
        $serie->owner_id=auth()->user()->id;
        $serie->save();
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
     * @param  \App\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $serie= serie::findOrFail($id);
        
        return view("public.showSerie",compact("serie"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $serie = serie::findOrFail($id);
        return view("private.edit-serie",compact("serie"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\serie  $serie
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
        $serie = serie::findOrFail($id);
        $serie->update(request(["nome","categoria","pontuacao","imagem"]));        
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
     * @param  \App\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $serie = serie::findOrFail($id);    
        $serie->delete();
        return redirect("/home");
    }
    
    public function search(Request $request){
        if(request("invert")){
            if(request("pontuacao")){
                $series= serie::where("nome",'like', '%' . request("nome") . '%')->where("pontuacao",">=",request("pontuacao"))->where("categoria",'like', '%' . request("categoria") . '%')->get()->sortBy("pontuacao");
            }else{
                $series= serie::where("nome",'like', '%' . request("nome") . '%')->where("categoria",'like', '%' . request("categoria") . '%')->get()->sortBy("pontuacao");
            }
        }else{
            if(request("pontuacao")){
                $series= serie::where("nome",'like', '%' . request("nome") . '%')->where("pontuacao",">=",request("pontuacao"))->where("categoria",'like', '%' . request("categoria") . '%')->get()->sortByDesc("pontuacao");
            }else{
                $series= serie::where("nome",'like', '%' . request("nome") . '%')->where("categoria",'like', '%' . request("categoria") . '%')->get()->sortByDesc("pontuacao");
            }
        }
        
        return view("public.ver-series",compact("series"));
    }
}
