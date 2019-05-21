<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($type)
    {
        $category_paginate = request()->query('paginate') ?? 4;
        switch ($type){
            case 'place':
                $category_type = 2;
                break;
            case 'service':
                $category_type = 0;
                break;
            case 'gallery':
                $category_type = 1;
                break;
            case 'blog':
                $category_type = 3;
                break;
            default:
                $category_type = 0;
        }
        $categories = DB::table('categories')
            ->join('category_translates', ['categories.id' => 'category_translates.category_id'])
            ->where(['category_translates.lang_id' => $this->currentLocaleId,'isVisible' => 1, 'type' => $category_type])
            ->select('categories.id','categories.logo','categories.color','category_translates.name')
            ->paginate($category_paginate);
        return $categories;
    }
}
