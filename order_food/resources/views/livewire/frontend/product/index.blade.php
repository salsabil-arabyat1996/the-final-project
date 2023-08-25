{{-- @extends('layouts.app')

@section('content')

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css"> --}}

{{-- <style>
   .product-card{
    background-color: #fff;
    border: 1px solid #ccc;
    margin-bottom: 24px;
}
.product-card a{
    text-decoration: none;
}
.product-card .stock{
    position: absolute;
    color: #fff;
    border-radius: 4px;
    padding: 2px 12px;
    margin: 8px;
    font-size: 12px;
}
.product-card .product-card-img{
    max-height: 260px;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}
.product-card .product-card-img img{
    width: 100%;
}
.product-card .product-card-body{
    padding: 10px 10px;
}
.product-card .product-card-body .product-brand{
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 4px;
    color: #937979;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.product-card .product-card-body .product-name{
    font-size: 20px;
    font-weight: 600;
    color: #000;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.product-card .product-card-body .selling-price{
    font-size: 22px;
    color: #000;
    font-weight: 600;
    margin-right: 8px;
}
.product-card .product-card-body .original-price{
    font-size: 18px;
    color: #937979;
    font-weight: 400;
    text-decoration: line-through;
}
.product-card .product-card-body .btn1{
    border: 1px solid;
    margin-right: 3px;
    border-radius: 0px;
    font-size: 12px;
    margin-top: 10px;
}*/
</style> --}}





<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h4>Price</h4>
            </div>
            <div class="card-body">

                <label class="d-block">
                    <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low"/> High to low
                </label>

                <label class="d-block">
                    <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high"/> Low to High
                </label>

            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="row">
            @forelse ($products as $productItem)
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-card-img">
                            @if ($productItem->productImages->count() > 0)
                                <a href="{{ url('/collections/'. $productItem->category->name.'/'. $productItem->name) }}">
                                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}" style="height: 150px";>
                                </a>
                            @endif
                        </div>
                        <div class="product-card-body">
                            <h5 class="product-name">
                                <a href="{{ url('/collections/'. $productItem->category->name.'/'. $productItem->name) }}">
                                    {{ $productItem->name }}
                                </a>
                            </h5>
                            <div>
                                <span class="selling-price">JOD{{ $productItem->selling_price }}</span>
                                <span class="original-price">JOD{{ $productItem->original_price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <div class="p-2">
                        <h4>No products available in {{ $category->name }}</h4>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
{{-- @endsection --}}
