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
        <div id="shopify-section-template--15924304806144__list-collection-template" class="shopify-section">
            <!-- shop start -->
            <section class="all-collection section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="grid" style="position: relative; height: 1304px;">
                                @foreach ($category as $row)
                                    <li style="position: absolute; left: 0px; top: 0px;">
                                        <div class="collection-img"
                                            style="background-image: url('{{ asset("public/storage/".$row->icon) }}');">
                                            <span>{{ count($row->products) }}</span>
                                        </div>
                                        <div class="collection-content">
                                            <div class="content">
                                                <h6>{{ $row->name }}</h6>
                                            </div>
                                            <a href="{{ route('collection.all',['type'=>'section','slug'=>$row->slug]) }}">Shop now</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                $('.grid').imagesLoaded(function() {
                    $('.grid').isotope({
                        itemSelector: 'li',
                        layoutMode: 'masonry'
                    });
                });
            </script>
        </div>
    </main>
@endsection
