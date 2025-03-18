<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.head')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('layouts.admin.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            @include('layouts.admin.header')

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Create User</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">

                                <div class="card-body">
                                    <form method="POST" action="{{ url('store') }}">
                                        @csrf
                                        <h2 class="fw-bold mb-2 text-uppercase">Register</h2>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control form-control-sm"
                                                required />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control form-control-sm"
                                                required />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control form-control-sm"
                                                required />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" name="password_confirmation"
                                                class="form-control form-control-sm" required />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label">Role</label>
                                            <select name="role" class="form-control form-control-sm">
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>

                                        <button class="btn btn-info btn-lg px-5" type="submit">Register</button>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    @include('layouts.admin.script')
</body>

</html>
