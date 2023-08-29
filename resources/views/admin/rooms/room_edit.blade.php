@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapie.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body" style="font-family: 'Noto Sans Thai', sans-serif;">
                        <h4 class="card-title">Room Edit Page</h4><br>

                        <form method="post" action="{{ route('update.room') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $room->id}}">

                            <div class="mb-3">
                                <label>Room Name</label>
                                <input name="room_name" type="text" value="{{ $room->room_name}}" class="form-control" required="" placeholder="">
                                    {{-- Error Message --}}
                                    @error('room_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label>Title</label>
                                <input name="room_title" type="text" value="{{ $room->room_title}}" class="form-control"  required="" placeholder="">
                                    {{-- Error Message --}}
                                    @error('room_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label>Room Description</label>
                                {{-- <textarea name="long_description" type="file" class="form-control" rows="8" value="{{ $aboutpage->long_description}}"  placeholder="Type something"></textarea> --}}
                                <textarea id="elm1" name="room_description">{{ $room->room_description }}</textarea><br><br>
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                    <input name="room_image" id="image" type="file" class="form-control" placeholder="Type something">
                            </div>

                            <br>
                            <div class="mb-3 p-lg-3">
                                <label> </label>
                                    <img id="showImage" class="rounded avatar-lg"  src="{{ asset($room->room_image) }}" alt="Card image cap">
                            </div>

                            <br>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="Update Profile" class="btn btn-primary waves-effect waves-light me-1">
                                        Update Room
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
