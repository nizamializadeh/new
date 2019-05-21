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
                            @endforeachz
                        </ul>
                        <button class="col-lg-offset-11 btn btn-primary"><a style="color: white" href="{{route('blog.index')}}">Back</a></button>

                        <form action="{{route('blog.update',['blog' => $blog->id])}}" method="post" enctype="multipart/form-data">
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
                                                            <input name="image" type="file" required class="form-control hidden post-image" id="postImage">

                                                            <label for="postImage" style="cursor: pointer">
                                                                <img style="max-width: 250px" class="img-responsive thumbnail post-img-preview" src="{{asset('uploads/blog/'.$blog->image)}}">
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="isVisible" style="visibility: hidden" type="text" class="form-control" value="1" placeholder="Department">
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
                                                    <div class="form-group">
                                                        <input type="hidden" name="lang[]" class="table-input" value="{{$language->id}}">
                                                        <input type="hidden" name="lang_code[]" class="table-input" value="{{$language->code}}">
                                                        <input name="title[]" required type="text" class="form-control" placeholder="Title" value="{{$blog_translates[$key]->title ?? ""}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="description[]" required placeholder="Content" >{{$blog_translates[$key]->content ?? ""}}</textarea>
                                                    </div>
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
