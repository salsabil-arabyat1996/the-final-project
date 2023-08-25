@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category
                         <a href="{{ route('create') }}" class="btn btn-primary btn-sm float-end">Back </a>
                    </h3>
                </div>
                <div class="crad-body">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">                        @csrf
                        <div class="row">


                            <div class="col-md-12 mb-3 border p-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                                @error('name')<small class="text-danger"> {{$message}}</small> @enderror


                            </div>

                            <div class="col-md-12 mb-3 border p-3">
                                <label>Description</label>
                                <textarea type="text" name="description" class="form-control" row="3"></textarea>
                                @error('description')<small class="text-danger"> {{$message}}</small> @enderror
                            </div>



                            <div class="col-md-6 mb-3 ">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" />
                            </div>

                            <div class="col-md-12 mb-3 ">
                                <button type="submit" class="btn btn-primary float-end">save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
