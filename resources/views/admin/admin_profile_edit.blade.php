@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapie.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Profile</h4><br>

                        <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" value="{{ $editData->name}}" required="" placeholder="Type something">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input name="email" type="text" class="form-control" value="{{ $editData->email}}" required="" placeholder="Type something">
                            </div>
                            <div class="mb-3">
                                <label>Username</label>
                                <input name="username" type="text" class="form-control" value="{{ $editData->username}}" required="" placeholder="Type something">
                            </div>
                            <div class="mb-3">
                                <label>Profile Image</label>
                                <input name="profile_image" type="file" class="form-control" value="{{ $editData->username}}" required="" placeholder="Type something">

                                <br>
                                <div class="mb-3 p-lg-3">
                                    <label> </label>
                                    <img id="showImage" class="rounded avatar-xl" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no image.png') }}" alt="Card image cap">
                                </div>
                            </div>
                            <br>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="Update Profile" class="btn btn-primary waves-effect waves-light me-1">
                                        Update Profile
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

<script type="text/javascript">

    $(document).read(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>

@endsection
