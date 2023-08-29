@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapie.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body" style="font-family: 'Noto Sans Thai', sans-serif;">
                        <h4 class="card-title"><b style="font-family: 'Noto Sans Thai', sans-serif;">การจัดการเพิ่มห้องพัก</b></h4><br>

                        <form method="post" action="{{ route('store.room') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>ชื่อห้องพัก</label>
                                <input name="room_name" type="text" class="form-control" required="" placeholder="">
                                    {{-- Error Message --}}
                                    @error('room_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label>Title</label>
                                <input name="room_title" type="text" class="form-control"  required="" placeholder="">
                                    {{-- Error Message --}}
                                    @error('room_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label>รายละเอียดห้องพัก</label>
                                {{-- <textarea name="long_description" type="file" class="form-control" rows="8" value="{{ $aboutpage->long_description}}"  placeholder="Type something"></textarea> --}}
                                <textarea id="elm1" name="room_description"></textarea><br><br>
                            </div>
                            <div class="mb-3">
                                <label>รูปภาพ</label>
                                    <input name="room_image" id="image" type="file" class="form-control" placeholder="Type something">
                            </div>

                            <br>
                            <div class="mb-3 p-lg-3">
                                <label> </label>
                                    <img id="showImage" class="rounded avatar-lg"  src="{{ url('upload/no image.png') }}" alt="Card image cap">
                            </div>

                            <br>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="Update Profile" class="btn btn-primary waves-effect waves-light me-1">
                                        เพิ่มห้อง
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
