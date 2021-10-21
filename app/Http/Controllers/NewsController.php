<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $articles = News::with('user')->paginate(10);
        return view('pages.indexNews', compact('articles'));
    }
}
