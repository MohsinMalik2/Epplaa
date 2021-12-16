@if(get_setting('topbar_banner') != null)

@endif
<header class="header">

            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to {{ env('APP_NAME') }}!</p>
                    </div>

                    <div class="header-right pr-0">
                    @if(get_setting('show_currency_switcher') == 'on')
                        @php
                            if(Session::has('currency_code')){
                                $currency_code = Session::get('currency_code');
                            }
                            else{
                                $currency_code = \App\Models\Currency::findOrFail(get_setting('system_default_currency'))->code;
                            }
                        @endphp
                        <div class="dropdown">
                        
                            <a href="#currency" href="javascript:void(0)">
                                {{ \App\Models\Currency::where('code', $currency_code)->first()->name }} {{ (\App\Models\Currency::where('code', $currency_code)->first()->symbol) }}
                            </a>

                            <div class="dropdown-box">
                                @foreach (\App\Models\Currency::where('status', 1)->get() as $key => $currency)
                                    <a class="@if($currency_code == $currency->code) active @endif" href="javascript:void(0)" data-currency="{{ $currency->code }}" href="#{{ $currency->code }}">{{ $currency->name }} ({{ $currency->symbol }})</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- End of DropDown Menu -->
                    @endif
                        <div class="dropdown">
                            @if(get_setting('show_language_switcher') == 'on')
                                @php
                                    if(Session::has('locale')){
                                        $locale = Session::get('locale', Config::get('app.locale'));
                                    }
                                    else{
                                        $locale = 'en';
                                    }
                                @endphp
                                <a href="javascript:void(0)">
                                    <img src="{{ static_asset('assets/img/flags/'.$locale.'.png') }}" alt="ENG Flag" width="14"
                                        height="8" class="dropdown-image" /> {{ \App\Models\Language::where('code', $locale)->first()->name }}</a>
                                <div class="dropdown-box">
                                    @foreach (\App\Models\Language::all() as $key => $language)
                                        <a href="javascript:void(0)" data-flag="{{ $language->code }}" class="dropdown-item @if($locale == $language) active @endif">
                                            <img src="{{ static_asset('assets/img/flags/'.$language->code.'.png') }}" alt="{{ $language->name }}" width="14" height="8"
                                                class="dropdown-image" />
                                                {{ $language->name }}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <!-- End of Dropdown Menu -->
                        <span class="divider d-lg-show"></span>
                        <!-- <a href="blog.html" class="d-lg-show">Blog</a>
                        <a href="contact-us.html" class="d-lg-show">Contact Us</a> -->
                        @auth
                            @if(isAdmin())
                                <a href="{{ route('admin.dashboard') }}" class="d-lg-show">My Panel</a>
                            @else
                                <a href="{{ route('dashboard') }}" class="d-lg-show">My Account</a>
                            @endif
                            <a href="{{ route('logout') }}" class="d-lg-show">Logout</a>
                        @else

                            <a href="{{ route('user.login') }}" class="d-lg-show login sign-in"><i
                                    class="w-icon-account"></i>Sign In</a>
                            <span class="delimiter d-lg-show">/</span>
                            <a href="{{ route('user.registration') }}" class="ml-0 d-lg-show login register">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        
                        <a href="{{ route('home') }}" class="logo ml-lg-0">
                            @php
                                $header_logo = get_setting('header_logo');
                            @endphp
                            @if($header_logo != null)
                            <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" width="144" height="45" />
                            @else
                            <img src="{{ static_asset('assets/img/loo.png') }}" alt="{{ env('APP_NAME') }}" width="144" height="45" />
                            @endif
                        </a>
                       
                        <nav class="main-nav">
                            @if ( get_setting('header_menu_labels') !=  null )
                                <ul class="menu">
                                    @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
                                        <li class="active">
                                            <a href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}">{{ translate($value) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </nav>
                    </div>
                    <div class="header-right ml-4">
                        @if (get_setting('helpline_number'))
                            <div class="header-call d-xs-show d-lg-flex align-items-center">
                            
                                <a href="tel:{{ get_setting('helpline_number') }}" class="w-icon-call"></a>
                                <div class="call-info d-xl-show">
                                    <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                        <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                                    <a href="tel:{{ get_setting('helpline_number') }}" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                                </div>
                            </div>
                        @endif
                        <a class="wishlist label-down link d-xs-show" href="{{ route('wishlists.index') }}">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>
                        </a>
                        <a class="compare label-down link d-xs-show" href="{{ route('compare') }}">
                            <i class="w-icon-compare"></i>
                            <span class="compare-label d-lg-show">Compare</span>
                        </a>
                        <div class="dropdown cart-dropdown mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            @include('frontend.partials.cart')
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left flex-1">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>

                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                    @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(11) as $key => $category)

                                        <li data-id="{{ $category->id }}">
                                            <a href="{{ route('products.category', $category->slug) }}">
                                            <img
                                                    class="cat-image lazyload mr-2 opacity-60"
                                                    src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                    data-src="{{ uploaded_asset($category->icon) }}"
                                                    width="16"
                                                    alt="{{ $category->getTranslation('name') }}"
                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                > {{ $category->getTranslation('name') }}
                                            </a>
                                            @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
                                            <!-- <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Women</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                                Watches</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Men</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                                Watches</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="banner-fixed menu-banner menu-banner2">
                                                        <figure>
                                                            <img src="{{ static_asset('assets/images/menu/banner-2.jpg') }}" alt="Menu Banner"
                                                                width="235" height="347" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <div class="banner-price-info mb-1 ls-normal">Get up to
                                                                <strong
                                                                    class="text-primary text-uppercase">20%Off</strong>
                                                            </div>
                                                            <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                            <a href="shop-banner-sidebar.html"
                                                                class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> -->
                                                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                    <div class="c-preloader text-center absolute-center">
                                                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                    </div>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            <form method="GET" action="{{route('search')}}"
                                class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper mr-4 ml-4">
                                <div class="select-box">
                                    <select id="category" name="category">
                                        <option value="">All Categories</option>
                                        @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(11) as $key => $category)
                                            <option value="{{ $category->id }}">{{ $category->getTranslation('name') }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="text" class="form-control"  id="search" name="keyword" @isset($query) value="{{ $query }}"
                                @endisset placeholder="I am shopping for..." autocomplete="off" />
                                <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="header-right pr-0 ml-4">
                            <a href="#" class="d-xl-show mr-6"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                            <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!-- END Top Bar -->

