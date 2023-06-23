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
    <div class="d-flex justify-content-center mb-3">
        @if (session()->has('success') || session()->has('success-update'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') ?? session('success-update') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap text-center">
                            <thead>
                                <tr>
                                    <th>Categories</th>
                                    <th>Model</th>
                                    <th>Price</th>
                                    <th>Size</th>
                                    <th>Style</th>
                                    <th>Maximum Load</th>
                                    <th>Hide / Show</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $product)
                                    <tr>
                                        <td>{{ $product->categories }}</td>
                                        <td>{{ $product->model }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->size }}</td>
                                        <td>{{ $product->style }}</td>
                                        <td>{{ $product->max_load }}</td>
                                        <td>
                                            @if ($product->status == 1)
                                                <a href="{{ route('product.unactive', $product->id) }}"
                                                    class="btn btn-outline-dark rounded-circle p-1 lh-1" type="button">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('product.active', $product->id) }}"
                                                    class="btn btn-outline-dark rounded-circle p-1 lh-1" type="button">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-evenly">
                                                <div>
                                                    <a href="{{ route('product.update', $product->id) }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                        Edit
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ route('product.del', $product->id) }}"
                                                        onclick="return confirm('Are you sure you want to delete this product?')" class=" text-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
