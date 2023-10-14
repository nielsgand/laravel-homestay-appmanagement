@extends('admin.admin_master')
@section('admin')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col"><br>
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between"
                            style="font-family: 'Noto Sans Thai', sans-serif;">
                            <h3 class="mb-sm-0"><b style="font-family: 'Noto Sans Thai', sans-serif;">การจองห้องพักใหม่</b></h3><br><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" style="font-family: 'Noto Sans Thai', sans-serif;">
                            <h4 class="card-title"><b style="font-family: 'Noto Sans Thai', sans-serif;">จองห้องพัก</b></h4>
                            <p class="card-title-desc">บ้านแม่ยายโฮมสเตย์ และคอฟฟี่ "ยินบริการทุกระดับประทับใจ"</p>
                            <form method="post" action="{{ route('save.record') }}" enctype="multipart/form-data">
                                {{-- class="form-control" --}}
                                @csrf
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="mb-3">
                                            <label>ชื่อ - นามสกุล</label>
                                            <input name="booking_name" type="text" class="form-control"
                                                value="{{ old('booking_name') }}" value="" required="">
                                            {{-- Error Message --}}
                                            @error('booking_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">วันที่เข้าพัก / วันที่ออก</label>
                                            <div class="input-daterange input-group" id="datepicker6"
                                                data-date-format="yyyy-mm-dd" data-date-autoclose="true"
                                                data-provide="datepicker" data-date-container="#datepicker6">
                                                <input type="taxt" class="form-control checkin-date" value="{{ old('arrival_date') }}"
                                                    name="checkin-date" placeholder="วันที่เข้าพัก">
                                                <input type="taxt" class="form-control"
                                                    value="{{ old('depature_date') }}" name="depature_date"
                                                    placeholder="วันที่ออก">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                            <label name="room_name" class="form-label">ห้องพัก</label>
                                            <select class="form-control select2" name="room_name" id="room_name">
                                                <optgroup label="">
                                                    <option selected disabled>-- เลือกห้องพัก --</option>
                                                    @foreach ($data as $rooms)
                                                        <option value="{{ $rooms->id }}">{{$rooms->room_name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                            <label name="room_type" class="form-label">ประเภทของห้องพัก</label>
                                            <input name="room_type" type="text" class="form-control"
                                                value="s" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>ราคา</label>
                                            <input name="room_price" type="text" class="form-control"
                                                value="" id="room_price" required="">
                                            {{-- Error Message --}}
                                            @error('booking_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>จำนวน</label>
                                            <input name="total_numbers" type="text" class="form-control"
                                                value="{{ old('total_numbers') }}" value="" required="">
                                            {{-- Error Message --}}
                                            @error('booking_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>อีเมล</label>
                                            <input name="email" type="text" class="form-control"
                                                value="{{ old('email') }}" required="">
                                            {{-- Error Message --}}
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>เบอร์โทร</label>
                                            <input name="ph_number" type="text" class="form-control"
                                                value="{{ old('ph_number') }}" required="">
                                            {{-- Error Message --}}
                                            @error('ph_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <br><br><br><br>
                                <div class="mb-0">
                                    <br>
                                    <div class="float-end">

                                        <button type="submit" value="Save Record"
                                            class="btn btn-primary waves-effect waves-light me-1">
                                            ยืนยัน
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
    @section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $(".checkin-date").on('blur',function(){
                var _checkindate=$(this).val();
                //Ajax
                $.ajax({
                    url:"{{url('booking')}}/available-rooms/"+_checkindate,
                    dataType:'json',
                    success: function (res) {
                        console.log(res);
                    }
                });
            });
        });
    </script>
    @endsection
@endsection
