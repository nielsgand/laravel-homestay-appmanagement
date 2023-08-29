@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapie.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body" style="font-family: 'Noto Sans Thai', sans-serif;">
                        <h4 class="card-title">EditMultiImage</h4><br>

                        <form method="post" action="{{ route('update.multi.image') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $multiImage->id }}">

                            <div class="mb-3">
                                <label>About Multi Image</label>
                                    <input name="multi_image" id="image" type="file" class="form-control" multiple="" placeholder="Type something">
                            </div>

                            <br>
                            <div class="mb-3 p-lg-3">
                                <label> </label>
                                    <img id="showImage" class="rounded avatar-lg"  src="{{ asset($multiImage->multi_image) }}" alt="Card image cap">
                            </div>

                            <br>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="Update Multi Image" class="btn btn-primary waves-effect waves-light me-1">
                                        Update Multi Image
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
