@extends('layouts.backend')

@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#general">General</a></li>
                            @foreach(languages() as $language)
                                <li><a href="#{{$language->code}}">{{$language->name}}</a></li>

                            @endforeach
                        </ul>
                        <button class="col-lg-offset-11 btn btn-primary"><a style="color: white" href="{{route('category.index')}}">Back</a></button>

                        <form action="{{route('category.update',['category' => $category->id])}}" method="post" enctype="multipart/form-data">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                {{method_field('PUT')}}
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="general">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="logo" type="file" required class="form-control hidden post-image" id="postImage" value="{{asset('uploads/category/'.$category->logo)}}">
                                                            <label for="postImage" style="cursor: pointer">
                                                                <img style="max-width: 250px" class="img-responsive thumbnail post-img-preview" src="{{asset('uploads/category/'.$category->logo)}}">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2"><label class="col-form-label">Type:</label></div>
                                                                <div class="col-lg-10">
                                                                    <select class="form-control custom-select-value " name="type">
                                                                        @if($category->type==0)(<option selected value="0">For Service</option><option value="1">For Gallery</option><option value="2">For Place</option>)
                                                                        @elseif($category->type==1)(<option  value="0">For Service</option><option selected value="1">For Gallery</option><option  value="2">For Place</option>)
                                                                        @elseif($category->type==2)(<option  value="0">For Service</option><option  value="1">For Gallery</option><option selected value="2">For Place</option>)
                                                                        @else<td> ----- </td>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="isVisible" style="visibility: hidden" type="text" class="form-control" value="{{$category->isVisible}}" placeholder="Department">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="isVisible" style="" type="text" class="form-control" value="{{$category->isVisible}}" placeholder="Department">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach(languages() as $key => $language)
                                    <div class="product-tab-list tab-pane fade" id="{{$language->code}}">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div ><label class="col-form-label">Name:</label></div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="lang[]" class="table-input" value="{{$language->id}}">
                                                        <input type="hidden" name="lang_code[]" class="table-input" value="{{$language->code}}">
                                                        <input name="name[]" required type="text" class="form-control" placeholder="Title" value="{{$category_translates[$key]->name ?? ""}}">
                                                    </div>
                                                    {{--<div class="form-group">--}}
                                                        {{--<textarea name="description[]" placeholder="Content" >{{$blog_translates[$key]->content ?? ""}}</textarea>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
