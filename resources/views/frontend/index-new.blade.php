@extends('frontend.layouts.app')

@section('content')


        <main class="main">
            <div class="intro-section">
                <div class="swiper-container swiper-theme nav-inner pg-inner animation-slider pg-xxl-hide pg-show nav-xxl-show nav-hide" data-swiper-options="{
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    }}">
                     <div class="swiper-wrapper row gutter-no cols-1">
                        @if (get_setting('home_slider_images') != null)
                                
                            @php $slider_images = json_decode(get_setting('home_slider_images'), true);  @endphp
                            @if ($slider_images != null)
                                @foreach ($slider_images as $key => $value)
                                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide1" style="background-image: url({{ static_asset('assets/images/demos/demo2/slides/slide-1.jpg')}}); background-color: #f1f0f0;">
                                        <div class="container">
                                            <figure class="slide-image floating-item slide-animate" data-animation-options="{
                                                'name': 'fadeInDownShorter', 'duration': '1s'
                                            }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}" data-child-depth="0.2">
                                                <img src="{{ uploaded_asset($slider_images[$key]) }}"   alt="{{ env('APP_NAME')}} promo" onerror="this.onerror=null;this.src="{{ static_asset('assets/img/placeholder-rect.jpg')}}" width="729" height="570" />
                                            </figure>
                                            <div class="banner-content text-right y-50 ml-auto">
                                                <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2 slide-animate" data-animation-options="{
                                                    'name': 'fadeInUpShorter', 'duration': '1s'
                                                }">Deals And Promotions</h5>
                                                <h3 class="banner-title ls-25 mb-6 slide-animate" data-animation-options="{
                                                    'name': 'fadeInUpShorter', 'duration': '1s'
                                                }">Fashion <span class="text-primary">Skiwears</span> for the ardent Sports devotees
                                                </h3>
                                                <a href="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}" class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate" data-animation-options="{
                                                    'name': 'fadeInUpShorter', 'duration': '1s'
                                                }">
                                                    Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                            <!-- End of .banner-content -->
                                        </div>
                                        <!-- End of .container -->
                                    </div>
                                <!-- End of .intro-slide1 -->
                                @endforeach
                            @else
                                <div class="swiper-slide banner banner-fixed intro-slide intro-slide1" style="background-image: url({{ static_asset('assets/images/demos/demo2/slides/slide-1.jpg')}}); background-color: #f1f0f0;">
                                    <div class="container">
                                    <figure class="slide-image floating-item slide-animate" data-animation-options="{
                                        'name': 'fadeInDownShorter', 'duration': '1s'
                                    }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}" data-child-depth="0.2">
                                        <img src="{{ static_asset('assets/images/demos/demo2/slides/ski.png')}}" alt="Ski" width="729" height="570" />
                                    </figure>
                                    <div class="banner-content text-right y-50 ml-auto">
                                        <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2 slide-animate" data-animation-options="{
                                            'name': 'fadeInUpShorter', 'duration': '1s'
                                        }">Deals And Promotions</h5>
                                        <h3 class="banner-title ls-25 mb-6 slide-animate" data-animation-options="{
                                            'name': 'fadeInUpShorter', 'duration': '1s'
                                        }">Fashion <span class="text-primary">Skiwears</span> for the ardent Sports devotees
                                        </h3>
                                        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate" data-animation-options="{
                                            'name': 'fadeInUpShorter', 'duration': '1s'
                                        }">
                                            Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End of .banner-content -->
                                </div>
                                    <!-- End of .container -->
                                </div>
                                <!-- End of .intro-slide1 -->

                                <div class="swiper-slide banner banner-fixed intro-slide intro-slide2" style="background-image: url({{ static_asset('assets/images/demos/demo2/slides/slide-2.jpg')}}); background-color: #d9ddd9;">
                                    <div class="container">
                                        <figure class="slide-image floating-item slide-animate" data-animation-options="{
                                            'name': 'fadeInUpShorter', 'duration': '1s'
                                        }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}" data-child-depth="0.2">
                                            <img src="{{ static_asset('assets/images/demos/demo2/slides/woman.png')}}" alt="Ski" width="865" height="732" />
                                        </figure>
                                        <div class="banner-content y-50">
                                            <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2 slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.5s'
                                            }">News And Inspiration</h5>
                                            <h3 class="banner-title ls-25 mb-2 text-uppercase lh-1 slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.7s'
                                            }">Natural Sound</h3>
                                            <div class="banner-price-info font-weight-bold text-dark ls-25 slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.9s'
                                            }">Sale up to
                                                <span class="text-primary font-weight-bolder text-uppercase ls-normal">30%
                                                    Off</span></div>
                                            <p class="font-weight-normal text-default ls-25 slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '1.1s'
                                            }">Free returns extended to 30 days after delivery</p>
                                            <a href="shop-banner-sidebar.html" class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '1.3s'
                                            }">
                                                Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                        <!-- End of .banner-content -->
                                    </div>
                                    <!-- End of .container -->
                                </div>
                                <!-- End of .intro-slide2 -->

                                <div class="swiper-slide banner banner-fixed intro-slide intro-slide3" style="background-image: url({{ static_asset('assets/images/demos/demo2/slides/slide-3.jpg')}}); background-color: #d0cfcb;">
                                    <div class="container">
                                        <figure class="slide-image floating-item slide-animate" data-animation-options="{
                                            'name': 'fadeInRightShorter', 'duration': '1s'
                                        }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}" data-child-depth="0.2">
                                            <img src="{{ static_asset('assets/images/demos/demo2/slides/man.png')}}" alt="Ski" width="527" height="481" />
                                        </figure>
                                        <div class="banner-content y-50">
                                            <h5 class="banner-subtitle text-uppercase font-weight-bold slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s'
                                            }">Top Monthly Seller</h5>
                                            <h4 class="banner-title ls-25 slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s'
                                            }">Sumsung 52 Inches Full HD <span class="text-primary">Smart LED</span> TV</h4>
                                            <p class="font-weight-normal text-dark slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s'
                                            }">Only until the end of this week.</p>
                                            <a href="shop-banner-sidebar.html" class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s'
                                            }">Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                        <!-- End of .banner-content -->
                                    </div>
                                    <!-- End of .container -->
                                </div>
                            @endif
                       
                        @endif
                        <!-- End of .intro-slide3 -->
                    </div>
                    <div class="swiper-pagination"></div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
            </div>
            <!-- End of .intro-section -->

            <div class="container">
                <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mt-6 mb-10" data-swiper-options="{
                    'loop': true,
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    },
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                        }">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->


              

                @php
                    $num_todays_deal = count($todays_deal_products);
                @endphp
                @if($num_todays_deal > 0)
                    <div class="title-link-wrapper mb-3 appear-animate">
                        <h2 class="title title-deals mb-1">Deals Of The Day</h2> 
                        <div class="product-countdown-container font-size-sm text-dark align-items-center">
                            <!-- <label>Offer Ends in: </label>
                            <div class="product-countdown countdown-compact ml-1 font-weight-bold" data-until="+10d" data-relative="true" data-compact="true">10days,00:00:00</div> -->
                        </div>
                        <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">More Products<i
                                class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <!-- End of .title-link-wrapper -->
                    <div class="swiper-container swiper-theme product-deals-wrapper appear-animate mb-7" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                },
                                '992': {
                                    'slidesPerView': 5
                                }
                            }
                            }">
                        <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-2">
                            @foreach ($todays_deal_products as $key => $product)
                                @if ($product != null)
                                
                                        <div class="swiper-slide product-wrap">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="{{ route('product', $product->slug) }}">
                                                        <img src="{{ uploaded_asset($product->thumbnail_img) }}" alt="{{ $product->getTranslation('name') }}" width="300" height="338"  onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <!-- <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Add to Compare"></a> -->
                                                    </div>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-new">New</label>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">{{$product->name}}</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- <a href="product-default.html" class="rating-reviews">(8 Reviews)</a> -->
                                                    </div>
                                                    <div class="product-price">
                                                        <ins class="new-price">{{ home_discounted_base_price($product) }}</ins>
                                                        @if(home_base_price($product) != home_discounted_base_price($product))
                                                            <del class="old-price">{{ home_base_price($product) }}</del>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                @endif
                            @endforeach
                        </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Product Deals Warpper -->

                @endif


                <!-- End of Deal of te day  -->
                @if (get_setting('home_banner1_images') != null)
                <div class="row category-wrapper electronics-cosmetics appear-animate mb-7">
                    @php $banner_1_imags = json_decode(get_setting('home_banner1_images')); @endphp
                    @foreach ($banner_1_imags as $key => $value)
                        <div class="col-md-6 mb-4">
                            <div class="banner banner-fixed br-sm">
                                <figure>
                                    <img src="{{ uploaded_asset($banner_1_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" width="640" height="200" style="background-color: #25282D;" />
                                </figure>
                                <div class="banner-content y-50">
                                    <h3 class="banner-title text-white ls-25 mb-0"></h3>
                                    <div class="banner-price-info text-white font-weight-bold text-uppercase mb-1">
                                        <strong class="text-secondary"></strong>
                                    </div>
                                    <hr class="banner-divider bg-white" />
                                    <a href="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}" class="btn btn-white btn-link btn-underline btn-icon-right">
                                        Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
                <!-- End of Banner Wrapper -->

                {{-- Flash Deal --}}
                @php
                    $flash_deal = \App\Models\FlashDeal::where('status', 1)->where('featured', 1)->first();
                @endphp
                @if($flash_deal != null && strtotime(date('Y-m-d H:i:s')) >= $flash_deal->start_date && strtotime(date('Y-m-d H:i:s')) <= $flash_deal->end_date)
    
                    <div class="title-link-wrapper mb-3 appear-animate">
                        <h2 class="title title-deals mb-1">Flas Sale</h2>
                        <div class="product-countdown-container font-size-sm text-dark align-items-center">
                            <label>Offer Ends in: </label>
                            <div class="product-countdown countdown-compact ml-1 font-weight-bold" data-until="+10d" data-relative="true" data-compact="true">{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}</div>
                        </div>
                        <a href="{{ route('flash-deal-details', $flash_deal->slug) }}" class="font-weight-bold ls-25">More Products<i
                                class="w-icon-long-arrow-right"></i></a>
                    </div>
                    @foreach ($flash_deal->flash_deal_products->take(20) as $key => $flash_deal_product)
                        @php
                            $product = \App\Models\Product::find($flash_deal_product->product_id);
                        @endphp
                        @if ($product != null && $product->published != 0)
                            <div class="carousel-box">
                                @include('frontend.partials.product_box_1',['product' => $product])
                            </div>
                        @endif
                    @endforeach
                @endif
                <!-- End of Flash Deal -->

                @if (get_setting('home_banner2_images') != null)
                <div class="row category-wrapper electronics-cosmetics appear-animate mb-7">
                    @php $banner_2_imags = json_decode(get_setting('home_banner2_images')); @endphp
                    @foreach ($banner_2_imags as $key => $value)
                        <div class="col-md-6 mb-4">
                            <div class="banner banner-fixed br-sm">
                                <figure>
                                    <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_2_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" width="640" height="200" style="background-color: #25282D;" />
                                </figure>
                                <div class="banner-content y-50">
                                    <h3 class="banner-title text-white ls-25 mb-0"></h3>
                                    <div class="banner-price-info text-white font-weight-bold text-uppercase mb-1">
                                        <strong class="text-secondary"></strong>
                                    </div>
                                    <hr class="banner-divider bg-white" />
                                    <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="btn btn-white btn-link btn-underline btn-icon-right">
                                        Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
                <!-- End of Banner 2 Wrapper -->


                @if(get_setting('classified_product') == 1)
                    @php
                        $classified_products = \App\Models\CustomerProduct::where('status', '1')->where('published', '1')->take(10)->get();
                    @endphp
                        @if (count($classified_products) > 0)
                            <div class="title-link-wrapper mb-3 appear-animate">
                                <h2 class="title title-deals mb-1">Classified Products</h2>
                             
                                <a href="{{ route('customer.products') }}" class="font-weight-bold ls-25">More Products<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                            <!-- End of .title-link-wrapper -->
                            <div class="swiper-container swiper-theme product-deals-wrapper appear-animate mb-7" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '576': {
                                        'slidesPerView': 3
                                    },
                                    '768': {
                                        'slidesPerView': 4
                                    },
                                    '992': {
                                        'slidesPerView': 5
                                    }
                                }
                                }">
                                <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-2">
                                    @foreach ($classified_products as $key => $classified_product)
                                        @if ($classified_product != null)
                                        
                                        <div class="swiper-slide product-wrap">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="{{ route('customer.product', $classified_product->slug) }}">
                                                        <img src="{{ uploaded_asset($classified_product->thumbnail_img) }}" alt="{{ $classified_product->getTranslation('name') }}" width="300" height="338"  onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <!-- <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Add to Compare"></a> -->
                                                    </div>
                                                    <div class="product-label-group">
                                                        @if($classified_product->conditon == 'new')
                                                            <label class="product-label label-new">New</label>
                                                        @elseif($classified_product->conditon == 'used')
                                                            <label class="product-label label-discount">Used</label>
                                                        @endif
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="{{ route('customer.product', $classified_product->slug) }}">{{ $classified_product->getTranslation('name') }}</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- <a href="product-default.html" class="rating-reviews">(8 Reviews)</a> -->
                                                    </div>
                                                    <div class="product-price">
                                                        <ins class="new-price">{{ single_price($classified_product->unit_price) }}</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        @endif
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        @endif
                @endif


                @if (get_setting('home_banner3_images') != null)
                    <div class="row category-wrapper electronics-cosmetics appear-animate mb-7">
                        @php $banner_3_imags = json_decode(get_setting('home_banner3_images')); @endphp
                        @foreach ($banner_3_imags as $key => $value)
                            <div class="col-md-6 mb-4">
                                <div class="banner banner-fixed br-sm">
                                    <figure>
                                        <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_3_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" width="640" height="200" style="background-color: #25282D;" />
                                    </figure>
                                    <div class="banner-content y-50">
                                        <h3 class="banner-title text-white ls-25 mb-0"></h3>
                                        <div class="banner-price-info text-white font-weight-bold text-uppercase mb-1">
                                            <strong class="text-secondary"></strong>
                                        </div>
                                        <hr class="banner-divider bg-white" />
                                        <a href="{{ json_decode(get_setting('home_banner3_links'), true)[$key] }}" class="btn btn-white btn-link btn-underline btn-icon-right">
                                            Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <!-- End of Banner 3 Wrapper -->


                @if (get_setting('top10_categories') != null && get_setting('top10_brands') != null)
                    @if (get_setting('top10_categories') != null)
                            <div class="title-link-wrapper mb-3 appear-animate">
                                <h2 class="title title-deals mb-1">Top 10 Categories</h2>
                          
                                <a href="{{ route('categories.all') }}" class="font-weight-bold ls-25">All Categories<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                            @php $top10_categories = json_decode(get_setting('top10_categories')); @endphp
                                <div class="swiper-container swiper-theme product-deals-wrapper appear-animate mb-7" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                            '576': {
                                                'slidesPerView': 3
                                            },
                                            '768': {
                                                'slidesPerView': 4
                                            },
                                            '992': {
                                                'slidesPerView': 5
                                            }
                                        }
                                    }">
                                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-2">
                                        @foreach ($top10_categories as $key => $value)
                                            @php $category = \App\Models\Category::find($value); @endphp
                                            @if ($category != null)
                                                <div class="swiper-slide product-wrap">
                                                    <div class="product text-center">
                                                        <figure class="product-media">
                                                            <a href="{{ route('products.category', $category->slug) }}">
                                                                <img src="{{ uploaded_asset($category->banner) }}" alt="{{ $category->getTranslation('name') }}" width="300" height="338"  onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                            </a>
                                                            <div class="product-action-vertical">
                                                                <!-- <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>
                                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Add to Compare"></a> -->
                                                            </div>
                                                            <!-- <div class="product-label-group">
                                                                @if($classified_product->conditon == 'new')
                                                                    <label class="product-label label-new">New</label>
                                                                @elseif($classified_product->conditon == 'used')
                                                                    <label class="product-label label-discount">Used</label>
                                                                @endif
                                                            </div> -->
                                                        </figure>
                                                        <div class="product-details">
                                                            <h4 class="product-name"><a href="{{ route('products.category', $category->slug) }}">{{ $category->getTranslation('name') }}</a></h4>
                                                            <!-- <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 100%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins class="new-price">{{ single_price($classified_product->unit_price) }}</ins>
                                                                @if(home_base_price($product) != home_discounted_base_price($product))
                                                                    <del class="old-price">{{ home_base_price($product) }}</del>
                                                                @endif
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                    @endif
                    @if (get_setting('top10_brands') != null)
                            <div class="title-link-wrapper mb-3 appear-animate">
                                <h2 class="title title-deals mb-1">Top 10 Brands</h2>
                          
                                <a href="{{ route('brands.all') }}" class="font-weight-bold ls-25">All Brands<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                            @php $top10_brands = json_decode(get_setting('top10_brands')); @endphp
                                <div class="swiper-container swiper-theme product-deals-wrapper appear-animate mb-7" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                            '576': {
                                                'slidesPerView': 3
                                            },
                                            '768': {
                                                'slidesPerView': 4
                                            },
                                            '992': {
                                                'slidesPerView': 5
                                            }
                                        }
                                    }">
                                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-2">
                                        @foreach ($top10_brands as $key => $value)
                                            @php $brand = \App\Models\Brand::find($value); @endphp
                                            @if ($brand != null)
                                                <div class="swiper-slide product-wrap">
                                                    <div class="product text-center">
                                                        <figure class="product-media">
                                                            <a href="{{ route('products.brand', $brand->slug) }}">
                                                                <img src="{{ uploaded_asset($brand->logo) }}" alt="{{ $brand->getTranslation('name') }}" width="300" height="338"  onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                            </a>
                                                            <div class="product-action-vertical">
                                                            </div>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h4 class="product-name"><a href="{{ route('products.brand', $brand->slug) }}">{{ $brand->getTranslation('name') }}</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                    @endif

                @endif



            </div>
        </main>
        <!-- End of Main -->


@endsection

@section('script')
<script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>
@endsection