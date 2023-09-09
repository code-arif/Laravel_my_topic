@extends('admin.layout.MasterLayout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active"> Password Admin Update </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Admin Password</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('update.password') }}" method="POST">

                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail"
                                            value="{{ Auth::guard('admin')->user()->email }}" readonly
                                            style="background-color:gray">
                                    </div>

                                    <div class="form-group">
                                        <label for="current_pass">Current Password</label>
                                        <input type="password" name="currnet_pass" class="form-control" id="current_pass"
                                            placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="new_pass">New Password</label>
                                        <input type="password" class="form-control" name="new_pass" id="new_pass"
                                            placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_pass"> Confirm Password </label> Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="confirm_pass" placeholder="Password">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
