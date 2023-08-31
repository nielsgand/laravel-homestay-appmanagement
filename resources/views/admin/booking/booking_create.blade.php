@extends('admin.admin_master')
@section('admin')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col"><br>
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between"
                            style="font-family: 'Noto Sans Thai', sans-serif;">
                            <h4 class="mb-sm-0">การจองห้องพักใหม่</h4>

                        </div>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body" style="font-family: 'Noto Sans Thai', sans-serif;">

                            <h4 class="card-title">จองห้องพัก</h4>
                            <p class="card-title-desc">บ้านแม่ยายโฮมสเตย์ และคอฟฟี่ "ยินบริการทุกระดับประทับใจ"</p>

                            <form method="post" action="{{ route('save.record') }}" enctype="multipart/form-data">
                                {{-- class="form-control" --}}
                                @csrf
                                <div class="row">
                                    {{-- <div class="col-lg-2">
                                        <div class="mb-3">
                                            <label>รหัสการจอง</label>
                                            <input name="booking_id" type="text" class="form-control"  value="{{ old('booking_id') }}"> --}}
                                    {{-- Error Message --}}
                                    {{-- @error('booking_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div> --}}
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
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                            <label name="room_type" class="form-label">ประเภทของห้อง</label>
                                            <select class="form-control select2" name="room_type"
                                                value="{{ old('room_type') }}">
                                                {{-- <option>Select</option> --}}
                                                <optgroup label="Bed Size">
                                                    <option value="ที่นอนคู่">ที่นอนคู่</option>
                                                    <option value="ที่นอนเดี่ยว">ที่นอนเดี่ยว</option>
                                                </optgroup>
                                            </select>

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

                                    {{-- <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">Arrival Date</label>
                                            <div class="input-group" id="datepicker2">
                                                <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container="#datepicker2" data-provide="datepicker" data-date-autoclose="true">

                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">Depature Date</label>
                                            <div class="input-group" id="datepicker2">
                                                <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container="#datepicker2" data-provide="datepicker" data-date-autoclose="true">

                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            </div><!-- input-group -->
                                        </div>
                                    </div> --}}

                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">วันที่เข้าพัก / วันที่ออก</label>

                                            {{-- <input name="arrival_date" type="text" class="form-control" value="{{ old('arrival_date' )}}">
                                            <input name="depature_date" type="text" class="form-control" value="{{ old('depature_date' )}}"> --}}
                                            <div class="input-daterange input-group" id="datepicker6"
                                                data-date-format="yyyy-mm-dd" data-date-autoclose="true"
                                                data-provide="datepicker" data-date-container="#datepicker6">
                                                <input type="taxt" class="form-control" value="{{ old('arrival_date') }}"
                                                    name="arrival_date" placeholder="วันที่เข้าพัก">
                                                <input type="taxt" class="form-control"
                                                    value="{{ old('depature_date') }}" name="depature_date"
                                                    placeholder="วันที่ออก">
                                            </div>
                                        </div>
                                    </div><br>


                                    {{-- <div class="col-lg-6">
                                        <div class="mb-0">
                                            <label class="form-label">Search Disable</label>
                                            <select class="form-control select2-search-disable">
                                                <option>Select</option>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                            </select>

                                        </div>

                                    </div> --}}
                                    <br>
                                    {{-- <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>Date</label>
                                            <div class="input-group" id="datepicker2">
                                                <input name="created_at" type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container="#datepicker2" data-provide="datepicker" data-date-autoclose="true"  value="{{ old('date') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>Time</label>
                                            <input name="created_at" type="text" class="form-control" value="{{ old('time') }}"
                                                required="">
                                                //Error Message
                                                @error('time')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div> --}}

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
                                <br><br><br><br><br><br><br><br>
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
@endsection
