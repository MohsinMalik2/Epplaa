@extends('frontend.layouts.user_panel')

@section('panel_content')
    <!-- <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <b class="h4">{{ translate('Wishlist')}}</b>
            </div>
        </div>
    </div> -->
<!-- 
    <div class="row gutters-5">
        @forelse ($wishlists as $key => $wishlist)
            @if ($wishlist->product != null)
                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_{{ $wishlist->id }}">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <a href="{{ route('product', $wishlist->product->slug) }}" class="d-block mb-3">
                                <img src="{{ uploaded_asset($wishlist->product->thumbnail_img) }}" class="img-fit h-140px h-md-200px">
                            </a>

                            <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                <a href="{{ route('product', $wishlist->product->slug) }}" class="text-reset">{{ $wishlist->product->getTranslation('name') }}</a>
                            </h5>
                            <div class="rating rating-sm mb-1">
                                {{ renderStarRating($wishlist->product->rating) }}
                            </div>
                            <div class=" fs-14">
                                  @if(home_base_price($wishlist->product) != home_discounted_base_price($wishlist->product))
                                      <del class="opacity-60 mr-1">{{ home_base_price($wishlist->product) }}</del>
                                  @endif
                                      <span class="fw-600 text-primary">{{ home_discounted_base_price($wishlist->product) }}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist({{ $wishlist->id }})">
                                <i class="la la-trash la-2x"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal({{ $wishlist->product->id }})">
                                <i class="la la-shopping-cart mr-2"></i>{{ translate('Add to cart')}}
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        @empty
            <div class="col">
                <div class="text-center bg-white p-4 rounded shadow">
                    <img class="mw-100 h-200px" src="{{ static_asset('assets/img/nothing.svg') }}" alt="Image">
                    <h5 class="mb-0 h5 mt-3">{{ translate("There isn't anything added yet")}}</h5>
                </div>
            </div>
        @endforelse
    </div>
    <div class="aiz-pagination">
        {{ $wishlists->links() }}
    </div> -->
    <main class="main wishlist-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Wishlist</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    
                    <table class="shop-table wishlist-table">
                        <thead>
                            <tr>
                                <th class="product-name"><span>Product</span></th>
                                <th></th>
                                <th class="product-price"><span>Price</span></th>
                                <!-- <th class="product-stock-status"><span>Stock Status</span></th> -->
                                <th class="wishlist-action">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($wishlists as $key => $wishlist)
                            @if ($wishlist->product != null)
                            <tr>
                                <td class="product-thumbnail">
                                    <div class="p-relative">
                                        <a href="{{ route('product', $wishlist->product->slug) }}">
                                            <figure>
                                                <img src="{{ uploaded_asset($wishlist->product->thumbnail_img) }}" alt="product" width="300"
                                                    height="338">
                                            </figure>
                                        </a>
                                        <button type="button" class="btn btn-close" onclick="removeFromWishlist({{ $wishlist->id }})"><i
                                                class="fas fa-times" ></i></button>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="{{ route('product', $wishlist->product->slug) }}">
                                        {{ $wishlist->product->getTranslation('name') }}
                                    </a>
                                </td>
                                <td class="product-price">
                                    @if(home_base_price($wishlist->product) != home_discounted_base_price($wishlist->product))
                                        <del class="opacity-60 mr-1">{{ home_base_price($wishlist->product) }}</del>
                                    @endif
                                        <ins class="new-price">{{ home_discounted_base_price($wishlist->product) }}</ins>
                                    
                                </td>
                                <!-- <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span>
                                </td> -->
                                <td class="wishlist-action">
                                    <div class="d-lg-flex">
                                        <button  onclick="showAddToCartModal({{ $wishlist->product->id }})" class="btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">Add to
                                            cart</button>
                                    </div>
                                </td>
                            </tr>
                            @endif
                        @empty
                            <div class="col">
                                <div class="text-center bg-white p-4 rounded shadow">
                                    <img class="mw-100 h-200px" src="{{ static_asset('assets/img/nothing.svg') }}" alt="Image">
                                    <h5 class="mb-0 h5 mt-3">{{ translate("There isn't anything added yet")}}</h5>
                                </div>
                            </div>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
@endsection

@section('modal')

<div class="modal fade" id="addToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
        <div class="modal-content position-relative">
            <div class="c-preloader">
                <i class="fa fa-spin fa-spinner"></i>
            </div>
            <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div id="addToCart-modal-body">

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script type="text/javascript">
        function removeFromWishlist(id){
            $.post('{{ route('wishlists.remove') }}',{_token:'{{ csrf_token() }}', id:id}, function(data){
                $('#wishlist').html(data);
                $('#wishlist_'+id).hide();
                AIZ.plugins.notify('success', '{{ translate('Item has been renoved from wishlist') }}');
            })
        }
    </script>
@endsection
