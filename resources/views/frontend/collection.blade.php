@extends('layouts.app')
@section('content')
    <section class="breadcrumb02-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb main-title start-->
                        <div class="breadcrumb-title">
                            <h2>Products</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item">
                                <a href="/" title="Back to the home page">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span>Products</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main role="main">
        <div id="shopify-section-template--15924304740608__collection-template" class="shopify-section">
            <section class="main-content-wrap shop-page section-ptb">
                <div class="container">
                    <div class="row position-left">
                        <div class="col-xl-9 col-lg-8 col-md-12 col-12 pro-grli-wrap">
                            <div class="collection-img-wrap">
                                <h6 class="st-title">Products ({{ count($products) }})</h6>
                                <div class="collection-info">
                                    <div class="collection-image"><img class="img-fluid"
                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/collection-pages.jpg?v=1650968334">
                                    </div>
                                    <div class="collection-description">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book
                                        </p>

                                    </div>
                                </div>
                            </div><!-- shop-top-bar start -->
                            <div class="shop-top-bar">
                                <div class="product-filter">
                                    <button class="filter-button" type="button">
                                        <i class="ri-filter-2-line"></i>
                                        <span>Filter</span>
                                    </button>
                                </div>

                                <div class="product-view-mode">
                                    <!-- shop-item-filter-list start -->
                                    <a class="list-change-view grid-three active" data-grid-view="3"><i
                                            class="ri-function-line"></i></a>
                                    <a class="list-change-view list-one " data-grid-view="1"><i
                                            class="ri-list-unordered"></i></a>
                                    <!-- shop-item-filter-list end -->
                                </div>



                                <!-- product-short start -->
                                <div class="product-short">
                                    <label for="SortBy">Sort by:</label>
                                    <select class="nice-select" name="sortby" id="SortBy">
                                        <option value="manual">Featured</option>
                                        <option value="best-selling">Best Selling</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-descending">Date, new to old</option>
                                        <option value="created-ascending">Date, old to new</option>
                                    </select><a href="javascript:void(0)" class="short-title">
                                        <span class="sort-title">Alphabetically, A-Z</span>
                                        <span class="sort-icon"><i class="ri-arrow-down-s-line"></i></span>
                                    </a>
                                    <a href="javascript:void(0)" class="short-title short-title-lg">
                                        <span class="sort-title">Alphabetically, A-Z</span>
                                        <span class="sort-icon"><i class="ri-arrow-down-s-line"></i></span>
                                    </a>
                                    <ul role="list" class="collapse" id="select-wrap">
                                        <li><a href="?sort_by=manual">Featured</a></li>
                                        <li><a href="?sort_by=best-selling">Best Selling</a></li>
                                        <li class="selected"><a href="?sort_by=title-ascending">Alphabetically, A-Z</a></li>
                                        <li><a href="?sort_by=title-descending">Alphabetically, Z-A</a></li>
                                        <li><a href="?sort_by=price-ascending">Price, low to high</a></li>
                                        <li><a href="?sort_by=price-descending">Price, high to low</a></li>
                                        <li><a href="?sort_by=created-descending">Date, new to old</a></li>
                                        <li><a href="?sort_by=created-ascending">Date, old to new</a></li>
                                    </ul>
                                </div>

                                <!-- product-short end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <div class="get-data-products">
                                <div class="shop-grid">
                                    <div id="ProductGridContainer">
                                        <div class="product-grid-view">
                                            <div class="shop-product-wrap grid-3 collection">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="product-view" id="product-grid"
                                                            data-id="template--15924304740608__collection-template">
                                                            @foreach ($products as $row)
                                                                <li class="st-col-item">
                                                                    <div class="single-product-wrap">
                                                                        <div class="product-image">
                                                                            <a class="pro-img"
                                                                                href="{{ route('product.details', $row->slug) }}">
                                                                                <img class="img-fluid img1"
                                                                                    src="{{ asset('public/storage/'.$row->fea_img) }}"
                                                                                    alt="{{ $row->title }}">

                                                                                <img class="img-fluid img2"
                                                                                    src="@if($row->singleImage != NULL){{ asset('public/storage/'.$row->singleImage->image) }} @else {{ asset('public/storage/'.$row->fea_img) }} @endif"
                                                                                    alt="{{ $row->title }}">

                                                                            </a>
                                                                            <div class="product-label">



                                                                                <span class="percent-count">-{{ number_format($row->discount,1) }}%</span>
                                                                                <span class="sale">SALE</span>



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
                                                                            <div class="product-action"><a
                                                                                    href="javascript:void(0)"
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
                                                                                    onclick="quiqview('5g-smart-phone')"
                                                                                    class="quick-view">
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
                                                                                    <a href="/collections/all/products/5g-smart-phone"
                                                                                        title="5G smart phone">5G smart
                                                                                        phone</a>
                                                                                </div>
                                                                                <div class="price-box">
                                                                                    <span class="new-price new-price-compare"
                                                                                        id="ProductPrice">$23,600.00</span><span
                                                                                        class="old-price"
                                                                                        id="ComparePrice">$59,600.00</span>
                                                                                </div>

                                                                                <div class="product-ratting">
                                                                                    <span class="spr-badge"
                                                                                        id="spr_badge_7704598905088"
                                                                                        data-rating="0.0"><span
                                                                                            class="spr-starrating spr-badge-starrating"><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i></span><span
                                                                                            class="spr-badge-caption">No
                                                                                            reviews</span>
                                                                                    </span>

                                                                                </div>

                                                                                <p class="product-description">Lorem ipsum
                                                                                    dolor sit amet, consectetur adipiscing elit.
                                                                                    Nulla luctus metus nec ipsum sagittis
                                                                                    dapibus. Suspendisse e...</p>
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
                                                                                    onclick="quiqview('5g-smart-phone')"
                                                                                    class="quick-view">
                                                                                    <i class="ri-eye-line"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12 col-12 pro-grli-wrap">
                            <div id="main-collection-filters" data-id="template--15924304740608__collection-template">
                                <div class="shop-sidebar-inner">
                                    <div class="shop-sidebar-wrap filter-sidebar">
                                        <button class="close-filter-sidebar" type="button"><i
                                                class="ri-close-line"></i></button>
                                        <div class="shop-sidebar sidebar-wedget shop-collection">
                                            <h6 class="title">Categories</h6>
                                            <a class="title" data-bs-toggle="collapse"
                                                href="#collapse-Categories">Categories</a>
                                            <div class="collapse filter-element" id="collapse-Categories">
                                                <ul class="scrollbar">
                                                    @foreach ($category as $row)
                                                        <li><input type="checkbox" class="cust-checkbox"
                                                                name="{{ $row->name }}" @if($row->slug == $slug) checked @endif><a
                                                                href="{{ route('collection.all',$row->slug) }}"
                                                                class="cust-checkbox-label" title="{{ $row->name }}">
                                                                <span class="filter-name">{{ $row->name }}</span>
                                                                <span class="count-check">({{ count($row->products) }})</span>
                                                                <span class="cust-check @if($row->slug == $slug) cust-check2 @endif"></span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- <facet-filters-form class="facets">
                                            <form id="FacetFiltersForm" class="facets__form">
                                                <div id="FacetsWrapperDesktop" class="facets__wrapper">
                                                    <div class="shop-sidebar sidebar-filter">
                                                        <h6 class="title">Filter</h6>

                                                        <div class="facets-header">
                                                            <span id="ProductCount" class="product-count-text">11
                                                                products
                                                            </span>
                                                            <span class="loading-spinner">
                                                                <svg aria-hidden="true" focusable="false"
                                                                    role="presentation" class="spinner"
                                                                    viewBox="0 0 66 66"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <circle class="path" fill="none"
                                                                        stroke-width="6" cx="33" cy="33"
                                                                        r="30"></circle>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="active-filter active-facets-desktop">
                                                            <ul>
                                                                <li>






                                                                    <facet-remove>
                                                                        <a href="/collections/all"
                                                                            class="clear-all">Clear all</a>
                                                                    </facet-remove>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                    <div class="shop-sidebar sidebar-wedget disclosure-has-popup facets__disclosure js-filter availability"
                                                        data-index="1">
                                                        <h6 class="title">Availability</h6>
                                                        <a class="title" data-bs-toggle="collapse"
                                                            href="#collapse-1">Availability</a>
                                                        <div class="facets-header">
                                                            <span class="facets__selected no-js-hidden">0 selected</span>
                                                            <facet-remove>
                                                                <a href="/collections/all"
                                                                    class="facets__reset">Reset</a>
                                                            </facet-remove>
                                                        </div>
                                                        <div class="collapse filter-element" id="collapse-1">
                                                            <ul class="multiple-filters scrollbar">
                                                                <li class="availability">
                                                                    <label for="Filter-Availability-1"
                                                                        class="cust-checkbox-label availability in-stock"
                                                                        title="In stock">
                                                                        <input type="checkbox"
                                                                            id="Filter-Availability-1"
                                                                            name="filter.v.availability" value="1"
                                                                            class="cust-checkbox">
                                                                        <span class="filter-name">In stock</span>
                                                                        <span class="count-check">(11)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="availability">
                                                                    <label for="Filter-Availability-2"
                                                                        class="cust-checkbox-label availability out-of-stock"
                                                                        title="Out of stock">
                                                                        <input type="checkbox"
                                                                            id="Filter-Availability-2"
                                                                            name="filter.v.availability" value="0"
                                                                            class="cust-checkbox">
                                                                        <span class="filter-name">Out of stock</span>
                                                                        <span class="count-check">(4)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>




                                                    <div class="shop-sidebar sidebar-wedget disclosure-has-popup facets__disclosure js-filter"
                                                        data-index="2">
                                                        <h6 class="title">Price</h6>
                                                        <a class="title" data-bs-toggle="collapse"
                                                            href="#collapse-2">Price</a>
                                                        <div class="facets-header"><span
                                                                class="facets__selected no-js-hidden">The highest price is
                                                                $87,000.00</span>
                                                            <facet-remove>
                                                                <a href="/collections/all"
                                                                    class="facets__reset">Reset</a>
                                                            </facet-remove>
                                                        </div>
                                                        <div class="collapse filter-element" id="collapse-2">
                                                            <price-range class="price-range">

                                                                <div class="price-range-group group-range"
                                                                    style="--range-min: 0.0%; --range-max: 100.0%">
                                                                    <input type="range" aria-label="From"
                                                                        class="range" min="0" max="87000"
                                                                        value="0">
                                                                    <input type="range" aria-label="To"
                                                                        class="range" min="0" max="87000"
                                                                        value="87000">
                                                                </div>
                                                                <div class="price-input-group group-input">
                                                                    <div class="price-range-input input-prefix">
                                                                        <label class="input-prefix-label">From</label>
                                                                        <span class="input-prefix-value">$</span>
                                                                        <input aria-label="From"
                                                                            class="input-prefix-field" type="number"
                                                                            inputmode="numeric"
                                                                            name="filter.v.price.gte" min="0"
                                                                            max="87000" placeholder="0">
                                                                    </div>
                                                                    <span class="price-range-delimeter">-</span>
                                                                    <div class="price-range-input input-prefix">
                                                                        <label class="input-prefix-label">To</label>
                                                                        <span class="input-prefix-value">$</span>
                                                                        <input aria-label="To"
                                                                            class="input-prefix-field" type="number"
                                                                            inputmode="numeric"
                                                                            name="filter.v.price.lte" min="0"
                                                                            max="87000" placeholder="87000">
                                                                    </div>
                                                                </div>
                                                            </price-range>
                                                        </div>



                                                        <div class="shop-sidebar sidebar-wedget disclosure-has-popup facets__disclosure js-filter product type"
                                                            data-index="3">
                                                            <h6 class="title">Product type</h6>
                                                            <a class="title" data-bs-toggle="collapse"
                                                                href="#collapse-3">Product type</a>
                                                            <div class="facets-header">
                                                                <span class="facets__selected no-js-hidden">0
                                                                    selected</span>
                                                                <facet-remove>
                                                                    <a href="/collections/all"
                                                                        class="facets__reset">Reset</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse filter-element" id="collapse-3">
                                                                <ul class="multiple-filters scrollbar">
                                                                    <li class="product type">
                                                                        <label for="Filter-Product type-1"
                                                                            class="cust-checkbox-label product type cameras"
                                                                            title="Cameras">
                                                                            <input type="checkbox"
                                                                                id="Filter-Product type-1"
                                                                                name="filter.p.product_type"
                                                                                value="Cameras" class="cust-checkbox">
                                                                            <span class="filter-name">Cameras</span>
                                                                            <span class="count-check">(6)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="product type">
                                                                        <label for="Filter-Product type-2"
                                                                            class="cust-checkbox-label product type laptops"
                                                                            title="Laptops">
                                                                            <input type="checkbox"
                                                                                id="Filter-Product type-2"
                                                                                name="filter.p.product_type"
                                                                                value="Laptops" class="cust-checkbox">
                                                                            <span class="filter-name">Laptops</span>
                                                                            <span class="count-check">(4)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="product type">
                                                                        <label for="Filter-Product type-3"
                                                                            class="cust-checkbox-label product type saris-&amp;-lehengas"
                                                                            title="Saris &amp; Lehengas">
                                                                            <input type="checkbox"
                                                                                id="Filter-Product type-3"
                                                                                name="filter.p.product_type"
                                                                                value="Saris &amp; Lehengas"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">Saris &amp;
                                                                                Lehengas</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>



                                                        <div class="shop-sidebar sidebar-wedget disclosure-has-popup facets__disclosure js-filter brand"
                                                            data-index="4">
                                                            <h6 class="title">Brand</h6>
                                                            <a class="title" data-bs-toggle="collapse"
                                                                href="#collapse-4">Brand</a>
                                                            <div class="facets-header">
                                                                <span class="facets__selected no-js-hidden">0
                                                                    selected</span>
                                                                <facet-remove>
                                                                    <a href="/collections/all"
                                                                        class="facets__reset">Reset</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse filter-element" id="collapse-4">
                                                                <ul class="multiple-filters scrollbar">
                                                                    <li class="brand">
                                                                        <label for="Filter-Brand-1"
                                                                            class="cust-checkbox-label brand electron"
                                                                            title="Electron">
                                                                            <input type="checkbox" id="Filter-Brand-1"
                                                                                name="filter.p.vendor" value="Electron"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">Electron</span>
                                                                            <span class="count-check">(11)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>



                                                        <div class="shop-sidebar sidebar-wedget disclosure-has-popup facets__disclosure js-filter color"
                                                            data-index="5">
                                                            <h6 class="title">Color</h6>
                                                            <a class="title" data-bs-toggle="collapse"
                                                                href="#collapse-5">Color</a>
                                                            <div class="facets-header">
                                                                <span class="facets__selected no-js-hidden">0
                                                                    selected</span>
                                                                <facet-remove>
                                                                    <a href="/collections/all"
                                                                        class="facets__reset">Reset</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse filter-element" id="collapse-5">
                                                                <ul class="multiple-filters scrollbar">
                                                                    <li class="color">
                                                                        <label for="Filter-Color-1"
                                                                            class="cust-checkbox-label color darkcyan"
                                                                            title="DarkCyan">
                                                                            <input type="checkbox" id="Filter-Color-1"
                                                                                name="filter.v.option.color"
                                                                                value="DarkCyan" class="cust-checkbox">
                                                                            <span class="filter-name">DarkCyan</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-2"
                                                                            class="cust-checkbox-label color darkgoldenrod"
                                                                            title="DarkGoldenRod">
                                                                            <input type="checkbox" id="Filter-Color-2"
                                                                                name="filter.v.option.color"
                                                                                value="DarkGoldenRod"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">DarkGoldenRod</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-3"
                                                                            class="cust-checkbox-label color darkkhaki"
                                                                            title="DarkKhaki">
                                                                            <input type="checkbox" id="Filter-Color-3"
                                                                                name="filter.v.option.color"
                                                                                value="DarkKhaki" class="cust-checkbox">
                                                                            <span class="filter-name">DarkKhaki</span>
                                                                            <span class="count-check">(2)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-4"
                                                                            class="cust-checkbox-label color indianred"
                                                                            title="IndianRed">
                                                                            <input type="checkbox" id="Filter-Color-4"
                                                                                name="filter.v.option.color"
                                                                                value="IndianRed" class="cust-checkbox">
                                                                            <span class="filter-name">IndianRed</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-5"
                                                                            class="cust-checkbox-label color khaki"
                                                                            title="Khaki">
                                                                            <input type="checkbox" id="Filter-Color-5"
                                                                                name="filter.v.option.color"
                                                                                value="Khaki" class="cust-checkbox">
                                                                            <span class="filter-name">Khaki</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-6"
                                                                            class="cust-checkbox-label color lightcoral"
                                                                            title="LightCoral">
                                                                            <input type="checkbox" id="Filter-Color-6"
                                                                                name="filter.v.option.color"
                                                                                value="LightCoral"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">LightCoral</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-7"
                                                                            class="cust-checkbox-label color lightpink"
                                                                            title="LightPink">
                                                                            <input type="checkbox" id="Filter-Color-7"
                                                                                name="filter.v.option.color"
                                                                                value="LightPink" class="cust-checkbox">
                                                                            <span class="filter-name">LightPink</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-8"
                                                                            class="cust-checkbox-label color lightsalmon"
                                                                            title="LightSalmon">
                                                                            <input type="checkbox" id="Filter-Color-8"
                                                                                name="filter.v.option.color"
                                                                                value="LightSalmon"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">LightSalmon</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-9"
                                                                            class="cust-checkbox-label color lightseagreen"
                                                                            title="LightSeaGreen">
                                                                            <input type="checkbox" id="Filter-Color-9"
                                                                                name="filter.v.option.color"
                                                                                value="LightSeaGreen"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">LightSeaGreen</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-10"
                                                                            class="cust-checkbox-label color lightskyblue"
                                                                            title="LightSkyBlue">
                                                                            <input type="checkbox" id="Filter-Color-10"
                                                                                name="filter.v.option.color"
                                                                                value="LightSkyBlue"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">LightSkyBlue</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-11"
                                                                            class="cust-checkbox-label color lightslategray"
                                                                            title="LightSlateGray">
                                                                            <input type="checkbox" id="Filter-Color-11"
                                                                                name="filter.v.option.color"
                                                                                value="LightSlateGray"
                                                                                class="cust-checkbox">
                                                                            <span
                                                                                class="filter-name">LightSlateGray</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-12"
                                                                            class="cust-checkbox-label color navajowhite"
                                                                            title="NavajoWhite">
                                                                            <input type="checkbox" id="Filter-Color-12"
                                                                                name="filter.v.option.color"
                                                                                value="NavajoWhite"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">NavajoWhite</span>
                                                                            <span class="count-check">(2)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-13"
                                                                            class="cust-checkbox-label color oldlace"
                                                                            title="OldLace">
                                                                            <input type="checkbox" id="Filter-Color-13"
                                                                                name="filter.v.option.color"
                                                                                value="OldLace" class="cust-checkbox">
                                                                            <span class="filter-name">OldLace</span>
                                                                            <span class="count-check">(2)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-14"
                                                                            class="cust-checkbox-label color palegoldenrod"
                                                                            title="PaleGoldenRod">
                                                                            <input type="checkbox" id="Filter-Color-14"
                                                                                name="filter.v.option.color"
                                                                                value="PaleGoldenRod"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">PaleGoldenRod</span>
                                                                            <span class="count-check">(3)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-15"
                                                                            class="cust-checkbox-label color palevioletred"
                                                                            title="PaleVioletRed">
                                                                            <input type="checkbox" id="Filter-Color-15"
                                                                                name="filter.v.option.color"
                                                                                value="PaleVioletRed"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">PaleVioletRed</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-16"
                                                                            class="cust-checkbox-label color peachpuff"
                                                                            title="PeachPuff">
                                                                            <input type="checkbox" id="Filter-Color-16"
                                                                                name="filter.v.option.color"
                                                                                value="PeachPuff" class="cust-checkbox">
                                                                            <span class="filter-name">PeachPuff</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-17"
                                                                            class="cust-checkbox-label color salmon"
                                                                            title="Salmon">
                                                                            <input type="checkbox" id="Filter-Color-17"
                                                                                name="filter.v.option.color"
                                                                                value="Salmon" class="cust-checkbox">
                                                                            <span class="filter-name">Salmon</span>
                                                                            <span class="count-check">(4)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-18"
                                                                            class="cust-checkbox-label color seashell"
                                                                            title="SeaShell">
                                                                            <input type="checkbox" id="Filter-Color-18"
                                                                                name="filter.v.option.color"
                                                                                value="SeaShell" class="cust-checkbox">
                                                                            <span class="filter-name">SeaShell</span>
                                                                            <span class="count-check">(4)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-19"
                                                                            class="cust-checkbox-label color silver"
                                                                            title="Silver">
                                                                            <input type="checkbox" id="Filter-Color-19"
                                                                                name="filter.v.option.color"
                                                                                value="Silver" class="cust-checkbox">
                                                                            <span class="filter-name">Silver</span>
                                                                            <span class="count-check">(3)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="color">
                                                                        <label for="Filter-Color-20"
                                                                            class="cust-checkbox-label color silver"
                                                                            title="silver">
                                                                            <input type="checkbox" id="Filter-Color-20"
                                                                                name="filter.v.option.color"
                                                                                value="silver" class="cust-checkbox">
                                                                            <span class="filter-name">silver</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>



                                                        <div class="shop-sidebar sidebar-wedget disclosure-has-popup facets__disclosure js-filter material"
                                                            data-index="6">
                                                            <h6 class="title">Material</h6>
                                                            <a class="title" data-bs-toggle="collapse"
                                                                href="#collapse-6">Material</a>
                                                            <div class="facets-header">
                                                                <span class="facets__selected no-js-hidden">0
                                                                    selected</span>
                                                                <facet-remove>
                                                                    <a href="/collections/all"
                                                                        class="facets__reset">Reset</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse filter-element" id="collapse-6">
                                                                <ul class="multiple-filters scrollbar">
                                                                    <li class="material">
                                                                        <label for="Filter-Material-1"
                                                                            class="cust-checkbox-label material denim"
                                                                            title="Denim">
                                                                            <input type="checkbox"
                                                                                id="Filter-Material-1"
                                                                                name="filter.v.option.material"
                                                                                value="Denim" class="cust-checkbox">
                                                                            <span class="filter-name">Denim</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="material">
                                                                        <label for="Filter-Material-2"
                                                                            class="cust-checkbox-label material latex"
                                                                            title="Latex">
                                                                            <input type="checkbox"
                                                                                id="Filter-Material-2"
                                                                                name="filter.v.option.material"
                                                                                value="Latex" class="cust-checkbox">
                                                                            <span class="filter-name">Latex</span>
                                                                            <span class="count-check">(2)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="material">
                                                                        <label for="Filter-Material-3"
                                                                            class="cust-checkbox-label material metal"
                                                                            title="Metal">
                                                                            <input type="checkbox"
                                                                                id="Filter-Material-3"
                                                                                name="filter.v.option.material"
                                                                                value="Metal" class="cust-checkbox">
                                                                            <span class="filter-name">Metal</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="material">
                                                                        <label for="Filter-Material-4"
                                                                            class="cust-checkbox-label material nitrile"
                                                                            title="Nitrile">
                                                                            <input type="checkbox"
                                                                                id="Filter-Material-4"
                                                                                name="filter.v.option.material"
                                                                                value="Nitrile" class="cust-checkbox">
                                                                            <span class="filter-name">Nitrile</span>
                                                                            <span class="count-check">(2)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="material">
                                                                        <label for="Filter-Material-5"
                                                                            class="cust-checkbox-label material paper-towel"
                                                                            title="Paper towel">
                                                                            <input type="checkbox"
                                                                                id="Filter-Material-5"
                                                                                name="filter.v.option.material"
                                                                                value="Paper towel"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">Paper towel</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="material">
                                                                        <label for="Filter-Material-6"
                                                                            class="cust-checkbox-label material rubber"
                                                                            title="Rubber">
                                                                            <input type="checkbox"
                                                                                id="Filter-Material-6"
                                                                                name="filter.v.option.material"
                                                                                value="Rubber" class="cust-checkbox">
                                                                            <span class="filter-name">Rubber</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="material">
                                                                        <label for="Filter-Material-7"
                                                                            class="cust-checkbox-label material silicone"
                                                                            title="Silicone">
                                                                            <input type="checkbox"
                                                                                id="Filter-Material-7"
                                                                                name="filter.v.option.material"
                                                                                value="Silicone" class="cust-checkbox">
                                                                            <span class="filter-name">Silicone</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="material">
                                                                        <label for="Filter-Material-8"
                                                                            class="cust-checkbox-label material stainless-steel"
                                                                            title="Stainless steel">
                                                                            <input type="checkbox"
                                                                                id="Filter-Material-8"
                                                                                name="filter.v.option.material"
                                                                                value="Stainless steel"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">Stainless
                                                                                steel</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </facet-filters-form> --}}
                                    </div>
                                </div>
                                <script
                                    src="//cdn.shopify.com/s/files/1/0641/3431/6288/t/2/assets/collection-sidebar.js?v=172590729733297730601650619279"
                                    defer="defer"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script>
        Shopify.queryParams = {};
        if (location.search.length) {
            for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                aKeyValue = aCouples[i].split('=');
                if (aKeyValue.length > 1) {
                    Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                }
            }
        }

        var $select = $('#SortBy');
        $('a[href="#sort"]').click(function() {
            $select.val($(this).data('select'));
            event.preventDefault();
            Shopify.queryParams.sort_by = jQuery(this).data('select');
            location.search = jQuery.param(Shopify.queryParams);
        });

        $('.list-change-view').on("click", function() {
            event.preventDefault();
            var data_grid = $(this).attr('data-grid-view');
            if ($('.shop-product-wrap').hasClass('grid-1') || $('.shop-product-wrap').hasClass('grid-2') || $(
                    '.shop-product-wrap').hasClass('grid-3') || $('.shop-product-wrap').hasClass('grid-4')) {

                $('.shop-product-wrap').removeClass('grid-1');
                $('.shop-product-wrap').removeClass('grid-2');
                $('.shop-product-wrap').removeClass('grid-3');
                $('.shop-product-wrap').removeClass('grid-4');
                $('.shop-product-wrap').addClass('grid-' + data_grid);
            } else {
                $('.shop-product-wrap').addClass('grid-' + data_grid);
            }
        });

        $('.list-change-view').on("click", function() {
            $('.list-change-view').removeClass('active');
            $(this).addClass('active');
        });

        $(function() {
            $('#SortBy').val('title-ascending').bind('change', function() {
                Shopify.queryParams.sort_by = jQuery(this).val();
                location.search = jQuery.param(Shopify.queryParams);
            });
        });

        $('.product-short a.short-title-lg').on('click', function() {
            if ($('#select-wrap').hasClass('active')) {
                $('#select-wrap').removeClass('active');
                $(this).removeClass('active');
            } else {
                $('#select-wrap').addClass('active');
                $(this).addClass('active');
            }
        });
    </script>
@endsection
