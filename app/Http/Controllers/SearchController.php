<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class SearchController extends Controller
{
    public function titleSearch(Article $article_title) {
        // Searches based off of similarities to the title of the articles
        
    }

    public function tagSearch() {
        // Searches based off of the tag
    }
}
