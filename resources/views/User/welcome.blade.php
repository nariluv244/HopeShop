@extends('layouts.user.app')
@section('content')
    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <h1 class="text-light">Hope Shop</h1>
                            <div class="hero-btns">
                                <a href="{{ url('/toko') }}" class="boxed-btn">Lihat Produk</a>
                                <a href="{{ url('/hubungi') }}" class="bordered-btn">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Home Service</h3>
                            <p>Jemput, antar, dan COD.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>Hubungi</h3>
                            <p>Via chat admin pada nomor yang tertera.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Garansi Kerusakan</h3>
                            <p>Pengembalian produk apabila barang yang dikirimkan tidak sesuai atau rusak.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Produk</span> Kami</h3>
                    </div>
                </div>
            </div>

            {{-- Produk --}}
            <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="#"><img src="https://cf.shopee.co.id/file/f92c285a4c163a208dfc7705b6f87843" alt=""
                            style="object-fit: none"></a>
                </div>
                <h3>Kaftan Dress</h3>
                <p class="product-price"><span></span>Rp120.000</p>
                <a href="#" data-toggle="modal" data-target="#" class="cart-btn"><i
                        class="fas fa-shopping-cart"></i>Pesan Sekarang</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="#"><img src="https://cf.shopee.co.id/file/ca1d695299f487b6d01f18af0af261b7" alt=""
                            style="object-fit: none"></a>
                </div>
                <h3>Blouse</h3>
                <p class="product-price"><span></span>Rp69.000</p>
                <a href="#" data-toggle="modal" data-target="#" class="cart-btn"><i
                        class="fas fa-shopping-cart"></i>Pesan Sekarang</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="#"><img src="https://cf.shopee.co.id/file/6b807539127cbce0f5d3fb2e21734049" alt=""
                            style="object-fit: none"></a>
                </div>
                <h3>Kemeja Crinkle</h3>
                <p class="product-price"><span></span>Rp70.000</p>
                <a href="#" data-toggle="modal" data-target="#" class="cart-btn"><i
                        class="fas fa-shopping-cart"></i>Pesan Sekarang</a>
            </div>
        </div>

            <!-- testimonail-section -->
            <div class="testimonail-section mt-150 mb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <div class="testimonial-sliders">
                                <div class="single-testimonial-slider">
                                    <div class="client-avater">
                                        <img src="{{ asset('img/avaters/avatar1.png') }}" alt="">
                                    </div>
                                    <div class="client-meta">
                                        <h3>Saira Hakim <span>Local shop owner</span></h3>
                                        <p class="testimonial-body">
                                            " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                            beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde
                                            omnis iste natus error sit voluptatem accusantium "
                                        </p>
                                        <div class="last-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-testimonial-slider">
                                    <div class="client-avater">
                                        <img src="{{ asset('img/avaters/avatar2.png') }}" alt="">
                                    </div>
                                    <div class="client-meta">
                                        <h3>David Niph <span>Local shop owner</span></h3>
                                        <p class="testimonial-body">
                                            " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                            beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde
                                            omnis iste natus error sit voluptatem accusantium "
                                        </p>
                                        <div class="last-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-testimonial-slider">
                                    <div class="client-avater">
                                        <img src="{{ asset('img/avaters/avatar3.png') }}" alt="">
                                    </div>
                                    <div class="client-meta">
                                        <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                        <p class="testimonial-body">
                                            " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                            beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde
                                            omnis iste natus error sit voluptatem accusantium "
                                        </p>
                                        <div class="last-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end testimonail-section -->
        </div>
    </div>
@endsection
