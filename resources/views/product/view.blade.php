@extends('layouts.base')
@section('content')
<div class="container-fluid mt-5">
    <h3 class="text-center">View Products</h3>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th> Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td><img src="{{'/uploads/'.$product['image']}}" height="100px" width="100px" /></td>
                    <td><p>{{$product['name']}}</p></td>
                    <td><p>{{$product['description']}}</p></td>
                    <td><p>{{$product['category']}}</p></td>
                    <td><p>{{$product['price']}}</p></td>
                    <td><a href="{{'/product/update/'.$product['id']}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{'/product/delete/'.$product['id']}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row mt-3 mb-5" align="center">
            {{$products->links()}}
        </div>
    </div>
</div>
@stop
