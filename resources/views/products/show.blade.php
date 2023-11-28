@extends('layouts.app')
@section('title', '{{ $data->title }} - Show Product Detail')
@section('page-heading')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Products</h1>
        <div class="text-right">
            <a href="{{ route('products') }}" class="btn btn-primary">Back To List</a>
        </div>
    </div>
@endsection
@section('contents')
    <div class="row mt-2">
        <div class="col-md-4">
            <label class="labels" for="title">Title</label>
            <input type="text" name="title" id="title" readonly value="{{ $data->title }}" class="form-control"
                placeholder="Product Title">
        </div>
        <div class="col-md-4">
            <label class="labels" for="price">Price</label>
            <input type="text" name="price" class="form-control" readonly placeholder="price" value="{{ $data->price }}">
        </div>
        <div class="col-md-4">
            <label for="product_code" class="labels">Product Code</label>
            <input type="text" name="product_code" id="product_code" readonly placeholder="Product Code"
                value="{{ $data->product_code }}" class="form-control">
        </div>
    </div>
    <div class="row mt-2">

        <div class="col-md-12">
            <label for="description" class="labels">Description</label>
            <textarea name="description" id="description" readonly class="form-control" placeholder="description">{{ $data->description}}</textarea>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <label class="labels" for="created_at">Created At</label>
            <input type="text" name="created_at" class="form-control" readonly placeholder="created_at" value="{{ $data->created_at }}">
        </div>
        <div class="col-md-6">
            <label for="updated_at" class="labels">Updated At</label>
            <input type="text" name="updated_at" id="updated_at" readonly placeholder="Updated At"
                value="{{ $data->updated_at }}" class="form-control">
        </div>
    </div>
@endsection
