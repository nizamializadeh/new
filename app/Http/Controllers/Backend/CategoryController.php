<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\Category;
use App\Models\Category_translate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $categories = DB::table('categories')
            ->join('category_translates', ['categories.id' => 'category_translates.category_id'])
            ->leftJoin('categories as parent', ['parent.id' => 'categories.parent_id'])
            ->leftJoin('category_translates as parent_translate', ['parent_translate.category_id' => 'parent.id', 'parent_translate.lang_id' => DB::raw($this->currentLocaleId)])
            ->where('category_translates.lang_id', $this->currentLocaleId)
            ->select('categories.id','categories.type','categories.logo','categories.isVisible','categories.parent_id','category_translates.name',DB::Raw('IFNULL( parent_translate.name , "Main Category ") as parentName'))
            ->get();

        return view('backend.category.index',compact('categories','categoriess'));
    }


    public function create()
    {
        $categories=Category_translate::where('lang_id','=', 1)->get()
        ;
        return view('backend.category.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request = $this->saveFiles($request,'category');
        $cateqory = Category::create($request->all());
        foreach ($request->name as $key => $value) {
            Category_translate::create([
                'name' => $value,
                'parent_id' => $request->parent_id,
                'color' => $request->color,
                'category_id' => $cateqory->id,
                'lang_id' => $request->lang[$key]
            ]);
        }
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $category_translates = Category_translate::where('category_id',$id)->get();
//        $parent= Category_translate::where('id','=',$category->parent_id)->first();
//        dd($parent);
        return view('backend.category.edit',compact('category','category_translates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if ($request->hasFile('logo'))
        {
            $request = $this->saveFiles($request,'category');
        }
        $category->update($request->all());

        foreach ($request->name as $key => $value) {
            $translate = Category_translate::where(['category_id' => $category->id, 'lang_id' => $request->lang[$key]])->first();
            $translate->name = $value;
            $translate->update();
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);

    }
}
