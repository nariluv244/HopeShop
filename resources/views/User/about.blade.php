@extends('layouts.user.app')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p></p>
                        <h1>Tentang Kami</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- featured section -->
    <div class="feature-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="featured-text">
                        <h2 class="pb-3">Mengapa <span class="orange-text">Harus Kami?</span></h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Pengiriman</h3>
                                        <p>Kami siap mengirimkan produk ke seluruh Indonesia dalam jangka waktu kurang dari seminggu.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Harga</h3>
                                        <p>Kami menyediakan harga yang bersahabat dengan bahan yang berkualitas.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="content">
                                    <h3>Custom Box</h3>
                                    <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa
                                        quae ab illo.</p>
                                </div>
                            </div>
                        </div> --}}
                            <div class="col-lg-8 col-md-8">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Garansi</h3>
                                        <p>Kami menerima pengembalian produk apabila produk yang dikirimkan tidak sesuai dengan pesanan atau rusak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end featured section -->

    <!-- team section -->
    <div class="mt-150 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3>Tim <span class="orange-text">Kami</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-1"></div>
                        <h4>Nabillah Anggun Kharisma <span>3012010022</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-2"></div>
                        <h4>Rizka Putri <span>3012010028</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end team section -->
@endsection
