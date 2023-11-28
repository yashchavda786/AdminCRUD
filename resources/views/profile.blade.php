@extends('layouts.app')
@section('title', 'Edit Profile Laravel admin CRUD')
@section('page-heading')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
    </div>
@endsection
@section('contents')
<form action="" enctype="multipart/form-data" method="post" id="profile-setup-form">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Setting</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels" for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="First Name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels" for="email">Email</label>
                        <input type="text" name="email" disabled class="form-control" placeholder="Email" value="{{ auth()->user()->email }}">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="phone" class="labels">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" value="{{ auth()->user()->phone }}">
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="labels">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="address" value="{{ auth()->user()->address }}">
                    </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" id="btn" type="submit">Save Profile</button></div>
            </div>
        </div>
    </div>
</form>
@endsection
