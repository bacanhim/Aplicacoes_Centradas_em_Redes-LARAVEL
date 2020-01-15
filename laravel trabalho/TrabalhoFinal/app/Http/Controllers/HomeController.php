<?php

namespace App\Http\Controllers;
use App\Filme;
use App\Serie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resFilmes=Filme::where('owner_id',auth()->user()->id)->get();
        $resSeries=Serie::where('owner_id',auth()->user()->id)->get();
        return view('home',['filmes'=>$resFilmes,'series'=>$resSeries]);
    }
}
