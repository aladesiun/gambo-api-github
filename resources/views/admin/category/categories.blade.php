@extends('admin.layout.layout') @section('contents')
    <div id="layoutSidenav_content">

        <div class="container-fluid">
            <h2 class="mt-30 page-title">Categories</h2>
            <ol class="breadcrumb mb-30">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <a href="/category/add" class="add-btn hover-btn">Add New</a>
                </div>

                <div class="col-lg-5">
                    <div class="bulk-section ">
                        <div class="search-by-name-input">
                            <input type="text" class="form-control" placeholder="Search" />
                        </div>
                        <div class="input-group">
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
                                        <th>Name</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td><input type="checkbox" class="check-item" name="ids[]" value="10" /></td>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>

                                            <td>{{date('d-m-Y', strtotime($category->created_at))}}</td>
                                            <td class="action-btns">
                                                <a href="#" class="edit-btn" title="Edit"><i class="fas fa-trash"></i></a>
                                            </td>
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
