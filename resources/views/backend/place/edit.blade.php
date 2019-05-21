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
                        <button class="col-lg-offset-11 btn btn-primary"><a style="color: white" href="{{route('place.index')}}">Back</a></button>

                        <form action="{{route('place.update',['place' => $place->id])}}" method="post" enctype="multipart/form-data">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                {{method_field('PUT')}}
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="general">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="logo" type="file" required class="form-control hidden post-image" id="postImage">
                                                            <label for="postImage" style="cursor: pointer">
                                                                <img style="max-width: 250px" class="img-responsive thumbnail post-img-preview" src="{{asset('uploads/place/'.$place->logo)}}">
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="image" type="file" required class="form-control hidden post-image" id="postImage2">
                                                            <label for="postImage2" style="cursor: pointer">
                                                                <img style="max-width: 250px" class="img-responsive thumbnail post-img-preview" src="{{asset('uploads/place/'.$place->image)}}">
                                                            </label>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2"><label class="col-form-label">Category:</label></div>
                                                                <div class="col-lg-12">
                                                            <select class="form-control custom-select-value" name="category_id">
                                                                @foreach($categories as $category)
                                                                    <option {{($place->category_id == $category->id) ? "selected" : ""}} value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2"><label class="col-form-label">Type:</label></div>
                                                                <div class="col-lg-12">
                                                            <select class="form-control custom-select-value" name="service_type">
                                                                @if($place->service_type==0)(<option selected value="0">menu</option><option value="1">test</option>)
                                                                @elseif($place->service_type==1)(<option  value="0">menu</option><option selected value="1">test</option>)
                                                                @else<td> ----- </td>
                                                                @endif
                                                            </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <input name="place_open_time" required  type="text" class="form-control" value="{{$place->place_open_time}}"  placeholder="open time">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email" type="email" required class="form-control"  value="{{$place->email}}" placeholder="Department">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="lat" type="text" required class="form-control" value="{{$place->lat}}"  placeholder="Department">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="ing" type="text" required class="form-control" value="{{$place->ing}}"   placeholder="Department">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="number" required type="text" class="form-control" value="{{$phone->number}}"   placeholder="Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="isVisible" required style="visibility: hidden" type="hidden" class="form-control" value="1" placeholder="Department">
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
                                                        <div ><label class="col-form-label">Name:</label></div>

                                                        <input name="location[]" required type="text" class="form-control" placeholder="Title" value="{{$placeTranslate[$key]->location ?? ""}}">
                                                    </div>
                                                    <div ><label class="col-form-label">Description:</label></div>

                                                    <div class="form-group">
                                                        <textarea name="description[]" required placeholder="Content" >{{$placeTranslate[$key]->description ?? ""}}</textarea>
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
