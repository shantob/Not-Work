<x-forntend.master>
    <x-slot:title>
        HOME
        </x-slot>




        <!-- Categories Section End -->
        <div class="section-title text-center mt-5 pt-5">
            <h2>Latest Product</h2>
        </div>
        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container-fluid">
                <div class="row featured__filter " data-masonry='{"percentPosition": true}'>
                    @foreach ($productall as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                            <div class="featured__item">
                                @foreach ($product->images as $image)
                                @endforeach
                                <div class="featured__item__pic set-bg"
                                    data-setbg="{{ asset('storage/products/' . $image->image) }}">
                                    <ul class="featured__item__pic__hover">
                                        <form action="#" method="post">
                                            @csrf
                                            <li><button type="submit" class="text-light btn-warning"><i
                                                        class="fa fa-shopping-cart"></i> Add To Card</button></li>
                                        </form>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">{{ $product->name }}</a></h6>
                                    <h5>৳{{ $product->price }}</h5>
                                    <a href="{{ route('frontend.products.show', $product->id) }}"
                                        class="btn btn-info">Show Detels</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <span></span>
            </div>
            </div>
        </section>



        @push('script')
            <!-- script -->
        @endpush
        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
</x-forntend.master>
