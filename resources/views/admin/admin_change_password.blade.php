@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Password Page</h4><br>


                        @if (count($errors))
                            @foreach ( $errors->all() as $error )
                                <p class="alert alert-danger alert-dismissable fade show">
                                    {{ $error }}
                                </p>
                            @endforeach
                        @endif

                        <form method="post" action="{{ route('update.password') }}">
                            @csrf
                            <div class="mb-3">
                                <label>Old Password</label>
                                <input name="oldpassword" type="password" class="form-control" id="oldpassword">
                            </div>

                            <div class="mb-3">
                                <label>New Password</label>
                                <input name="newpassword" type="password" class="form-control" id="newpassword">
                            </div>

                            <div class="mb-3">
                                <label>Confirm Password</label>
                                <input name="confirm_password" type="password" class="form-control" id="confirm_password">
                            </div>
                            <br>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="Update Profile" class="btn btn-primary waves-effect waves-light me-1">
                                        Change Password
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

@endsection
