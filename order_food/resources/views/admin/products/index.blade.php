@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12 ">
        @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>  products
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm text-white float-end">
                        Add products
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>product</th>
                            <th>price</th>
                            <th>Quantity</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>
                                @if ($product->category)
                                  {{$product->category->name}}

                                 @endif
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->status=='1' ? 'Hidden':'visible'}}</td>
                            <td>
                                <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ route('admin.product.delete', ['product' => $product->id]) }}" onclick="return confirm('Are you sure you want to delete this data?')" class="btn btn-sm btn-danger">Delete</a>

                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No Product Available</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
