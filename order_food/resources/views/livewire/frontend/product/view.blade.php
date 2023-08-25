

<div>
    <div class="py-3 py-md-5 ">
        <div class="container">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session()->has('alert'))
        <div class="alert alert-danger">
                {{ session('alert') }}
            </div>
        @endif
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        @if($product->productImages)
                        <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img" style="height: 360px;">

                        @else
                        No Image Added
                        @endif

                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{$product->name}}
                            {{-- <label class="label-stock bg-success">In Stock</label> --}}
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / {{$product->Category->name }}/{{$product->name }}
                        </p>
                        <div>
                            <span class="selling-price">JOD{{$product->selling_price }}</span>
                            <span class="original-price">JOD{{$product->original_price }}</span>
                        </div>

                        <div class="mt-2" wire:key="quantity-counter">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{$this->quantityCount}}" class="input-quantity" />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>


                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{$product->id}})"  class="btn btn1">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </button>
                            <button type="button" wire:click="addToWishList({{ $product->id }})" class="btn btn1">
                                <span wire:loading.remove>
                                    <i class="fa fa-heart"></i> Add To Wishlist
                                </span>
                                <span wire:loading wire:target="addToWishList">
                                    Adding...
                                </span>
                            </button>

                         </div>
                        <div class="mt-3">
                            <h2 class="mb-0">Small Description</h2>
                            <h6>
                                {!!$product->small_description !!}
                                      </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h2>Description</h2>
                        </div>
                        <div class="card-body">
                            <h5>
                                {!!$product->description !!}
                                  </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
