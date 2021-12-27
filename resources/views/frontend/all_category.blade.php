@extends('frontend.layouts.app')

@section('content')
<!-- <section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('All Categories') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('categories.all') }}">"{{ translate('All Categories') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="container">
        @foreach ($categories as $key => $category)
            <div class="mb-3 bg-white shadow-sm rounded">
                <div class="p-3 border-bottom fs-16 fw-600">
                    <a href="{{ route('products.category', $category->slug) }}" class="text-reset">{{  $category->getTranslation('name') }}</a>
                </div>
                <div class="p-3 p-lg-4">
                    <div class="row">
                        @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category->id) as $key => $first_level_id)
                        <div class="col-lg-4 col-6 text-left">
                            <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="{{ route('products.category', \App\Models\Category::find($first_level_id)->slug) }}">{{ \App\Models\Category::find($first_level_id)->getTranslation('name') }}</a></h6>
                            <ul class="mb-3 list-unstyled pl-2">
                                @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id) as $key => $second_level_id)
                                <li class="mb-2">
                                    <a class="text-reset" href="{{ route('products.category', \App\Models\Category::find($second_level_id)->slug) }}" >{{ \App\Models\Category::find($second_level_id)->getTranslation('name') }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section> -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <h1 class="page-title">{{ translate('All Categories') }}</h1>
        <h4 class="page-subtitle"> & Sub Categories .</h4>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav mb-10 pb-1">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <!-- <li><a href="{{ route('categories.all') }}">{{ translate('All Categories') }}</a></li> -->
                <li>{{ translate('All Categories') }}</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

            <div class="page-content pb-10 mb-2">
                <div class="container">
                    <section class="category-section mb-10 pb-1">
                    @foreach ($categories as $key => $category)
                        <h2 class="title title-center mb-5"><a href="{{ route('products.category', $category->slug) }}">{{  $category->getTranslation('name') }}</a></h2>
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
                            <div class="swiper-wrapper row cols-lg-3 cols-md-2 cols-1">
                                @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category->id) as $key => $first_level_id)
                                    <div class="swiper-slide category-wrap">
                                        <div class="category category-group-image">
                                            <div class="category-content">
                                                
                                                <h4 class="category-name"><a href="{{ route('products.category', \App\Models\Category::find($first_level_id)->slug) }}">{{ \App\Models\Category::find($first_level_id)->getTranslation('name') }}</a>
                                                </h4>
                                                <ul class="category-list">
                                                    @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id) as $key => $second_level_id)
                                                        <li><a href="{{ route('products.category', \App\Models\Category::find($second_level_id)->slug) }}">{{ \App\Models\Category::find($second_level_id)->getTranslation('name') }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <a href="#">
                                                <figure class="category-media">
                                                    <img src="assets/images/categories/category-1.jpg" alt="Category"
                                                        width="190" height="214" />
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    @endforeach
                    </section>
                    <!-- End of Category Section -->
                </div>
            </div>


                  
</main>
@endsection
