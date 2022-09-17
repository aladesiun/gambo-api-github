@extends('admin.layout.layout') @section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h2 class="mt-30 page-title">User </h2>
                <ol class="breadcrumb mb-30">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/auth/users">Users</a></li>
                    <li class="breadcrumb-item active">Add User </li>
                </ol>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card card-static-2 mb-30">
                            <div class="card-title-2">
                                <h4>Add New User </h4>
                            </div>
                            <form method="post" action="/auth/create">
                                @include('admin.layout.notification')
                                @csrf
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="form-group">
                                            <label class="form-label">Username*</label>
                                            <input required name="name" value="{{old('name')}}" type="text" class="form-control" placeholder="Email" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Email*</label>
                                            <input required name="email" value="{{old('email')}}" type="text" class="form-control" placeholder="Email" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password*</label>
                                            <input required name="password" value="{{old('password')}}" type="password" class="form-control" placeholder="*****" />
                                        </div>

                                    </div>
                                    <button class="save-btn hover-btn m-2 ml-3" type="submit">Add New User </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
