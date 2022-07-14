@extends('layouts.base')
@section('content')
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>{{Session::get('message')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h3 class="text-center">Update Category</h3>
    <div class="container d-flex justify-content-center align-items-center">
        <form action="{{route('category.update',[$id])}}" method="POST">@csrf
            {{method_field('PUT')}}
            <div class="form-group mb-2">
                <lable>Title</lable>
                <input type="text" name="title" class="form-control" value="{{$category['title']}}" />
                @error('title')
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@stop
