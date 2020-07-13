<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

class SearchController extends Controller
{
    // Searches based off of similarities to the title of the articles
    public function titleSearch(Request $request)
    {
        $param = $request->input('title');
        return DB::table('articles')->where('title', 'like', "%{$param}%")->get();
    }

    public function tagSearch()
    {
        // Searches based off of the tag
    }
}
