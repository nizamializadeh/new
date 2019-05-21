@extends('layouts.backend')

@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <button class="col-lg-offset-11 btn btn-primary"><a style="color: white" href="{{route('place.index')}}">Back</a></button>

                        <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="general">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                {{--<input name="image" multiple type="file" required class="form-control hidden post-image" id="postImage">--}}
                                                {{--<label for="postImage" style="cursor: pointer">--}}
                                                    {{--<img style="max-width: 250px" class="img-responsive thumbnail post-img-preview" src="{{asset('img/cropper/1.jpg')}}">--}}
                                                {{--</label>--}}



                                                <div class="dropzone rounded" id="my-dropzone" name="mainFileUploader">
                                                    <div class="fallback">
                                                        <input name="image" type="file" multiple />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div ><label class="col-form-label">Category:</label></div>
                                                        <div class="form-select-list">

                                                <select class="form-control custom-select-value" name="category_id">
                                                    {{--<option value="0"></option>--}}
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                            <div class="form-group">
                                                <div ><label class="col-form-label">Status:</label></div>

                                                <input id="toggle-demo" type="checkbox" data-toggle="toggle">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input name="isVisible" style="visibility: hidden" type="text" class="form-control" value="1" placeholder="Department">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                                <input name="place_id" hidden type="text" value="{{$place}}">
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
@push('scripts')
    <script>
        let fayl = null;
        Dropzone.options.myDropzone = {
            url:'{{ route('uploadImage') }}',
            method: "POST",
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            uploadMultiple: false,
            parallelUploads: 12,
            maxFiles: 12,

            dictDefaultMessage: '<i class="fa fa-camera"></i> Upload images <br> <small>max 12 images</small>',
            dictRemoveFile: 'Delete',
            dictCancelUpload: 'Cancel',
            acceptedFiles: "image/*",
            removedfile: function(file) {
                var name = file.name;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ route('deleteImage') }}',
                    data: {filename:fayl},
                    dataType: 'html'
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function(file, response) {
                fayl=response;
            },

            error: function(file, response) {
                alert(response);
                return false;
            },
            init: function () {
                var submitButton = document.querySelector("#submit-all");
                var wrapperThis = this;
                submitButton.addEventListener("click", function () {
                    wrapperThis.processQueue();
                });
            }
        };
    </script>
@endpush
