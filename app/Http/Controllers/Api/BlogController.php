<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $blogs = DB::table('blogs')
            ->join('blog_translates', ['blogs.id' => 'blog_translates.blog_id'])
            ->join('categories', ['blogs.category_id' => 'categories.id'])
            ->where('blog_translates.lang_id', $this->currentLocaleId)
            ->select('blogs.id','blogs.image','blogs.view', 'blog_translates.title', 'blog_translates.content','categories')
            ->get();

        return $blogs;
    }
}
