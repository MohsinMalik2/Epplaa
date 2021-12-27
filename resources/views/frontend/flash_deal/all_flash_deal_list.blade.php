@extends('frontend.layouts.app')

@section('content')

<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('Flash Deals')}}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">
                            {{ translate('Home')}}
                        </a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('flash-deals') }}">
                            "{{ translate('Flash Deals') }}"
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 gutters-10">
            @foreach($all_flash_deals as $single)
            <div class="col">
                <div class="bg-white rounded shadow-sm mb-3">
                    <a href="{{ route('flash-deal-details', $single->slug) }}" class="d-block text-reset">
                        <img
                            src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                            data-src="{{ uploaded_asset($single->banner) }}"
                            alt="{{ $single->title }}"
                            class="img-fluid lazyload rounded w-100">
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <h1 class="page-title">{{ translate('Flash Deals')}}</h1>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html">Home</a></li>
                        <li>Flash Deals</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content pb-10 mb-2">
                <div class="container">
                    <section class="category-section category-2cols-simple mb-10 pb-1">
                        <!-- <h2 class="title title-center mb-5">Flash Deals</h2> -->
                        <div class="swiper-container swiper-theme show-code-action" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 2
                                },
                                '992': {
                                    'slidesPerView': 3
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
                                @foreach($all_flash_deals as $single)
                                    <div class="swiper-slide category-wrap">
                                        <div class="category category-absolute category-default overlay-zoom">
                                            <a href="{{ route('flash-deal-details', $single->slug) }}">
                                                <figure>
                                                    <img src="{{ uploaded_asset($single->banner) }}"
                                                        alt="Category Banner" width="400" height="200"
                                                        style="background-color: #423D39;" />
                                                </figure>
                                            </a>
                                            <div class="category-content y-50">
                                                <h4 class="category-title text-white font-weight-bolder">{{ $single->title }}</h4>
                                                
                                                <a href="{{ route('flash-deal-details', $single->slug) }}"
                                                    class="btn btn-white btn-link btn-underline">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </section>
                    <!-- End of Cateogry Section .category-2cols-simple -->

                </div>
            </div>
</main>

@endsection
