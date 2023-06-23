@extends('admin.dashboard.layouts.app')

@section('title', 'User Management')

@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">User Management</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">User Management</li>
        </ol>
    </div>
@endsection

@section('main')
    hello
@endsection
