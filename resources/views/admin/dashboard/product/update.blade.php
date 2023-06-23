@extends('admin.dashboard.layouts.app')

@section('title', 'Product Management')

@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Product List</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Product Management</li>
        </ol>
    </div>
@endsection

@section('main')
    <div class="card">
        <div class="card-body">
            @foreach ($list as $product)
                <form role="form" action="{{ route('product.save_update', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" required
                            value="{{ $product->model }}">
                    </div>
                    <div class="mb-3">
                        <label for="categories" class="form-label">Categories</label>
                        <select class="form-select" id="categories" name="categories" required>
                            <option value="" selected disabled>Select a category</option>
                            <option value="Laptop Bag" {{ $product->categories == 'Laptop Bag' ? 'selected' : '' }}>Laptop
                                Bag</option>
                            <option value="Crossbody Bag" {{ $product->categories == 'Crossbody Bag' ? 'selected' : '' }}>
                                Crossbody Bag</option>
                            <option value="Travel Bag" {{ $product->categories == 'Travel Bag' ? 'selected' : '' }}>Travel
                                Bag</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="price" name="price" required
                                    value="{{ $product->price }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="material" class="form-label">Material</label>
                            <input type="text" class="form-control" id="material" name="material" required
                                value="{{ $product->material }}">
                        </div>
                        <div class="col-md-4">
                            <label for="style" class="form-label">Style</label>
                            <input type="text" class="form-control" id="style" name="style" required
                                value="{{ $product->style }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="size" class="form-label">Size</label>
                            <input type="text" class="form-control" id="size" name="size" required
                                value="{{ $product->size }}">
                        </div>
                        <div class="col-md-6">
                            <label for="max-load" class="form-label">Maximum Load</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="max-load" name="max_load" required
                                    value="{{ $product->max_load }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                        </div>
                        <div class="col-md-6">
                            <label for="gallery" class="form-label">Gallery Images</label>
                            <input type="file" class="form-control" id="gallery" name="gallery[]" accept="image/*"
                                multiple>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            @endforeach
        </div>
    </div>
@endsection
