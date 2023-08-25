@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h3>  Edit Category
                        <a href="{{ route('admin.category.edit', ['category' => $category->id]) }}" class="btn btn-danger btn-sm text-white float-end">Back</a>
                        {{-- <a href="{{ route('edit') }}" class="btn btn-danger btn-sm text-white flote-end">Back</a> --}}

                    </h3>
                </div>
                <div class="crad-body">
                    {{-- <form action="{{ route('admin.category.edit', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data"> --}}
                        <form action="{{ route('admin.category.update', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="row">


                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" value="{{$category->name}}" class="form-control" />
                                @error('name')<small class="text-danger"> {{$message}}</small> @enderror


                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea type="text" name="description"  class="form-control" row="3">{{$category->description}}</textarea>
                                @error('description')<small class="text-danger"> {{$message}}</small> @enderror
                            </div>



                            <div class="col-md-6 mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" />
                                <img src="{{asset('/uploads/category/'.$category->image)}}" width="60px" height="60px"/>
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
