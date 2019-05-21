<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\Category_translate;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use Intervention\Image\ImageManagerStatic as Image;

class GalleryController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories=Category_translate::where('lang_id','=', 1)->get();
        $place=$request->id;
        return view('backend.gallery.create',compact('categories','place'));
    }


    /**
     *  TODO: seklin adindaki bosluqu silmek lazimdi slug qoymaq lazimdi :D
     * @return mixed
     */
    public function uploadImage()
    {
        $input = Input::all();
        $rules = array(
            'file' => 'image|mimes:jpg,png,jpeg',
        );
        $validation = Validator::make($input, $rules);
        if ($validation->fails())
        {
            return Response::make($validation->errors->first(), 400);
        }
        $file = Input::file('file');
        $filename = rand() .str_slug($file->getClientOriginalName(),'-').'.'. $file->getClientOriginalExtension();
        if (!is_dir(public_path() . '/uploads/temp/'.Session::getId().'/')){
            mkdir(public_path() . '/uploads/temp/'.Session::getId().'/');
        }
        $file->move(public_path() . '/uploads/temp/'.Session::getId().'/',$filename);
        echo json_encode($filename);
    }

    public function deleteImage(Request $request)
    {
        $filename = str_replace('"','',$request->get('filename'));//gives orginal file name eg:abc.jpg
        unlink(public_path(). '/uploads/temp/'.Session::getId().'/'.$filename);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request = $this->saveFiles($request,'gallery');
       // $gallery= Gallery::create($request->all());

        $directory = public_path('/uploads/temp/'.Session::getId());
        $files = scandir($directory);
        $ignore = array(".", "..");
        foreach ($files as $file) {
            if (!in_array($file, $ignore)) {
                $image = Image::make(public_path('/uploads/temp/' . Session::getId() . '/' . $file));
                $orginalImageName = rand() . '.jpg';
                $newName = public_path() . '/uploads/gallery/' . $orginalImageName;
                rename(public_path() . '/uploads/temp/' . Session::getId() . '/' . $file, $newName);
                $image->text('PLACE.AZ', $image->getWidth() / 2, $image->getHeight() - 30, function($font) {
                    $font->file(public_path('fonts/FLATS.ttf'));
                    $font->size(60);
                    $font->color('#ffffff');
                    $font->align('center');
                    $font->valign('center');
                });
                $image->save(public_path('uploads/gallery/' . $orginalImageName));
                $image->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $image->save(public_path('uploads/gallery/thumbnails/' . $orginalImageName));
                $gallery = new Gallery();
                $gallery->category_id =$request->category_id;
                $gallery->place_id = $request->place_id;
                $gallery->isVisible = $request->isVisible;
                $gallery->image = $orginalImageName;
                $gallery->save();
            }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
