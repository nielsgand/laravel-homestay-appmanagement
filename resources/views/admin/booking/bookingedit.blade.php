@extends('admin.admin_master')
@section('admin')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col"><br>
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between" style="font-family: 'Noto Sans Thai', sans-serif;">
                            <h4 class="mb-sm-0">แก้ไขการจอง</h4>

                        </div>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" style="font-family: 'Noto Sans Thai', sans-serif;">

                            <h4 class="card-title">ห้องพัก</h4>
                            <p class="card-title-desc">A mobile and touch friendly input spinner component for Bootstrap</p>

                            <form>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                            <label>รหัสการจอง</label>
                                            <input name="" type="text" class="form-control" value=""
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="mb-3">
                                            <label>ชื่อ - นามสกุล</label>
                                            <input name="" type="text" class="form-control" value=""
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                            <label class="form-label">ประเภทของหัองพัก</label>
                                            <select class="form-control select2">
                                                {{-- <option>Select</option> --}}
                                                <optgroup label="Bed Size">
                                                    <option value="AK">ที่นอนคู่</option>
                                                    <option value="HI">ที่นอนเดี่ยว</option>
                                                </optgroup>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>จำนวนคน</label>
                                            <input name="" type="text" class="form-control" value=""
                                                required="">
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
                                            <label class="form-label">วันที่มาถึง / วันที่กลับ</label>

                                            <div class="input-daterange input-group" id="datepicker6" data-date-format="yyyy-mm-dd" data-date-autoclose="true" data-provide="datepicker" data-date-container="#datepicker6">
                                                <input type="text" class="form-control" name="start" placeholder="วันที่มาถึง">
                                                <input type="text" class="form-control" name="end" placeholder="วันที่กลับ">
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
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>วันที่</label>
                                            <input name="" type="text" class="form-control" value=""
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>เวลา</label>
                                            <input name="" type="text" class="form-control" value=""
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>อีเมล</label>
                                            <input name="" type="text" class="form-control" value=""
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>เบอร์โทร</label>
                                            <input name="" type="text" class="form-control" value=""
                                                required="">
                                        </div>
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
