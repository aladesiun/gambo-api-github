@extends('admin.layout.layout') @section('contents')
<div id="layoutSidenav_content">

<div class="container-fluid">
    <h2 class="mt-30 page-title">Products</h2>
    <ol class="breadcrumb mb-30">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Products</li>
    </ol>
    <div class="row justify-content-between">
        <div class="col-lg-12">
            <a href="add_product.html" class="add-btn hover-btn">Add New</a>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="bulk-section mt-30">
                <div class="input-group">
                    <select id="action" name="action" class="form-control">
                        <option selected>Bulk Actions</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                        <option value="3">Delete</option>
                    </select>
                    <div class="input-group-append">
                        <button class="status-btn hover-btn" type="submit">Apply</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-6">
            <div class="bulk-section mt-30">
                <div class="search-by-name-input">
                    <input type="text" class="form-control" placeholder="Search" />
                </div>
                <div class="input-group">
                    <select id="categeory" name="categeory" class="form-control">
                        <option selected>Active</option>
                        <option value="1">Inactive</option>
                    </select>
                    <div class="input-group-append">
                        <button class="status-btn hover-btn" type="submit">Search Area</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card card-static-2 mt-30 mb-30">
                <div class="card-title-2">
                    <h4>All Areas</h4>
                </div>
                <div class="card-body-table">
                    <div class="table-responsive">
                        <table class="table ucp-table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 60px;"><input type="checkbox" class="check-all" /></th>
                                    <th style="width: 60px;">ID</th>
                                    <th style="width: 100px;">Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Instock</th>
                                    <th>Action</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td><input type="checkbox" class="check-item" name="ids[]" value="10" /></td>
                                    <td>{{$product->id}}</td>
                                    <td>
                                        <div class="cate-img-5">
                                            <img src="images/product/img-1.jpg" alt="" />
                                        </div>
                                    </td>
                                    <td>{{$product->name}}</td>
                                    @if($product->category)
                                    <td>{{$product->category->name}}</td>
                                    @endif
                                    <td>{{date('d-m-Y', strtotime($product->created_at))}}</td>
                                    @if($product->active == 1)
                                        <td><span class="badge-item badge-status bg-success">Active</span></td>
                                    @else
                                        <td><span class="badge-item badge-status">Not active</span></td>

                                    @endif
                                    @if($product->instock == 1)
                                        <td><span class="badge-item badge-status bg-success">Instock</span></td>
                                    @else
                                        <td><span class="badge-item badge-status">Out of..</span></td>
                                    @endif
                                    <td class="action-btns">
                                        <a href="product_view.html" class="view-shop-btn" title="View"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td>{{$product->price}}</td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
