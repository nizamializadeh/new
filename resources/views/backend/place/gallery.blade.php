@extends('layouts.backend')

@section('content')
    <!-- Button trigger modal -->
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul style="    padding: 0px 0px 20px 0px;background: #fff; font-weight: bold;font-size: 20px;">
                            {{--@foreach(languages() as $language)--}}
                                {{--<li class="col-md-2"><a  href="{{route('gallery.index',['lang_id' => $language->id])}}">{{$language->name}}</a></li>--}}
                            {{--@endforeach--}}
                        </ul>
                    </div>
                    <div class="product-status-wrap drp-lst">
                        <h4>Gallery List</h4>
                        <div class="add-product">
                            <a href="{{route('gallery.create',['id' => $id])}}">Add gallery</a>
                        </div>
                        <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>category</th>
                                <th>image</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($galleries as $gallery)
                                {{--model opened --}}
                                {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                    {{--<div class="modal-dialog" role="document">--}}
                                        {{--<div class="modal-content">--}}
                                            {{--<div class="modal-header">--}}
                                                {{--<h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>--}}
                                                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                    {{--<span aria-hidden="true">&times;</span>--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                            {{--<div class="modal-footer">--}}
                                                {{--<form action="{{route('gallery.destroy',['gallery' => $gallery->id])}}" method="post">--}}
                                                    {{--{{ method_field('delete') }}--}}
                                                    {{--@csrf--}}
                                                    {{--<button type="submit" class="btn btn-primary">Delete</button>--}}
                                                {{--</form>--}}
                                                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--modal close --}}

                                <tr>
                                    <td>{{$gallery->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <img class="img-responsive"  style="opacity: 1" src="{{asset('uploads/gallery/'.$gallery->image)}}" alt="Banner">
                                    </td>
                                    <td><input id="toggle-demo" data-table="galleries" data-row="{{$gallery->id}}"  type="checkbox" {{($gallery->isVisible) ? 'checked' : ""}} class="statusCheckBox"  data-toggle="toggle"></td>

                                    <td>
                                        {{--<a href="{{route('place.weekday',['place' => $place->id])}}"> <button type="button" class="btn btn-primary" ><i class="fa fa-clock-o"></i></button></a>--}}
                                        {{--<a href="{{route('weekdayplace',['id' => $place->id])}}"> <button type="button" class="btn btn-primary" ><i class="fa fa-file-image-o"></i></button></a>--}}
                                        {{--<a href="{{route('place.edit',['place' => $place->id])}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>--}}
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>category</th>
                                <th>image</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
