@extends('layouts.backend')
@php($languages = languages())

@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">

                        <button class="col-lg-offset-11 btn btn-primary"><a style="color: white" href="{{route('placebranch.index')}}">Back</a></button>
                        <form action="{{route('placebranch.store')}}" method="post" enctype="multipart/form-data">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                @csrf

                                <div class="product-tab-list tab-pane fade active in" id="general">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2"><label class="col-form-label">Branch:</label></div>
                                                                <div class="col-lg-10">
                                                                    <select class="form-control custom-select-value " name="branch_id">
                                                                        @foreach($branch as $branc)
                                                                            <option value="{{$branc->id}}">{{$branc->name}}</option>
                                                                        @endforeach
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
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-10">
                                                                    <input type="hidden" name="place_id" value="{{$place}}">
                                                                </div>
                                                            </div>
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
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Creat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
