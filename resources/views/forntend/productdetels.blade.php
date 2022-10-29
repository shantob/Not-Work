<x-forntend.master>
    <x-slot:title>
        SINGLE PRODUCT
        </x-slot>
        <div class="col-md-12 row text-center">
            <div class="col-md-2"></div>
            <div class="col-lg-8 col-md-7 order-md-1 order-1">
                <div class="blog__details__text mt-5">
                    @foreach ($product->images as $image)
                        <img src="{{ asset('storage/products/' . $image->image) }}" alt="" width="400px">
                    @endforeach

                    <h5>{{ $product->name }}</h5>
                    <span class="text-danger">{{ $product->price }}</span>
                    <p>{{ $product->description }}</p>
                    <p>{{ $product->brand }}</p>
                    <p>{{ $product->status }}</p>
                </div>
                <a href="checkout.html"><button type="submit" class="btn btn-success w-100 my-5">Buy Now</button></a>
                <div class="blog__details__content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog__details__author">
                                <div class="blog__details__author__pic">
                                    <img src="https://th.bing.com/th/id/OIP.fsJIMUB57z_e-KHgDYVHWAHaHa?w=123&h=150&c=7&r=0&o=5&pid=1.7"
                                        alt="">
                                </div>
                                <div class="blog__details__author__text">
                                    @foreach ($product->images as $image)
                                    @endforeach
                                    <h6>{{ $image->uploatedBy->name }}</h6>

                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog__details__widget">
                                <ul>
                                    <li><span>Categories:</span> {{ $product->category }}</li>
                                </ul>
                                <div class="blog__details__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="related-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title related-blog-title">
                            <h2>Post You May Like</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="https://images.unsplash.com/photo-1578939662863-5cd416d45a69?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGdhcm1lbnRzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                            height="500" alt="">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> May 4,2022</li>

                                        </ul>
                                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                            quaerat </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="https://images.unsplash.com/photo-1622445275463-afa2ab738c34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dCUyMHNoYXJ0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                            height="500" alt="">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> June 4,2022</li>

                                        </ul>
                                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                            quaerat </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="https://images.unsplash.com/photo-1571875257727-256c39da42af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29zbWV0aWNzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                            height="500" alt="">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> August 7,2022</li>

                                        </ul>
                                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                            quaerat </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
</x-forntend.master>
