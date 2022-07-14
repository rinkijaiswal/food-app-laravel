@extends('layouts.base')
@section('content')
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>{{Session::get('message')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h3 class="text-center py-2" style="background-color: #eeeeee">Create Category</h3>
    <div class="container">
        <div class="row mb-5 px-5 py-4" style="background-color: #fafafa">
            <form action="{{route('category.store')}}" method="POST">@csrf
                <div class="form-group mt-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" />
                    @error('title')
                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@stop
