@extends('frontend.layouts.app')

@section('meta_title'){{ $blog->meta_title }}@stop

@section('meta_description'){{ $blog->meta_description }}@stop

@section('meta_keywords'){{ $blog->meta_keywords }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $blog->meta_title }}">
    <meta itemprop="description" content="{{ $blog->meta_description }}">
    <meta itemprop="image" content="{{ uploaded_asset($blog->meta_img) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $blog->meta_title }}">
    <meta name="twitter:description" content="{{ $blog->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset($blog->meta_img) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $blog->meta_title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('blog.details', $blog->slug) }}" />
    <meta property="og:image" content="{{ uploaded_asset($blog->meta_img) }}" />
    <meta property="og:description" content="{{ $blog->meta_description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
@endsection

@section('content')
<!-- 
<section class="py-4">
    <div class="container">
        <div class="mb-4">
            <img
                src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                data-src="{{ uploaded_asset($blog->banner) }}"
                alt="{{ $blog->title }}"
                class="img-fluid lazyload w-100"
            >
        </div>
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="bg-white rounded shadow-sm p-4"> 
                    <div class="border-bottom">
                        <h1 class="h4">
                            {{ $blog->title }}
                        </h1>

                        @if($blog->category != null)
                        <div class="mb-2 opacity-50">
                            <i>{{ $blog->category->category_name }}</i>
                        </div>
                        @endif
                    </div>
                    <div class="mb-4 overflow-hidden">
                        {!! $blog->description !!}
                    </div>
                    
                    @if (get_setting('facebook_comment') == 1)
                    <div>
                        <div class="fb-comments" data-href="{{ route("blog",$blog->slug) }}" data-width="" data-numposts="5"></div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section> -->
     <!-- Start of Main -->
     <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">{{ $blog->title }}</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li>{{ $blog->title }}</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-8">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content post-single-content">
                            <div class="post post-grid post-single">
                                <figure class="post-media br-sm">
                                    <img src="{{ uploaded_asset($blog->banner) }}" alt="{{ $blog->title }}" width="930" height="500" />
                                </figure>
                                <div class="post-details">
                                    <!-- <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.01.2021</a>
                                        <a href="#" class="post-comment"><i class="w-icon-comments"></i><span>0</span>Comments</a>
                                    </div> -->
                                    <h2 class="post-title"><a href="#">Fashion tells about who you are from external point</a></h2>
                                    <div class="post-content">
                                        <p> {!! $blog->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                             <div class="tags">
                                @if($blog->category != null)
                                <label class="text-dark mr-2">Tags:</label>
                                <a href="#" class="tag">{{ $blog->category->category_name }}</a>
                                @endif
                            </div>
                            <!-- End Tag -->
                            <!-- <div class="social-links mb-10">
                                <div class="social-icons social-no-color border-thin">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                </div>
                            </div> -->
                            <!-- End Social Links -->
                            <!-- <div class="post-author-detail">
                                <figure class="author-media mr-4">
                                    <img src="{{static_asset('assets/images/blog/single/1.png" alt="Author" width="105" height="105" />
                                </figure>
                                <div class="author-details">
                                    <div class="author-name-wrapper flex-wrap mb-2">
                                        <h4 class="author-name font-weight-bold mb-2 pr-4 mr-auto">John Doe
                                            <span class="font-weight-normal text-default">(AUTHOR)</span>
                                        </h4>
                                        <a href="#" class="btn btn-primary btn-link btn-icon-right pb-0 text-normal font-weight-normal mb-2">More Posts by admin<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                    <p class="mb-0">Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismoder eu pulvinar nunc sapien ornare nisl.
                                        Ped earcudaap ibuseu, fermentum et, dapibus sed, urna. Morbi interdum mollis sapien. </p>
                                </div>
                            </div> -->
                            <!-- End Post Author Detail -->
                            <!-- <div class="post-navigation">
                                <div class="nav nav-prev">
                                    <a href="#" class="align-items-start text-left">
                                        <span><i class="w-icon-long-arrow-left"></i>previous post</span>
                                        <span class="nav-content mb-0 text-normal">Vivamus vestibulum ntulla nec ante</span>
                                    </a>
                                </div>
                                <div class="nav nav-next"> 
                                    <a href="#" class="align-items-end text-right">
                                        <span>next post<i class="w-icon-long-arrow-right"></i></span>
                                        <span class="nav-content mb-0 text-normal">Fusce lacinia arcuet nulla</span>
                                    </a>
                                </div>
                            </div> -->
                            <!-- End Post Navigation -->
                            <!-- <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Related Posts</h4>
                            <div class="swiper">
                                <div class="post-slider swiper-container swiper-theme nav-top pb-2" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 2
                                        },
                                        '768': {
                                            'slidesPerView': 3
                                        },
                                        '992': {
                                            'slidesPerView': 2
                                        },
                                        '1200': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-xs-2 cols-1">
                                        <div class="swiper-slide post post-grid">
                                            <figure class="post-media br-sm">
                                                <a href="post-single.html">
                                                    <img src="{{static_asset('assets/images/blog/single/2.jpg')}}" alt="Post" width="296"
                                                        height="190" style="background-color: #bcbcb4;" />
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">Logan Cee</a>
                                                    - <a href="#" class="post-date">03.05.2021</a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single.html">Fashion tell about who you are from...</a></h4>
                                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide post post-grid">
                                            <figure class="post-media br-sm">
                                                <a href="post-single.html">
                                                    <img src="{{static_asset('assets/images/blog/single/3.jpg')}}" alt="Post" width="296"
                                                        height="190" style="background-color: #cad2d1;" />
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">Hilary Kreton</a>
                                                    - <a href="#" class="post-date">03.05.2021</a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single.html">Comes a cool blog post with Images</a></h4>
                                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide post post-grid">
                                            <figure class="post-media br-sm">
                                                <a href="post-single.html">
                                                    <img src="{{static_asset('assets/images/blog/single/4.jpg')}}" alt="Post" width="296"
                                                        height="190" style="background-color: #ececec;" />
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">Casper Dailn</a>
                                                    - <a href="#" class="post-date">03.05.2021</a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single.html">Comes a cool blog post with Images</a></h4>
                                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide post post-grid">
                                            <figure class="post-media br-sm">
                                                <a href="post-single.html">
                                                    <img src="{{static_asset('assets/images/blog/single/5.jpg')}}" alt="Post" width="296"
                                                        height="190" style="background-color: #AFAFAF;" />
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">John Doe</a>
                                                    - <a href="#" class="post-date">03.05.2021</a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single.html">We want to be different and fashion gives to me that outlet</a></h4>
                                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                </div>
                            </div> -->
                            <!-- End Related Posts -->
                            
                            <!-- <h4 class="title title-lg font-weight-bold pt-1 mt-10">3 Comments</h4>
                            <ul class="comments list-style-none pl-0">
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="{{static_asset('assets/images/blog/single/1.png" alt="Avatar" width="90" height="90" />
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">John Doe</a>
                                                <span class="comment-date">Aug 23, 2021 at 10:46 am</span>
                                            </h4>
                                            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                                ment umet, dapibus sed, urna.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="{{static_asset('assets/images/blog/single/2.png" alt="Avatar" width="90" height="90" />
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">Semi Colon</a>
                                                <span class="comment-date">Aug 24, 2021 at 13:25 am</span>
                                            </h4>
                                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>  
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="{{static_asset('assets/images/blog/single/1.png" alt="Avatar" width="90" height="90" />
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">John Doe</a>
                                                <span class="comment-date">Aug 23, 2021 at 10:46 am</span>
                                            </h4>
                                            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                                ment umet, dapibus sed, urna.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul> -->
                            <!-- End Comments -->
                            <!-- <form class="reply-section pb-4">
                                <h4 class="title title-md font-weight-bold pt-1 mt-10 mb-0">Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked</p>
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Enter Your Email" id="email_1">
                                    </div>
                                </div>
                                <textarea cols="30" rows="6" placeholder="Write a Comment" class="form-control mb-4" id="comment"></textarea>
                                <button class="btn btn-dark btn-rounded btn-icon-right btn-comment">Post Comment<i class="w-icon-long-arrow-right"></i></button>
                            </form> -->
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                                <a href="#" class="sidebar-close">
                                    <i class="close-icon"></i>
                                </a>
                            </div>
                            <a href="#" class="sidebar-toggle">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-search-form">
                                        <div class="widget-body">
                                            <form action="#" method="GET" class="input-wrapper input-wrapper-inline">
                                                <input type="text" class="form-control"
                                                    placeholder="Search in Blog" autocomplete="off" required>
                                                <button class="btn btn-search"><i
                                                        class="w-icon-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Widget search form -->
                                    <div class="widget widget-categories">
                                        <h3 class="widget-title bb-no mb-0">Categories</h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li><a href="blog.html">Clothes</a></li>
                                            <li><a href="blog.html">Entertainment</a></li>
                                            <li><a href="blog.html">Fashion</a></li>
                                            <li><a href="blog.html">Lifestyle</a></li>
                                            <li><a href="blog.html">Others</a></li>
                                            <li><a href="blog.html">Shoes</a></li>
                                            <li><a href="blog.html">Technology</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget categories -->
                                    <div class="widget widget-posts">
                                        <h3 class="widget-title bb-no">Popular Posts</h3>
                                        <div class="widget-body">
                                            <div class="swiper">
                                                <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                                    'spaceBetween': 20,
                                                    'slidesPerView': 1
                                                }">
                                                    <div class="swiper-wrapper row cols-1">
                                                        <div class="swiper-slide widget-col">
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="{{static_asset('assets/images/blog/sidebar/1.jpg')}}" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Fashion tells about who you are from external point</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="{{static_asset('assets/images/blog/sidebar/2.jpg')}}" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 5, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">New found the men dress for summer</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-2">
                                                                <figure class="post-media br-sm">
                                                                    <img src="{{static_asset('assets/images/blog/sidebar/3.jpg')}}" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Cras ornare tristique elit</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide widget-col">
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="{{static_asset('assets/images/blog/sidebar/4.jpg')}}" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Vivamus vestibulum ntulla nec ante</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="{{static_asset('assets/images/blog/sidebar/5.jpg')}}" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 5, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Fusce lacinia arcuet nulla</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-2">
                                                                <figure class="post-media br-sm">
                                                                    <img src="{{static_asset('assets/images/blog/sidebar/6.jpg')}}" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Comes a cool blog post with Images</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget posts -->
                                    <div class="widget widget-custom-block">
                                        <h3 class="widget-title bb-no">Custom Block</h3>
                                        <div class="widget-body">
                                            <p class="text-default mb-0">Fringilla urna porttitor rhoncus dolor purus.
                                                Luctus veneneratis lectus magna fring.
                                                Suspendisse potenti. Sed egestas, ante et 
                                                vulputate volutpat, uctus metus libero.</p>
                                        </div>
                                    </div>
                                    <!-- End of Widget custom block -->
                                    <div class="widget widget-tags">
                                        <h3 class="widget-title bb-no">Browse Tags</h3>
                                        <div class="widget-body tags">
                                            <a href="#" class="tag">Fashion</a>
                                            <a href="#" class="tag">Style</a>
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="tag">Women</a>
                                            <a href="#" class="tag">Men</a>
                                            <a href="#" class="tag">Hobbies</a>
                                            <a href="#" class="tag">Shopping</a>
                                            <a href="#" class="tag">Photography</a>
                                        </div>
                                    </div>
                                    <div class="widget widget-calendar">
                                        <h3 class="widget-title bb-no">Calendar</h3>
                                        <div class="widget-body">
                                            <div class="calendar-container" data-calendar-options="{
                                                'dayExcerpt': 1
                                            }"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
@endsection


@section('script')
    @if (get_setting('facebook_comment') == 1)
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId={{ env('FACEBOOK_APP_ID') }}&autoLogAppEvents=1" nonce="ji6tXwgZ"></script>
    @endif
@endsection