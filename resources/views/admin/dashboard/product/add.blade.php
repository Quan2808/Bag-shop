@extends('admin.dashboard.layouts.app')

@section('title', 'Add New Product')

@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">>Add New Product</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Add New Product</li>
        </ol>
    </div>
@endsection

@section('main')

    <div class="card">
        <div class="card-body">

            <form role="form" action="{{ route('product.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" required>
                    <!-- Trường thông tin cho model của sản phẩm, bắt buộc phải điền -->
                </div>
                <div class="mb-3">
                    <label for="categories" class="form-label">Categories</label>
                    <select class="form-select" id="categories" name="categories" required>
                        <option value="" selected disabled>Select a category</option>
                        <option value="Laptop Bag">Laptop Bag</option>
                        <option value="Crossbody Bag">Crossbody Bag</option>
                        <option value="Travel Bag">Travel Bag</option>
                    </select>
                    <!-- Trường thông tin cho danh mục sản phẩm, bắt buộc phải chọn -->
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <!-- Trường thông tin cho giá của sản phẩm, bắt buộc phải điền -->
                    </div>
                    <div class="col-md-4">
                        <label for="material" class="form-label">Material</label>
                        <input type="text" class="form-control" id="material" name="material" required>
                        <!-- Trường thông tin cho chất liệu của sản phẩm, bắt buộc phải điền -->
                    </div>
                    <div class="col-md-4">
                        <label for="style" class="form-label">Style</label>
                        <input type="text" class="form-control" id="style" name="style" required>
                        <!-- Trường thông tin cho kiểu dáng của sản phẩm, bắt buộc phải điền -->
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="size" class="form-label">Size</label>
                        <input type="text" class="form-control" id="size" name="size" required>
                        <!-- Trường thông tin cho kích thước của sản phẩm, bắt buộc phải điền -->
                    </div>
                    <div class="col-md-6">
                        <label for="max-load" class="form-label">Maximum Load</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="max-load" name="max_load" required>
                        </div>
                        <!-- Trường thông tin cho tải trọng tối đa của sản phẩm, bắt buộc phải điền -->
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="thumbnail" class="form-label">Thumbnail</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                        <!-- Trường cho phép tải lên ảnh thumbnail cho sản phẩm -->
                    </div>
                    <div class="col-md-6">
                        <label for="gallery" class="form-label">Gallery Images</label>
                        <input type="file" class="form-control" id="gallery" name="gallery[]" accept="image/*"
                            multiple>
                        <!-- Trường cho phép tải lên nhiều ảnh cho bộ sưu tập sản phẩm -->
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>

@endsection
