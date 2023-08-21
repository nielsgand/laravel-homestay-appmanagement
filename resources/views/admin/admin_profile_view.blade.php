@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-4">
                <div class="card"><br><br>
                    <center>
                        <img class="rounded-circle avatar-xl" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no image.png') }}" alt="Card image cap">
                    </center>
                    <div class="card-body">
                        <b class="card-title" style="font-size:1.5rem">Profile</b><br><br>
                            <div>
                                <h4 class="card-title">Name  :    {{ $adminData->name }}</h4><hr>
                                <h4 class="card-title">Email  :    {{ $adminData->email }}</h4><hr>
                                <h4 class="card-title">Username  :    {{ $adminData->username }}</h4><hr>

                            </div>
                            <br>
                            <div class="align-items-end">
                                <a href="{{ route('edit.profile')}}" class="btn btn-warning btn-rounded waves-effect waves-light align-items-end">Edit Profile</a>
                            </div>


                        <p class="card-text align-items-end">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

@endsection
