@extends('layouts.app')
@section('title', 'Product - Create Products')
@section('page-heading')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Products</h1>
    </div>
@endsection
@section('contents')
<form action="{{ route('products.store')}}" enctype="multipart/form-data" method="post" id="profile-setup-form">
    @csrf
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Add Product</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label class="labels" for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Product Title">
                    </div>
                    <div class="col-md-4">
                        <label class="labels" for="price">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="price">
                    </div>
                    <div class="col-md-4">
                        <label for="product_code" class="labels">Product Code</label>
                        <input type="text" name="product_code" id="product_code" placeholder="Product Code" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    
                    <div class="col-md-12">
                        <label for="description" class="labels">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="description"></textarea>
                    </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" id="btn" type="submit">Submit</button></div>
            </div>
        </div>
    </div>
</form>
@endsection
