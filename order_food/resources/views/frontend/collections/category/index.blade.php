
@extends('layouts.app')

@section('content')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> --}}

    {{-- <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"> --}}

{{-- @include('layouts.inc.frontend.navbar') --}}
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Categories</h4>
                </div>
                @forelse ($categories as $categoryItem)
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="{{ url('/collections/'.$categoryItem->name) }}">
                            <div class="category-card-img">
                                <img src="{{ asset($categoryItem->image) }}" class="w-100" alt="category" style="height: 150px";>
                            </div>
                            <div class="category-card-body">
                                <h5>{{ $categoryItem->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-md-12">
                    <h5>No category</h5>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    {{-- @endsection --}}
    @endsection
