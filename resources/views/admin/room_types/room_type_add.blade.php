@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapie.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <h3 class="mb-sm-0" style="font-family: 'Noto Sans Thai', sans-serif; font-weight: 700;">
            ประเภทห้องพัก</h3><br>
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body" style="font-family: 'Noto Sans Thai', sans-serif;">
                        @if (Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                        @endif
                        <h4 class="card-title"><b style="font-family: 'Noto Sans Thai', sans-serif;">เพิ่มประเภทห้องพัก</b></h4><br>
                        <form method="post" action="{{ route('roomtype.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>ประเภทห้อง</label>
                                <input name="room_type" type="text" class="form-control" required="" placeholder="">
                                    {{-- Error Message --}}
                                    @error('room_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label>ราคา</label>
                                <input name="room_price" type="text" class="form-control"  required="" placeholder="">
                                    {{-- Error Message --}}
                                    @error('room_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div><br>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="Add RoomType" class="btn btn-primary waves-effect waves-light me-1">
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
