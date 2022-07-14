@extends('layouts.base')
@section('content')
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>{{Session::get('message')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h3 class="text-center">Update Product</h3>
    <div class="container d-flex justify-content-center align-items-center">
        <form enctype="multipart/form-data" action="{{'/product/update/'.$id}}" method="POST">@csrf
            <div class="form-group mb-2">
                <lable>Name</lable>
                <input type="text" name="name" class="form-control" value="{{$food['name']}}" />
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <lable>Description</lable>
                <input type="text" name="description" class="form-control"value="{{$food['description']}}" />
                @error('description')
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <lable>Price</lable>
                <input type="text" name="price" class="form-control" value="{{$food['price']}}"/>
                @error('price')
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <lable>Category</lable>
                <input type="text" name="category" class="form-control" value="{{$food['category']}}"/>
                @error('category')
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <lable>Image</lable>
                <input type="file" name="image" class="form-control" />
                @error('image')
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <input type="hidden" value="{{$food['image']}}" name="oldimage" />
            <div class="form-group mb-2">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@stop
