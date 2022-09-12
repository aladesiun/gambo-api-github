@extends('admin.layout.layout') @section('contents')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h2 class="mt-30 page-title">Products</h2>
            <ol class="breadcrumb mb-30">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="products.html">Products</a></li>
                <li class="breadcrumb-item active">Add Product</li>
            </ol>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card card-static-2 mb-30">
                        <div class="card-title-2">
                            <h4>Add New Product</h4>
                        </div>
                        <form method="post" action="/product/add"  enctype="multipart/form-data">
                            @include('admin.layout.notification')
                            @csrf
                            <div class="card-body-table">
                                <div class="news-content-right pd-20">
                                    <div class="form-group">
                                        <label class="form-label">Name*</label>
                                        <input  value="{{old('name')}}" required name="name" type="text" class="form-control" placeholder="Product Name" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Category*</label>
                                        <select id="category" value="{{old('category')}}" required name="category[]" class="form-control" multiple="multiple">
                                            <option selected>--Select Category--</option>

                                        @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Purchase Price*</label>
                                        <input  value="{{old('purchase_price')}}"  name="purchase_price" type="number" class="form-control" placeholder="$0" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Bulk Price*</label>
                                        <input  value="{{old('bulk_price')}}" required name="bulk_price" type="number" class="form-control" placeholder="$0" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Price*</label>
                                        <input  value="{{old('price')}}" required name="price" type="number" class="form-control" placeholder="$0" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Stock*</label>
                                        <input  value="{{old('stock')}}" required name="stock" type="number" class="form-control" placeholder="$0" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Unit Stock*</label>
                                        <input  value="{{old('unit_stock')}}" required name="unit_stock" type="number" class="form-control" placeholder="$0" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Status*</label>
                                        <select id="status" required name="active" value="{{old('active')}}" class="form-control" >
                                            <option selected>--select--</option>
                                            <option value="1">Active/verified</option>
                                            <option value="0">Inactive/notVerified</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Description*</label>
                                        <input  value="{{old('description')}}" required name="description" type="text" class="form-control" placeholder=".." />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Category Image*</label>
                                        <div class="input-group">
                                                <input  value="{{old('image')}}" required name="image" type="file" class=""  />
                                        </div>
                                        <div class="add-cate-img-1">
                                            <img src="images/product/img-11.jpg" alt="" />
                                        </div>
                                    </div>

                                    </div>
                                    <button class="save-btn hover-btn" type="submit">Add New Product</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
