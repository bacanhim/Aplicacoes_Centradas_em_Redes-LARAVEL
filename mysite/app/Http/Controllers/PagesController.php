<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function home() {
        return view('welcome', [
            'text' => 'VARIAVEL NA PAGES CONTROLLAR',
            'title' => request('title', 'THIS IS TITLE'),
        ]);
    }
    public function about() {
        return view('about');
    }
    public function contact() {
        return view('contact');
    }
}
