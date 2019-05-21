@extends('layouts.backend')

@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <button class="col-lg-offset-11 btn btn-primary"><a style="color: white" href="{{route('place.index')}}">Back</a></button>
                        <form action="{{route('placeweekday.update',['placeweekday' => $placeWeekday->id])}}" method="post" enctype="multipart/form-data">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                {{method_field('PUT')}}
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="general">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div ><label class="col-form-label">Week Day:</label></div>
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="weekday_id">
                                                                @foreach($weekdayTranslate as $weekdayTranslates)
                                                                    <option {{($weekdyTranslatex->weekday_id == $weekdayTranslates->weekday_id) ? "selected" : ""}} value="{{$weekdayTranslates->weekday_id}}">{{$weekdayTranslates->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="review-content-section">
                                            <div ><label class="col-form-label">Open-Close Time:</label></div>

                                            <div class="form-group">

                                                <input name="open_time" required type="text" class="form-control" placeholder="Title" value="{{$placeWeekday->open_time}}">
                                                <input name="place_id" type="text" class="form-control hidden" placeholder="Title" value="{{$placeWeekday->place_id}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Edit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
