@extends('layouts.app')
@section('title', 'Products - Manage Your Products')
@section('custom-css')
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@endsection
@section('page-heading')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products</h1>
        <div class="text-right">
            <a href="{{route('products.create')}}" class="btn btn-primary">Create Product</a>
        </div>
    </div>
@endsection
@section('contents')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            <span>{{ Session::get('success') }}</span>
            <a class="btn btn-success" data-dismiss="alert">X</a>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th >Title</th>
                            <th>Price</th>
                            <th>Product Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr class="text-center">
                            <td>{{$row->title}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->product_code}}</td>
                            <td>
                                <a href="{{route('products.show',$row->id)}}" class="btn btn-secondary">View</a>
                                <a href="{{route('products.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{route('products.destroy',$row->id)}}" method="POST" type="button" class="btn btn-danger">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
@endsection
