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
                        <button class="col-lg-offset-11 btn btn-primary"><a style="color: white" href="{{route('weekday.index')}}">Back</a></button>

                        <form action="{{route('weekday.store')}}" method="post" enctype="multipart/form-data">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                    @csrf
                                    <div class="product-tab-list tab-pane fade active in" id="general">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                               {{--//--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach(languages() as $language)
                                        <div class="product-tab-list tab-pane fade" id="{{$language->code}}">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="form-group">
                                                            <input type="hidden" name="lang[]" class="table-input" value="{{$language->id}}">
                                                            <input type="hidden" name="lang_code[]" class="table-input" value="{{$language->code}}">
                                                            <input name="name[]" required type="text" class="form-control" placeholder="Title">
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
