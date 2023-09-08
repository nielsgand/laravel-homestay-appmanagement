@extends('frontend.main_master')
@section('main')

        <!-- Icons Css -->
        <link href="{{ asset('frontend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App Css-->
        {{-- <link href="{{ asset('frontend/assets/css/app1.min.css') }}" id="app-style" rel="stylesheet" type="text/css" /> --}}

        {{-- <link href="{{ asset('frontend/assets/css/form-wizard.css') }}" rel="stylesheet"/>
        <script src="{{ asset('frontend/assets/js/wizard.js') }}"></script> --}}


 <!-- main-area -->
 <main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">จองห้องพัก</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">หน้าแรก</a></li>
                                <li class="breadcrumb-item active" aria-current="page">จองห้องพัก</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="homeContact homeContact__style__two">
        <div class="container">
            <div class="homeContact__wrap"><br><br><br><br>
                <form action="{{ route('user.databooking')}}" class="contact__form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="ชื่อ*" name="booking_name" value="">
                        </div>
                        {{-- <div class="col-md-6">
                            <input type="text" placeholder="นามสกุล*" value="">
                        </div> --}}
                        <div class="col-md-6">
                            <input name="email" type="email" placeholder="อีเมล*" value="">
                        </div>
                        <div class="col-md-6">
                            <input name="ph_number" type="text" placeholder="เบอร์โทร*" value="">
                        </div>
                        <div class="col-md-6">
                            <input name="room_id" type="text" placeholder="ชื่อห้อง*" value="{{ $userbooking->room_id}}">
                        </div>
                        <div class="col-md-3">
                            <input  name="room_type" type="text" placeholder="ประเภทห้อง*" value="">
                        </div>
                        <div class="col-md-3">
                            <input name="total_numbers" type="text" placeholder="จำนวน*" value="">
                        </div>

                        <div class="col-md-6">
                            <input name="arrival_date" type="text" placeholder="วันที่จะเข้าพัก*" value="{{ $userbooking->arrival_date}}">
                        </div>
                        <div class="col-md-6">
                            <input name="depature_date" type="text" placeholder="วันที่ออก*" value="{{ $userbooking->depature_date}}">
                        </div>
                    </div>
                    <textarea name="message" id="message" placeholder="Enter your massage*"></textarea>
                    <button type="submit" value="DataBooking" class="btn">ยืนยันการจอง</button>
                </form>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->

@endsection
