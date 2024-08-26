<div>
    <div class="pb-3 pb-md-5 paddingtop">
        <div class="container">
            <!-- login dulu, ini kalo mau nambahin ke wishlist -->
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="row d-flex flex-column align-items-center">
                <div class="col-12 mt-2 d-flex flex-column align-items-center">
                    <div>
                        @if($story->slides->isNotEmpty())
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach($story->slides as $slide)
                                        <div class="swiper-slide d-flex flex-column align-items-center">
                                            <img src="{{ asset($slide->image_path) }}" alt="Slide Image" class="img-fluid">
                                            <div class="mt-4 text-center">
                                                <p>{{ $slide->description }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <p>No images available</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>