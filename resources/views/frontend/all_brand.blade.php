@extends('frontend.layouts.app')

@section('content')

<!-- <section class="pt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('All Brands') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('brands.all') }}">"{{ translate('All Brands') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="mb-4">
    <div class="container">
        <div class="bg-white shadow-sm rounded px-3 pt-3">
            <div class="row row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gutters-10">
                @foreach (\App\Models\Brand::all() as $brand)
                    <div class="col text-center">
                        <a href="{{ route('products.brand', $brand->slug) }}" class="d-block p-3 mb-3 border border-light rounded hov-shadow-md">
                            <img src="{{ uploaded_asset($brand->logo) }}" class="lazyload mx-auto h-70px mw-100" alt="{{ $brand->getTranslation('name') }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section> -->
<!-- Start of Main -->
<main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">{{ translate('All Brands') }}</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>>{{ translate('All Brands') }}</li>
                      
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row grid cols-xl-3 cols-lg-2 cols-md-2 mb-2" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }">
                        @foreach (\App\Models\Brand::all() as $brand)
                            <article class="post post-grid-type grid-item overlay-zoom fashion">
                                <figure class="post-media br-sm">
                                    <a href="{{ route('products.brand', $brand->slug) }}">
                                        <img src="{{ uploaded_asset($brand->logo) }}" width="600"
                                            height="420" alt="{{ $brand->getTranslation('name') }}">
                                    </a>
                                </figure>
                            </article>
                        @endforeach
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

@endsection
