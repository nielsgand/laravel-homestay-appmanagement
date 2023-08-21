@extends('admin.admin_master')
@section('admin')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col"><br>
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Booking Create</h4>

                        </div>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Room</h4>
                            <p class="card-title-desc">A mobile and touch friendly input spinner component for Bootstrap</p>

                            <form class="form-control @error('name') is-invalid @enderror" method="POSTS" action="{{ route('save.record') }}" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                            <label>Booking ID</label>
                                            <input name="booking_id" type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('booking_id') }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="mb-3">
                                            <label>Name</label>
                                            <input name="booking_name" type="text" class="form-control  @error('name') is-invalid @enderror"  value="{{ old('booking_name') }}" value=""
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                            <label name="room_type" class="form-label">Room Type</label>
                                            <select class="form-control select2 @error('room_type') is-invalid @enderror" name="room_type" value="{{ old('room_type') }}">
                                                {{-- <option>Select</option> --}}
                                                <optgroup label="Bed Size">
                                                    <option value="AK">Double</option>
                                                    <option value="HI">Single</option>
                                                </optgroup>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>Total Numbers</label>
                                            <input name="total_numbers" type="text" class="form-control @error('total_numbers') is-invalid @enderror"  value="{{ old('total_numbers') }}"  value=""
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
                                            <label class="form-label">Arrival / Depature Date</label>

                                            <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container="#datepicker6">
                                                <input type="text" class="form-control @error('arrival_date') is-invalid @enderror"  value="{{ old('arrival_date') }}" name="arrival_date" placeholder="Arrival Date">
                                                <input type="text" class="form-control @error('depature_date') is-invalid @enderror"  value="{{ old('depature_date') }}" name="depature_date" placeholder="Depature Date">
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
                                            <label>Date</label>
                                            <input name="created_at" type="text" class="form-control" value=""
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>Time</label>
                                            <input name="created_at" type="text" class="form-control" value=""
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>Email Address</label>
                                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>Ph.Number</label>
                                            <input name="ph_number" type="text" class="form-control @error('ph_number') is-invalid @enderror"  value="{{ old('ph_number') }}"
                                                required="">
                                        </div>
                                    </div>
                                </div>
                                <br><br><br><br><br><br>
                                <div class="mb-0">
                                    <div class="float-end">
                                        <button type="submit" value="Save Record" class="btn btn-primary waves-effect waves-light me-1">
                                            Submit
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
@endsection
