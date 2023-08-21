@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapie.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">About Page</h4><br>

                        <form method="post" action="{{ route('update.about') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $aboutpage->id }}">

                            <div class="mb-3">
                                <label>Title</label>
                                <input name="title" type="text" class="form-control" value="{{ $aboutpage->title }}" required="" placeholder="Type something">
                            </div>
                            <div class="mb-3">
                                <label>Short Title</label>
                                <input name="short_title" type="text" class="form-control" value="{{ $aboutpage->short_title }}" required="" placeholder="Type something">
                            </div>
                            <div class="mb-3">
                                <label>Short Description</label>
                                <textarea name="short_description" required="" class="form-control" rows="3">{{ $aboutpage->short_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Long Description</label>
                                {{-- <textarea name="long_description" type="file" class="form-control" rows="8" value="{{ $aboutpage->long_description}}"  placeholder="Type something"></textarea> --}}
                                <textarea id="elm1" name="long_description">{{ $aboutpage->long_description}}</textarea><br><br>
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                    <input name="about_image" id="image" type="file" class="form-control" value="{{ $aboutpage->about_image }}"  placeholder="Type something">
                            </div>

                            <br>
                            <div class="mb-3 p-lg-3">
                                <label> </label>
                                    <img id="showImage" class="rounded avatar-lg"  src="{{ (!empty($aboutpage->about_image))? url($aboutpage->about_image):url('upload/no image.png') }}" alt="Card image cap">
                            </div>

                            <br>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="Update Profile" class="btn btn-primary waves-effect waves-light me-1">
                                        Update About
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
