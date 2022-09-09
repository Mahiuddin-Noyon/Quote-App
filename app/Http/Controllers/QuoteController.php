<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public function index()
    {
        $data = Http::get("https://raw.githubusercontent.com/ajzbc/kanye.rest/master/quotes.json")->json();

        // $ch = Http::get("https://api.kanye.rest");
        // $ch = curl_init("https://api.kanye.rest");
        // return curl_exec($ch);




        return view('quote', ['data' => $data]);
    }
}
