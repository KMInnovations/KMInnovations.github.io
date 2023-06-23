<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use PHPHtmlParser\Dom;
use Illuminate\Http\Request;

class Scrape extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function scrape_1(Request $request){
        if(!$request->city){
            $request= new Request;
            $request->city = 'dallas';
            $request->state = 'tx';
            $request->search = 'restaurant';
        }
        // dd($request);
        $city = $request->city;
        $state = $request->state;
        $search = $request->search;
        $response = Http::get("https://www.yellowpages.com/". 
        "search?search_terms=$search&geo_location_terms=$city%2C+$state");
        $htmlString = $response->body();
        // dd($htmlString);
        $dom = new Dom;
        $dom->loadStr($htmlString);

        $data = [
            'request'=>$request,
            'dom'=>$dom,
        ];
        return view('scrape.scrape_1', $data);
    }
}
