<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UrlShortener;
use Illuminate\Support\Facades\Redirect;

class UrlShortenerController extends Controller
{
    //
    public function short(){

        UrlShortener::create([
            'url' => request()->input('url'),
            'shortened-url' => $this->shortener(request()->input('url'))
        ]);

        return back()->with('message', 'url shortened successfully');

    }

    function shortener($_url){
        return env('APP_URL') . '/' . substr(md5(mt_rand()), 0, 7) ;
    }

    function urlShortenerView(UrlShortener $urlShortener){

        // UrlShortener::where('shortened-url')

        return Redirect::away($urlShortener->url);

    }
}
