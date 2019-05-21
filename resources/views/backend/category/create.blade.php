@extends('layouts.backend')
@php($languages = languages())
@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#general">General</a></li>
                            @foreach($languages as $language)
                                <li><a href="#{{$language->code}}">{{$language->name}}</a></li>
                            @endforeach
                        </ul>
                        <button class="col-lg-offset-11 btn btn-primary"><a style="color: white" href="{{route('category.index')}}">Back</a></button>

                        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="general">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="logo" type="file" required class="form-control hidden post-image" id="postImage">
                                                            <label for="postImage" style="cursor: pointer">
                                                                <img style="max-width: 250px" class="img-responsive thumbnail post-img-preview" src="{{asset('img/cropper/1.jpg')}}">
                                                            </label>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <div class="colorpicker-inner ts-forms mg-b-23">

                                                                <label class="label">Color</label>
                                                                <label class="color-group" for="hex">
                                                                    <input name="color" type="text" placeholder="#ff0000" id="hex">
                                                                </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group-inner">
                                                           <div class="row">
                                                               <div class="col-lg-2"><label class="col-form-label">Category:</label></div>
                                                               <div class="col-lg-10">
                                                                   <select class="form-control custom-select-value " name="parent_id">
                                                                       <option value="">Main Category</option>
                                                                       @foreach($categories as $category)
                                                                           <option value="{{$category->id}}">{{$category->name}}</option>
                                                                       @endforeach
                                                                   </select>
                                                               </div>
                                                           </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                           <div class="row">
                                                               <div class="col-lg-2"><label class="col-form-label">Type:</label></div>
                                                               <div class="col-lg-10">
                                                                   <select class="form-control custom-select-value " name="type">
                                                                       <option value="0">For Service</option>
                                                                       <option value="1">For Gallery</option>
                                                                       <option value="2">For Place</option>
                                                                   </select>
                                                               </div>
                                                           </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2"><label class="col-form-label">Status:</label></div>
                                                                <div class="col-lg-10">
                                                                    <input name="isVisible" id="toggle-demo" data-table="places"   type="checkbox" checked="1" class="statusCheckBox"  data-toggle="toggle">
                                                                    <input type="hidden" name="isVisible" value="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($languages as $language)
                                    <div class="product-tab-list tab-pane fade" id="{{$language->code}}">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="form-group">
                                                        <input type="hidden" name="lang[]" class="table-input" value="{{$language->id}}">
                                                        <input type="hidden" name="lang_code[]" class="table-input" value="{{$language->code}}">
                                                        <input name="name[]" required="required" type="text" class="form-control" placeholder="Name">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Creat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
