@extends('layouts.app')

@section('content')
    <div id="shopify-section-template--15924304773376__1646205661c30791db" class="shopify-section">
        <section class="slider-content">
            <div class="home-slider swiper-container" id="home-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide slider-item-4f5c2dd7-3445-494c-9535-36efc312feda">
                        <div class="slide-image">
                            <a href="/collections/earphone" class="slider-image">
                                <img class="img-fluid desk-img"
                                    src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/slider-1.jpg?v=1650691565">

                            </a>
                            <div class="container">
                                <div class="silder-content">
                                    <div class="slider-text-info">

                                        <span class="sub-title" style="color: #ffffff;">
                                            <span>* Starting price</span>
                                            <span class="color-text">$120.00</span>
                                        </span>


                                        <h1 style="color:#ffffff;">
                                            <span>Portable</span>

                                            <span>wireless</span>

                                        </h1>


                                        <a class="slider-btn" href="/collections/earphone">
                                            Shop collection
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <style data-shopify>
                                @media(max-width: 767px) {
                                    .slider-content .home-slider .slider-item-4f5c2dd7-3445-494c-9535-36efc312feda .slide-image img {
                                        height: 400px;
                                        object-fit: cover;
                                    }
                                }
                            </style>
                        </div>
                    </div>

                    <div class="swiper-slide slider-item-b4f1b1d6-da3f-436b-a651-63f35423932c">
                        <div class="slide-image">
                            <a href="/collections/desktop" class="slider-image">
                                <img class="img-fluid desk-img"
                                    src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/slider-02_1.png?v=1650977324">

                            </a>
                            <div class="container">
                                <div class="silder-content">
                                    <div class="slider-text-info">

                                        <span class="sub-title" style="color: #ffffff;">
                                            <span>* Starting price</span>
                                            <span class="color-text">$120.00</span>
                                        </span>


                                        <h1 style="color:#ffffff;">
                                            <span>Smart</span>

                                            <span>4K desk</span>

                                        </h1>


                                        <a class="slider-btn" href="/collections/desktop">
                                            Shop collection
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <style data-shopify>
                                @media(max-width: 767px) {
                                    .slider-content .home-slider .slider-item-b4f1b1d6-da3f-436b-a651-63f35423932c .slide-image img {
                                        height: 400px;
                                        object-fit: cover;
                                    }
                                }
                            </style>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="swiper-buttons">
                    <span>
                        <button class="button-prev"><i class="far fa-arrow-alt-circle-left"></i></button>
                    </span>
                    <span>
                        <button class="button-next"><i class="far fa-arrow-alt-circle-right"></i></i></button>
                    </span>
                </div>
            </div>
        </section>
        <script>
            var swiper = new Swiper('#home-slider', {
                slidesPerColumn: 1,
                slidesPerView: 1,
                spaceBetween: 0,
                observer: true,
                loop: true,
                observeParents: true,
                navigation: {
                    prevEl: '.button-prev',
                    nextEl: '.button-next',
                },

            });
        </script>


    </div>
    <div id="shopify-section-template--15924304773376__16506938940dc69a2a" class="shopify-section">
        <!-- Browuse categoryies -->
        <section class="slider-category">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="section-capture">
                            <div class="section-title">
                                <h2>Top categories</h2>
                            </div>
                        </div>

                        <div class="category-area">
                            <div class="cat-slider swiper-container"
                                id="category-slider-template--15924304773376__16506938940dc69a2a">
                                <div class="swiper-wrapper">
                                    @foreach ($category as $row)
                                        <div class="swiper-slide">
                                            <div class="category-wrap">
                                                <a href="/collections/earphone">
                                                    <img src="{{ asset('public/storage/' . $row->icon) }}" class="img-fluid"
                                                        alt="">
                                                    <span class="cat-title">{{ $row->name }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <button class="button-prev-template--15924304773376__16506938940dc69a2a"><i
                                        class="fas fa-angle-double-left"></i></button>
                                <button class="button-next-template--15924304773376__16506938940dc69a2a"><i
                                        class="fas fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            var swiper = new Swiper('#category-slider-template--15924304773376__16506938940dc69a2a', {
                slidesPerColumn: 1,
                slidesPerView: 4,
                spaceBetween: 30,
                observer: true,
                loop: false,
                observeParents: true,
                navigation: {
                    prevEl: '.button-prev-template--15924304773376__16506938940dc69a2a',
                    nextEl: '.button-next-template--15924304773376__16506938940dc69a2a',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 12
                    },
                    479: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    768: {
                        slidesPerView: 3
                    },
                    979: {
                        slidesPerView: 3
                    },
                    1199: {
                        slidesPerView: 3
                    }
                }
            });
        </script>


    </div>
    {{-- <div id="shopify-section-template--15924304773376__165070382757d0715a" class="shopify-section">
        <section class="about-new">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-area">
                            <div class="about-title-area">
                                <div class="section-capture">
                                    <div class="section-title">

                                        <span>Electon electronics store 2022</span>


                                        <h2>Electronics design covers the required for engineers.</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="about-content">

                                <p class="about-desc">Our experts cover the full spectrum on products, markets and
                                    technologies,from analog and power to embedded and automotive.</p>


                                <a href="/pages/about-us" class="btn btn-style">About store</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div> --}}
    {{-- <div id="shopify-section-template--15924304773376__1649408761a2f69460" class="shopify-section">
        <section class="banner2 banner2-template--15924304773376__1649408761a2f69460">
            <ul class="banner-block">

                <li class="banner-hover banner-133aec17-0055-4e39-925d-5f9f7a9822fe">
                    <a href="/collections/best-ratted" class="banner-img">
                        <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/banner-1.jpg?v=1650949410"
                            class="img-fluid" alt="">
                        <div class="banner-content">
                            <div class="banner-tilte">
                                <h2 style="color: #ffffff;">
                                    <span>Music N7</span>
                                    <span>handsfree</span>
                                </h2>

                                <span class="button btn btn-style2">Shop now</span>

                            </div>
                        </div>
                    </a>
                </li>

                <li class="banner-hover banner-23af6d97-2ce6-472a-a2d5-484286dd17aa">
                    <a href="/collections/top-selling" class="banner-img">
                        <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/banner-2.jpg?v=1650949410"
                            class="img-fluid" alt="">
                        <div class="banner-content">
                            <div class="banner-tilte">
                                <h2 style="color: #ffffff;">
                                    <span>Slim tablet</span>
                                    <span>collection</span>
                                </h2>

                                <span class="button btn btn-style2">Shop now</span>

                            </div>
                        </div>
                    </a>
                </li>

                <li class="banner-hover banner-30fd615c-5072-4f4b-b2ba-b8a98c3bf6ee">
                    <a href="/collections/camera" class="banner-img">
                        <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/banner-3.jpg?v=1650949410"
                            class="img-fluid" alt="">
                        <div class="banner-content">
                            <div class="banner-tilte">
                                <h2 style="color: #ffffff;">
                                    <span>Mini solo</span>
                                    <span>camera</span>
                                </h2>

                                <span class="button btn btn-style2">Shop now</span>

                            </div>
                        </div>
                    </a>
                </li>

            </ul>
        </section>
    </div> --}}
    <div id="shopify-section-template--15924304773376__1648468991dc771b4f" class="shopify-section">
        <!-- product-area start -->
        <section class="product-area product-tab-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="section-capture tab">
                            <div class="section-title">

                                <h2>
                                    Trending product
                                </h2>

                                <ul class="nav nav-tabs" role="tablist">



                                    {{-- <li role="presentation">
                                        <a class="active show" role="tab" data-bs-toggle="tab"
                                            href="#tab-5da1d9d0-c890-4438-87bc-6819abcbcf2a">Earphone</a>
                                    </li>




                                    <li role="presentation">
                                        <a class="" role="tab" data-bs-toggle="tab"
                                            href="#tab-cdd7b8ea-a1e5-43dc-8b8b-1e3e695848f9">Projector</a>
                                    </li>




                                    <li role="presentation">
                                        <a class="" role="tab" data-bs-toggle="tab"
                                            href="#tab-c21c41bf-1c83-444f-afa9-1bc5735a2671">Smartphone</a>
                                    </li> --}}


                                </ul>
                            </div>
                        </div>

                        <div class="tab-content tabs">
                            <div class="tab-pane fade active show" id="tab-5da1d9d0-c890-4438-87bc-6819abcbcf2a"
                                role="tabpanel">
                                <div class="feture_pro_tab swiper-container"
                                    id="featured-5da1d9d0-c890-4438-87bc-6819abcbcf2a">
                                    <div class="swiper-wrapper">
                                        @foreach ($product as $row)
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a class="pro-img"
                                                            href="{{ route('product.details', $row->slug) }}">
                                                            <img class="img-fluid img1"
                                                                src="{{ asset('public/storage/' . $row->fea_img) }}"
                                                                alt="Drone camera" width="297px" height="297px"
                                                                style="width: 297px; height: 297px;">

                                                            <img class="img-fluid img2"
                                                                src="@if ($row->singleImage != null) {{ asset('public/storage/' . $row->singleImage->image) }} @else {{ asset('public/storage/' . $row->fea_img) }} @endif"
                                                                alt="Drone camera" width="297px" height="297px"
                                                                style="width: 297px; height: 297px;">

                                                        </a>
                                                        <div class="product-label">
                                                            <span
                                                                class="percent-count">-{{ number_format($row->discount, 1) }}%</span>
                                                            <span class="sale">SALE</span>

                                                        </div>
                                                        {{-- <div class="product-add-cart">
                                                            {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}
                                                        </div>
                                                        <div class="product-action">
                                                            {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}

                                                        </div> --}}
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-info">
                                                            <div class="pro-title">
                                                                <a href="{{ route('product.details', $row->slug) }}"
                                                                    title="Drone camera">{{ \Illuminate\Support\Str::limit($row->title, 15, $end = '...') }}</a>
                                                            </div>
                                                            <div class="price-box">

                                                                <span class="new-price new-price-compare"
                                                                    id="ProductPrice2">${{ $row->new_price }}</span><span
                                                                    class="old-price"
                                                                    id="ComparePrice2">${{ $row->old_price }}</span>
                                                            </div>

                                                        </div>
                                                        <div class="product-info mt-3">
                                                            <div class="row">
                                                                <div class="col-4 text-start ps-4">
                                                                    @if (auth()->check())
                                                                        @if ($row->wishlist == null)
                                                                            <a href="javascript:void(0)"
                                                                                class="text-start ms-2"
                                                                                onclick="liked({{ $row->id }})"
                                                                                alt="like" style="padding: 8px;"><i
                                                                                    class="far fa-thumbs-up  fs-5"
                                                                                    id="thumb-icon-{{ $row->id }}"></i></a>
                                                                        @else
                                                                            <a href="javascript:void(0)"
                                                                                class="text-start ms-2"
                                                                                onclick="liked({{ $row->id }})"
                                                                                alt="Unlike"  style="padding: 8px;"><i
                                                                                    class="fas fa-thumbs-up  fs-5"
                                                                                    id="thumb-icon-{{ $row->id }}"
                                                                                    style="color: #ed1c24;"></i></a>
                                                                        @endif
                                                                    @else
                                                                        <a href="{{ route('login') }}"
                                                                            class="text-start ms-2"  style="padding: 8px;"><i
                                                                                class="far fa-thumbs-up  fs-5"></i></a>
                                                                    @endif
                                                                </div>
                                                                {{-- <div class="col-6 p-0">
                                                                </div> --}}
                                                                <div class="col-8 flat-social text-end">
                                                                    {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <button class="button-prev-template--15924304773376__1648468991dc771b4f"><i
                                            class="ri-arrow-left-line"></i></button>
                                    <button class="button-next-template--15924304773376__1648468991dc771b4f"><i
                                            class="ri-arrow-right-line"></i></button>
                                </div>

                            </div>
                            <script>
                                var swiper = new Swiper('#featured-5da1d9d0-c890-4438-87bc-6819abcbcf2a', {
                                    slidesPerColumn: 2,
                                    slidesPerView: 4,
                                    spaceBetween: 30,
                                    observer: true,
                                    loop: false,
                                    observeParents: true,
                                    navigation: {
                                        nextEl: '.button-next-template--15924304773376__1648468991dc771b4f',
                                        prevEl: '.button-prev-template--15924304773376__1648468991dc771b4f',
                                    },
                                    breakpoints: {
                                        0: {
                                            slidesPerView: 1,
                                            spaceBetween: 12
                                        },
                                        479: {
                                            slidesPerView: 2,
                                            spaceBetween: 12
                                        },
                                        640: {
                                            slidesPerView: 2,
                                            spaceBetween: 12
                                        },
                                        768: {
                                            slidesPerView: 3,
                                            spaceBetween: 12
                                        },
                                        979: {
                                            slidesPerView: 3,
                                            spaceBetween: 12
                                        },
                                        1199: {
                                            slidesPerView: 3
                                        }
                                    }
                                });
                            </script>
                            {{-- <div class="tab-pane fade" id="tab-cdd7b8ea-a1e5-43dc-8b8b-1e3e695848f9" role="tabpanel">
                                <div class="feture_pro_tab swiper-container"
                                    id="featured-cdd7b8ea-a1e5-43dc-8b8b-1e3e695848f9">
                                    <div class="swiper-wrapper">


                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/racing-wheel">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-09-b_530X480_crop_center.jpg?v=1650947726"
                                                            alt="Racing wheel">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-09-c_530X480_crop_center.jpg?v=1650947726"
                                                            alt="Racing wheel">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-29%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671433351424, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="racing-wheel">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('racing-wheel')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671433351424, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/racing-wheel" title="Racing wheel">Racing
                                                                wheel</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$2,500.00</span><span class="old-price"
                                                                id="ComparePrice">$3,500.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704600084736"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671433351424, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="racing-wheel">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('racing-wheel')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/smart-watch">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-04_530X480_crop_center.jpg?v=1650946552"
                                                            alt="Smart watch">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-04-a_530X480_crop_center.jpg?v=1650946552"
                                                            alt="Smart watch">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-33%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671432204544, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="smart-watch">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('smart-watch')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671432204544, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/smart-watch" title="Smart watch">Smart
                                                                watch</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$1,022.00</span><span
                                                                class="old-price" id="ComparePrice">$1,520.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599757056"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671432204544, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="smart-watch">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('smart-watch')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/hp-laptop-i5">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-01_530X480_crop_center.jpg?v=1650977844"
                                                            alt="HP laptop I5">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-01-c_530X480_crop_center.jpg?v=1650977844"
                                                            alt="HP laptop I5">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-4%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671430402304, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="hp-laptop-i5">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('hp-laptop-i5')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671430402304, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/hp-laptop-i5" title="HP laptop I5">HP
                                                                laptop I5</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$47,000.00</span><span
                                                                class="old-price" id="ComparePrice">$49,000.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599396608"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671430402304, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="hp-laptop-i5">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('hp-laptop-i5')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/5g-smart-phone">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-12-a_530X480_crop_center.jpg?v=1650977818"
                                                            alt="5G smart phone">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-12-c_530X480_crop_center.jpg?v=1650977818"
                                                            alt="5G smart phone">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-60%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671428763904, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="5g-smart-phone">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('5g-smart-phone')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671428763904, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/5g-smart-phone" title="5G smart phone">5G
                                                                smart phone</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$23,600.00</span><span
                                                                class="old-price" id="ComparePrice">$59,600.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704598905088"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671428763904, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="5g-smart-phone">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('5g-smart-phone')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/game-controller">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-03_530X480_crop_center.jpg?v=1650977900"
                                                            alt="Game controller">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-03-a_530X480_crop_center.jpg?v=1650977900"
                                                            alt="Game controller">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-53%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671431614720, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="game-controller">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('game-controller')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671431614720, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/game-controller"
                                                                title="Game controller">Game controller</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$590.00</span><span class="old-price"
                                                                id="ComparePrice">$1,250.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599593216"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671431614720, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="game-controller">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('game-controller')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/drone-camera">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-a_530X480_crop_center.jpg?v=1650946971"
                                                            alt="Drone camera">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-b_530X480_crop_center.jpg?v=1650946971"
                                                            alt="Drone camera">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-16%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671430041856, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="drone-camera">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('drone-camera')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671430041856, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/drone-camera" title="Drone camera">Drone
                                                                camera</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$80,000.00</span><span
                                                                class="old-price" id="ComparePrice">$95,599.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599331072"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671430041856, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="drone-camera">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('drone-camera')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/wireless-headphones">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-08-c_530X480_crop_center.jpg?v=1650947585"
                                                            alt="Wireless headphones">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-08_530X480_crop_center.jpg?v=1650947585"
                                                            alt="Wireless headphones">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-22%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429943552, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="wireless-headphones">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('wireless-headphones')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429943552, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/wireless-headphones"
                                                                title="Wireless headphones">Wireless headphones</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$1,290.00</span><span
                                                                class="old-price" id="ComparePrice">$1,650.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599298304"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429943552, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="wireless-headphones">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('wireless-headphones')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/bluetooth-speakers">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-02-b_530X480_crop_center.jpg?v=1650977869"
                                                            alt="Bluetooth speakers">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-02-a_530X480_crop_center.jpg?v=1650977869"
                                                            alt="Bluetooth speakers">

                                                    </a>
                                                    <div class="product-label">



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429746944, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="bluetooth-speakers">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('bluetooth-speakers')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429746944, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/bluetooth-speakers"
                                                                title="Bluetooth speakers">Bluetooth speakers</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$345.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599265536"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429746944, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="bluetooth-speakers">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('bluetooth-speakers')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/5g-smart-tablet">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-07-b_530X480_crop_center.jpg?v=1650977830"
                                                            alt="5G smart tablet">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-07-c_530X480_crop_center.jpg?v=1650977830"
                                                            alt="5G smart tablet">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-28%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429517568, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="5g-smart-tablet">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('5g-smart-tablet')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429517568, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/5g-smart-tablet"
                                                                title="5G smart tablet">5G smart tablet</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$5,600.00</span><span
                                                                class="old-price" id="ComparePrice">$7,800.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599232768"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429517568, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="5g-smart-tablet">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('5g-smart-tablet')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/portable-camera">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-06_530X480_crop_center.jpg?v=1650947206"
                                                            alt="Portable camera">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-06-a_530X480_crop_center.jpg?v=1650947207"
                                                            alt="Portable camera">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-31%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429222656, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="portable-camera">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('portable-camera')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429222656, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/portable-camera"
                                                                title="Portable camera">Portable camera</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$8,600.00</span><span
                                                                class="old-price" id="ComparePrice">$12,500.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599068928"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429222656, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="portable-camera">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('portable-camera')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <button class="button-prev-template--15924304773376__1648468991dc771b4f"><i
                                            class="ri-arrow-left-line"></i></button>
                                    <button class="button-next-template--15924304773376__1648468991dc771b4f"><i
                                            class="ri-arrow-right-line"></i></button>
                                </div>

                            </div>
                            <script>
                                var swiper = new Swiper('#featured-cdd7b8ea-a1e5-43dc-8b8b-1e3e695848f9', {
                                    slidesPerColumn: 2,
                                    slidesPerView: 4,
                                    spaceBetween: 30,
                                    observer: true,
                                    loop: false,
                                    observeParents: true,
                                    navigation: {
                                        nextEl: '.button-next-template--15924304773376__1648468991dc771b4f',
                                        prevEl: '.button-prev-template--15924304773376__1648468991dc771b4f',
                                    },
                                    breakpoints: {
                                        0: {
                                            slidesPerView: 1,
                                            spaceBetween: 12
                                        },
                                        479: {
                                            slidesPerView: 2,
                                            spaceBetween: 12
                                        },
                                        640: {
                                            slidesPerView: 2,
                                            spaceBetween: 12
                                        },
                                        768: {
                                            slidesPerView: 3,
                                            spaceBetween: 12
                                        },
                                        979: {
                                            slidesPerView: 3,
                                            spaceBetween: 12
                                        },
                                        1199: {
                                            slidesPerView: 3
                                        }
                                    }
                                });
                            </script>
                            <div class="tab-pane fade" id="tab-c21c41bf-1c83-444f-afa9-1bc5735a2671" role="tabpanel">
                                <div class="feture_pro_tab swiper-container"
                                    id="featured-c21c41bf-1c83-444f-afa9-1bc5735a2671">
                                    <div class="swiper-wrapper">


                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/drone-camera">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-a_530X480_crop_center.jpg?v=1650946971"
                                                            alt="Drone camera">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-b_530X480_crop_center.jpg?v=1650946971"
                                                            alt="Drone camera">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-16%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671430041856, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="drone-camera">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('drone-camera')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671430041856, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/drone-camera" title="Drone camera">Drone
                                                                camera</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$80,000.00</span><span
                                                                class="old-price" id="ComparePrice">$95,599.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599331072"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671430041856, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="drone-camera">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('drone-camera')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/wireless-headphones">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-08-c_530X480_crop_center.jpg?v=1650947585"
                                                            alt="Wireless headphones">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-08_530X480_crop_center.jpg?v=1650947585"
                                                            alt="Wireless headphones">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-22%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429943552, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="wireless-headphones">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('wireless-headphones')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429943552, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/wireless-headphones"
                                                                title="Wireless headphones">Wireless headphones</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$1,290.00</span><span
                                                                class="old-price" id="ComparePrice">$1,650.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599298304"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429943552, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="wireless-headphones">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('wireless-headphones')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/bluetooth-speakers">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-02-b_530X480_crop_center.jpg?v=1650977869"
                                                            alt="Bluetooth speakers">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-02-a_530X480_crop_center.jpg?v=1650977869"
                                                            alt="Bluetooth speakers">

                                                    </a>
                                                    <div class="product-label">



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429746944, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="bluetooth-speakers">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('bluetooth-speakers')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429746944, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/bluetooth-speakers"
                                                                title="Bluetooth speakers">Bluetooth speakers</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$345.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599265536"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429746944, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="bluetooth-speakers">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('bluetooth-speakers')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/racing-wheel">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-09-b_530X480_crop_center.jpg?v=1650947726"
                                                            alt="Racing wheel">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-09-c_530X480_crop_center.jpg?v=1650947726"
                                                            alt="Racing wheel">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-29%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671433351424, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="racing-wheel">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('racing-wheel')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671433351424, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/racing-wheel" title="Racing wheel">Racing
                                                                wheel</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$2,500.00</span><span
                                                                class="old-price" id="ComparePrice">$3,500.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704600084736"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671433351424, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="racing-wheel">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('racing-wheel')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/smart-watch">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-04_530X480_crop_center.jpg?v=1650946552"
                                                            alt="Smart watch">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-04-a_530X480_crop_center.jpg?v=1650946552"
                                                            alt="Smart watch">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-33%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671432204544, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="smart-watch">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('smart-watch')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671432204544, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/smart-watch" title="Smart watch">Smart
                                                                watch</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$1,022.00</span><span
                                                                class="old-price" id="ComparePrice">$1,520.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599757056"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671432204544, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="smart-watch">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="quiqview('smart-watch')"
                                                            class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/game-controller">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-03_530X480_crop_center.jpg?v=1650977900"
                                                            alt="Game controller">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-03-a_530X480_crop_center.jpg?v=1650977900"
                                                            alt="Game controller">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-53%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671431614720, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="game-controller">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('game-controller')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671431614720, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/game-controller"
                                                                title="Game controller">Game controller</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$590.00</span><span class="old-price"
                                                                id="ComparePrice">$1,250.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599593216"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671431614720, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="game-controller">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('game-controller')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/dell-computer">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-10-a_530X480_crop_center.jpg?v=1650977886"
                                                            alt="Dell computer">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-10-c_530X480_crop_center.jpg?v=1650977886"
                                                            alt="Dell computer">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-30%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671431090432, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="dell-computer">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('dell-computer')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671431090432, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/dell-computer" title="Dell computer">Dell
                                                                computer</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$22,600.00</span><span
                                                                class="old-price" id="ComparePrice">$32,500.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599494912"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671431090432, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="dell-computer">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('dell-computer')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/5g-smart-tablet">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-07-b_530X480_crop_center.jpg?v=1650977830"
                                                            alt="5G smart tablet">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-07-c_530X480_crop_center.jpg?v=1650977830"
                                                            alt="5G smart tablet">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-28%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429517568, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="5g-smart-tablet">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('5g-smart-tablet')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429517568, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/5g-smart-tablet"
                                                                title="5G smart tablet">5G smart tablet</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$5,600.00</span><span
                                                                class="old-price" id="ComparePrice">$7,800.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704599232768"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671429517568, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="5g-smart-tablet">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('5g-smart-tablet')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="/products/5g-smart-phone">
                                                        <img class="img-fluid img1"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-12-a_530X480_crop_center.jpg?v=1650977818"
                                                            alt="5G smart phone">

                                                        <img class="img-fluid img2"
                                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-12-c_530X480_crop_center.jpg?v=1650977818"
                                                            alt="5G smart phone">

                                                    </a>
                                                    <div class="product-label">



                                                        <span class="percent-count">-60%</span>



                                                    </div>
                                                    <div class="product-add-cart">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671428763904, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">+Add to cart</span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                    </div>
                                                    <div class="product-action"><a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="5g-smart-phone">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('5g-smart-phone')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671428763904, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="cart-loading load-anim"><i
                                                                        class="ri-loader-4-line"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ri-check-line"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ri-alert-line"></i></span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="/products/5g-smart-phone" title="5G smart phone">5G
                                                                smart phone</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice">$23,600.00</span><span
                                                                class="old-price" id="ComparePrice">$59,600.00</span>
                                                        </div>

                                                        <div class="product-ratting">
                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="7704598905088"></span>
                                                        </div>

                                                        <p class="product-description">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Nulla luctus metus nec ipsum
                                                            sagittis dapibus. Suspendisse e...</p>
                                                    </div>
                                                    <div class="product-action">

                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(42671428763904, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span class="cart-title"><i
                                                                    class="ri-shopping-cart-line"></i></span>
                                                            <span class="cart-loading load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="cart-added"><i
                                                                    class="ri-check-line"></i></span>
                                                            <span class="cart-unavailable"><i
                                                                    class="ri-alert-line"></i></span>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                            data-product-handle="5g-smart-phone">
                                                            <span class="add-wishlist"><i
                                                                    class="ri-heart-line"></i></span>
                                                            <span class="loading-wishlist load-anim"><i
                                                                    class="ri-loader-4-line"></i></span>
                                                            <span class="remove-wishlist"><i
                                                                    class="ri-heart-fill"></i></span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('5g-smart-phone')" class="quick-view">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <button class="button-prev-template--15924304773376__1648468991dc771b4f"><i
                                            class="ri-arrow-left-line"></i></button>
                                    <button class="button-next-template--15924304773376__1648468991dc771b4f"><i
                                            class="ri-arrow-right-line"></i></button>
                                </div>

                            </div>
                            <script>
                                var swiper = new Swiper('#featured-c21c41bf-1c83-444f-afa9-1bc5735a2671', {
                                    slidesPerColumn: 2,
                                    slidesPerView: 4,
                                    spaceBetween: 30,
                                    observer: true,
                                    loop: false,
                                    observeParents: true,
                                    navigation: {
                                        nextEl: '.button-next-template--15924304773376__1648468991dc771b4f',
                                        prevEl: '.button-prev-template--15924304773376__1648468991dc771b4f',
                                    },
                                    breakpoints: {
                                        0: {
                                            slidesPerView: 1,
                                            spaceBetween: 12
                                        },
                                        479: {
                                            slidesPerView: 2,
                                            spaceBetween: 12
                                        },
                                        640: {
                                            slidesPerView: 2,
                                            spaceBetween: 12
                                        },
                                        768: {
                                            slidesPerView: 3,
                                            spaceBetween: 12
                                        },
                                        979: {
                                            slidesPerView: 3,
                                            spaceBetween: 12
                                        },
                                        1199: {
                                            slidesPerView: 3
                                        }
                                    }
                                });
                            </script> --}}
                        </div>
                    </div>
                </div>
        </section>
        <!-- product-area end -->


    </div>
    {{-- <div id="shopify-section-template--15924304773376__16494098889f364b61" class="shopify-section">
        <section class="banner-grid">
            <div class="offer-banner-area">

                <div class="banner-item">
                    <a href="/collections/earphone" class="banner-image">
                        <img class="img-fluid"
                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/offer-banner-1.png?v=1650870793">
                    </a>
                    <div class="banner-content">

                        <span class="sub-title" style="color: #ffffff;">Get up to 50% off</span>

                        <h1 class="title" style="color: #ffffff;">
                            <span>Bluetooth</span>
                            <span>headphones</span>
                        </h1>

                        <a href="/collections/earphone" class="banner-btn btn-style2">Shop collections</a>

                    </div>
                </div>

                <div class="banner-item">
                    <a href="/collections/laptops-notebooks" class="banner-image">
                        <img class="img-fluid"
                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/offer-banner-2.jpg?v=1650870793">
                    </a>
                    <div class="banner-content">

                        <span class="sub-title" style="color: #ffffff;">Get up to 33% off</span>

                        <h1 class="title" style="color: #ffffff;">
                            <span>Laptop I5</span>
                            <span>collection</span>
                        </h1>

                        <a href="/collections/laptops-notebooks" class="banner-btn btn-style2">Shop collections</a>

                    </div>
                </div>

            </div>
        </section>


    </div> --}}
    <div id="shopify-section-template--15924304773376__1650876933ae7882f4" class="shopify-section">
        <section class="new-category collection-category-template--15924304773376__1650876933ae7882f4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="pro-area">
                            <div class="section-capture">
                                <div class="section-title">

                                    <h2>
                                        Featured product
                                    </h2>

                                </div>
                            </div>

                            <div class="swiper-container" id="new-product-">
                                <div class="swiper-wrapper">
                                    @foreach ($featured as $row)
                                        <div class="swiper-slide">
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a class="pro-img"
                                                            href="{{ route('product.details', $row->slug) }}">
                                                            <img class="img-fluid img1"
                                                                src="{{ asset('public/storage/' . $row->fea_img) }}"
                                                                alt="Drone camera" width="297px" height="297px"
                                                                style="width: 297px; height: 297px;">

                                                            <img class="img-fluid img2"
                                                                src="@if ($row->singleImage != null) {{ asset('public/storage/' . $row->singleImage->image) }} @else {{ asset('public/storage/' . $row->fea_img) }} @endif"
                                                                alt="Drone camera" width="297px" height="297px"
                                                                style="width: 297px; height: 297px;">

                                                        </a>
                                                        <div class="product-label">
                                                            <span
                                                                class="percent-count">-{{ number_format($row->discount, 1) }}%</span>
                                                            <span class="sale">SALE</span>

                                                        </div>
                                                        {{-- <div class="product-add-cart">
                                                            {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}
                                                        </div>
                                                        <div class="product-action">
                                                            {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}

                                                        </div> --}}
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-info">
                                                            <div class="pro-title">
                                                                <a href="{{ route('product.details', $row->slug) }}"
                                                                    title="Drone camera">{{ \Illuminate\Support\Str::limit($row->title, 15, $end = '...') }}</a>
                                                            </div>
                                                            <div class="price-box">

                                                                <span class="new-price new-price-compare"
                                                                    id="ProductPrice2">${{ $row->new_price }}</span><span
                                                                    class="old-price"
                                                                    id="ComparePrice2">${{ $row->old_price }}</span>
                                                            </div>

                                                        </div>
                                                        <div class="product-info mt-3">
                                                            <div class="row">
                                                                <div class="col-4 text-start ps-4">
                                                                    @if (auth()->check())
                                                                        @if ($row->wishlist == null)
                                                                            <a href="javascript:void(0)"
                                                                                class="text-start ms-2"
                                                                                onclick="liked({{ $row->id }})"
                                                                                alt="like" style="padding: 8px;"><i
                                                                                    class="far fa-thumbs-up  fs-5"
                                                                                    id="thumb-icon-{{ $row->id }}"></i></a>
                                                                        @else
                                                                            <a href="javascript:void(0)"
                                                                                class="text-start ms-2"
                                                                                onclick="liked({{ $row->id }})"
                                                                                alt="Unlike"  style="padding: 8px;"><i
                                                                                    class="fas fa-thumbs-up  fs-5"
                                                                                    id="thumb-icon-{{ $row->id }}"
                                                                                    style="color: #ed1c24;"></i></a>
                                                                        @endif
                                                                    @else
                                                                        <a href="{{ route('login') }}"
                                                                            class="text-start ms-2"  style="padding: 8px;"><i
                                                                                class="far fa-thumbs-up  fs-5"></i></a>
                                                                    @endif
                                                                </div>
                                                                {{-- <div class="col-6 p-0">
                                                                </div> --}}
                                                                <div class="col-8 flat-social text-end">
                                                                    {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <button
                                    class="swiper-button swiper-button-prev-template--15924304773376__1650876933ae7882f4"><i
                                        class="fas fa-angle-double-left"></i></button>
                                <button
                                    class="swiper-button swiper-button-next-template--15924304773376__1650876933ae7882f4"><i
                                        class="fas fa-angle-double-right"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiper = new Swiper('#new-product-', {
                slidesPerColumn: 1,
                slidesPerView: 4,
                spaceBetween: 30,
                observer: true,
                loop: true,
                observeParents: true,
                navigation: {
                    nextEl: '.swiper-button-next-template--15924304773376__1650876933ae7882f4',
                    prevEl: '.swiper-button-prev-template--15924304773376__1650876933ae7882f4',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 12
                    },
                    479: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 12
                    },
                    979: {
                        slidesPerView: 3,
                        spaceBetween: 12
                    },
                    1199: {
                        slidesPerView: 3
                    }
                }
            });
        </script>



    </div>
    {{-- <div id="shopify-section-template--15924304773376__16494142729bb2b305" class="shopify-section">
        <section class="our-brand-logo">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="swiper-container" id="brand-logo">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-5.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-2.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-3.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-1.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-6.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-4.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> --}}
    <script>
        var swiper = new Swiper('#brand-logo', {
            slidesPerColumn: 1,
            slidesPerView: 4,
            spaceBetween: 30,
            observer: true,
            loop: true,
            observeParents: true,
            navigation: {
                nextEl: '.swiper-button-next-template--15924304773376__16494142729bb2b305',
                prevEl: '.swiper-button-prev-template--15924304773376__16494142729bb2b305',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 12
                },
                479: {
                    slidesPerView: 2,
                    spaceBetween: 12
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 12
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 12
                },
                979: {
                    slidesPerView: 3,
                    spaceBetween: 12
                },
                1199: {
                    slidesPerView: 3
                }
            }
        });
    </script>
@endsection
