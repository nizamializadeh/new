<section class="places_slider">
    <div class="places_slider_container">
        @foreach($categories as $category)
            <div class="places_slider_slide">
                <a class="places_slider_slides" href="#">
                    <h2 class="h2">{{$category->name}}</h2>
                    <p>15 ресторанов </p>
                    <img src="{{asset('uploads/category/'.$category->logo)}}" alt="Places az">

                </a>
            </div>

        @endforeach

    </div>
</section>