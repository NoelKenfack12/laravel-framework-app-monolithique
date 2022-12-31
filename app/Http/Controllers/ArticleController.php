<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function articles()
    {
        return view('articles');
    }

    public function detailarticle($n)
    {
        return view('detailarticle')->with('numero', $n);
    }
}
