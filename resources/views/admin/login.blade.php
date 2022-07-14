@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>{{Session::get('message')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h3 class="text-center">Login</h3>
    <div class="container d-flex justify-content-center align-items-center">
        <form action="{{url('/admin/login')}}" method="POST">@csrf
            <div class="form-group mb-2">
                <lable>Email</lable>
                <input type="text" name="email" class="form-control" />
                @error('email')
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <lable>Password</lable>
                <input type="passwsord" name="password" class="form-control" />
                @error('password')
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
