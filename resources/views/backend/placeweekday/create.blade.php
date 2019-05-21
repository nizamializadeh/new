@extends('layouts.backend')

@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <button class="col-lg-offset-11 btn btn-primary"><a style="color: white" href="{{route('place.index')}}">Back</a></button>
                        <form action="{{route('placeweekday.store')}}" method="post" enctype="multipart/form-data">
                            <div id="myTabContent" class="tab-content custom-product-edit">
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
                                                                    @foreach($days as $day)
                                                                        <option value="{{$day->weekday_id}}">{{$day->name}}</option>
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
                                                        <div class="form-group">
                                                            <input name="open_time" required type="text" class="form-control" placeholder="Open Time">
                                                            <input name="place_id" value="{{$place}}" type="hidden" class="form-control" placeholder="Title">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                <div class="row">
                                    <div class="col-lg-2"><label class="col-form-label">Status:</label></div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input id="toggle-demo" value="1" name="isVisible" type="checkbox" data-toggle="toggle">
                                        </div>
                                    </div>
                                </div>

                            </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Creat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
