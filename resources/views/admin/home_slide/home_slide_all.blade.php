@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapie.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body" style="font-family: 'Noto Sans Thai', sans-serif;">
                        <h4 class="card-title" style="font-family: 'Noto Sans Thai', sans-serif; font-weight:'700';">สไลดหน้าหลัก</h4><br>

                        <form method="post" action="{{ route('update.slider') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $homeslide->id }}">

                            <div class="mb-3">
                                <label>ชื่อ</label>
                                <input name="title" type="text" class="form-control" value="{{ $homeslide->title }}" required="" placeholder="Type something">
                            </div>
                            <div class="mb-3">
                                <label>คำอธิบาย</label>
                                <input name="short_title" type="text" class="form-control" value="{{ $homeslide->short_title}}" required="" placeholder="Type something">
                            </div>
                            <div class="mb-3">
                                <label>วีดีโอ URL</label>
                                <input name="video_url" type="text" class="form-control" value="{{ $homeslide->video_url}}" required="" placeholder="Type something">
                            </div>
                            <div class="mb-3">
                                <label>รูปภาพ</label>
                                <input name="home_slide" type="file" class="form-control"  placeholder="Type something">

                                <br>
                                <div class="mb-3 p-lg-3">
                                    <label> </label>
                                    <img id="showImage" class="rounded avatar-lg"  src="{{ (!empty($homeslide->home_slide))? url($homeslide->home_slide):url('upload/no image.png') }}" alt="Card image cap">
                                </div>
                            </div>
                            <br>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="Update Profile" class="btn btn-primary waves-effect waves-light me-1">
                                        เพิ่ม
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        ยกเลิก
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
