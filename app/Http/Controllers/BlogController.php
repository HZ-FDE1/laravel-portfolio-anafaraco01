<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function show()
    {
        return view('blog', [
            'articles' => Article::take(3)->latest()->get()
        ]);
    }
}
