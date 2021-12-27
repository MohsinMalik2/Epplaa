@extends('frontend.layouts.app')

@section('content')

<!-- <section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('Blog')}}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">
                            {{ translate('Home')}}
                        </a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('blog') }}">
                            "{{ translate('Blog') }}"
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->

<section class="pb-4">
    <div class="container">
        <div class="card-columns">
            @foreach($blogs as $blog)
                <div class="card mb-3 overflow-hidden shadow-sm">
                    <a href="{{ url("blog").'/'. $blog->slug }}" class="text-reset d-block">
                        <img
                            src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                            data-src="{{ uploaded_asset($blog->banner) }}"
                            alt="{{ $blog->title }}"
                            class="img-fluid lazyload "
                        >
                    </a>
                    <div class="p-4">
                        <h2 class="fs-18 fw-600 mb-1">
                            <a href="{{ url("blog").'/'. $blog->slug }}" class="text-reset">
                                {{ $blog->title }}
                            </a>
                        </h2>
                        @if($blog->category != null)
                        <div class="mb-2 opacity-50">
                            <i>{{ $blog->category->category_name }}</i>
                        </div>
                        @endif
                        <p class="opacity-70 mb-4">
                            {{ $blog->short_description }}
                        </p>
                        <a href="{{ url("blog").'/'. $blog->slug }}" class="btn btn-soft-primary">
                            {{ translate('View More') }}
                        </a>
                    </div>
                </div>
            @endforeach
            
        </div>
        <div class="aiz-pagination aiz-pagination-center mt-4">
            {{ $blogs->links() }}
        </div>
    </div>
</section>

  <!-- Start of Main -->
  <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">{{ translate('Blog')}}</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb" style='background:transparent;'>
                        <li><a href="{{ route('home') }}"> {{ translate('Home')}}</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
               
                    <div class="row grid cols-lg-3 cols-md-2 mb-2" data-grid-options="{
                        'layoutMode': 'fitRows'
                        }">
                        @foreach($blogs as $blog)
                            <div class="grid-item">
                                            <article class="post post-mask overlay-zoom br-sm">
                                                <figure class="post-media">
                                                    <a href="{{ url("blog").'/'. $blog->slug }}">
                                                        <img src="{{ uploaded_asset($blog->banner) }}" width="600"
                                                            height="420" alt="blog">
                                                    </a>
                                                </figure>
                                                <div class="post-details">
                                                    <div class="post-details-visible">
                                                        @if($blog->category != null)
                                                            <div class="post-cats">
                                                                <a href="{{ url("blog").'/'. $blog->slug }}">{{ $blog->category->category_name }}</a>
                                                            </div>
                                                            @endif
                                                        <h4 class="post-title text-white">
                                                            <a href="{{ url("blog").'/'. $blog->slug }}">{{ $blog->title }}</a>
                                                        </h4>
                                                    </div>
                                                    <div class="post-meta">
                                                        {{ $blog->short_description }} - <a href="{{ url("blog").'/'. $blog->slug }}">
                                            {{ translate('View More') }}
                                        </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
               
                  
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
@endsection
