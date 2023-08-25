<div class="row">
    <div class="col-md-12">
        <h4>Search Results</h4>
        <div class="underline mb-4"></div>
    </div>
    @forelse ($searchProducts as $productItem)
        <div class="col-md-3">
            <div class="product-card">
                <div class="product-card-img">
                    <label class="stock bg-danger">New</label>
                    @if ($productItem ->productImages ->count() > 0)
                        <a href="({ url('/collections/'.$productItem->category->slug. '/'.$productItem-›slug) }}">
<img src-*{ asset (SproductItem-›productImages [0]-›image) J)" alt-" ({ SproductItem-›nan
</a>
@endif
</div>
<div class-"product-card-body"
<p class-"product-brand"›{{ $productItem - ›brand }}</p>
<h5 class-"product-name"›
<a href-"{{url('/collections/*.$productItem-›category-›slug.
{{$productItem-›name]}
^ Pull up for
</a>
</h5>
‹div>
</div>
</div>
</div>
</div>
«span class-"selling-price"›${{$productitem-›selling price]]</spar
«span class-"original-price"›${{SproductItem-›original_price}]</sp
10
