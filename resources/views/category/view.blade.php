@extends('layouts.base')
@section('content')
<div class="container-fluid">
    <h3 class="text-center">View Category</h3>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category['id']}}</td>
                <td><p>{{$category['title']}}</p></td>
                <td><a href="{{ route('category.edit',[$category['id']]) }}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ url('/category/'.$category['id']) }}" method="POST">@csrf
                         {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
