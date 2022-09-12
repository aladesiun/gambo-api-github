@extends('admin.layout.layout') @section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h2 class="mt-30 page-title">Category</h2>
                <ol class="breadcrumb mb-30">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/category">Categories</a></li>
                    <li class="breadcrumb-item active">Add Category</li>
                </ol>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card card-static-2 mb-30">
                            <div class="card-title-2">
                                <h4>Add New Category</h4>
                            </div>
                            <form method="post" action="/category/add">
                                @include('admin.layout.notification')
                                @csrf
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="form-group">
                                            <label class="form-label">Name*</label>
                                            <input required name="name" type="text" class="form-control" placeholder="Product Name" />
                                        </div>

                                    </div>
                                    <button class="save-btn hover-btn m-2 ml-3" type="submit">Add New Category</button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>

@endsection
