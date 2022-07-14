@extends('layouts.admin')
@section('content')
<div class="container mt-4">
        <div class="row">
            <div class="col-3" style="background-color: #212121">
               <h4 class="text-center py-2 mt-2 text-white" style="background-color: #424242">Menus</h4>
               <div class="list-group">
                    <a style="background-color: #424242" href="/product/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                      <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                          <h6 class="mb-0 text-white">Create Product</h6>
                        </div>
                      </div>
                    </a>
                   <a style="background-color: #424242" href="/product/view" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                      <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0 text-white">View Product</h6>
                        </div>
                      </div>
                    </a>
                </div>
               <div class="list-group mt-3">
                    <a style="background-color: #424242" href="/category/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                      <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                          <h6 class="mb-0 text-white">Create Category</h6>
                        </div>
                      </div>
                    </a>
                   <a style="background-color: #424242" href="category/view" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                      <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0 text-white">View Category</h6>
                        </div>
                      </div>
                    </a>
                </div>

            <div class="col-9">
                @yield('right')
            </div>
        </div>
</div>
@stop
