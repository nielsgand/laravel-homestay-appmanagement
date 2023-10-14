@extends('frontend.main_master')
@section('main')


<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">รายละเอียดห้องพัก</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png')}}" alt=""></li>
            </ul>
        </div> --}}
    </section>
    <!-- breadcrumb-area-end -->

    <!-- portfolio-details-area -->
    <section class="services__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="services__details__thumb">
                        <img src="{{ asset($allroom->room_image)}}" alt="">
                    </div>
                    <div class="services__details__content" >
                        <h2 class="title">{{ $allroom->room_name }}</h2>
                        <p>{!! $allroom->room_description !!}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="services__sidebar">
                        {{-- <div class="widget">
                            <h5 class="title">Get in Touch</h5>
                            <form action="#" class="sidebar__contact">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter your mail*">
                                <textarea name="message" id="message" placeholder="Massage*"></textarea>
                                <button type="submit" class="btn">send massage</button>
                            </form>
                        </div> --}}
                        <div class="widget">
                            <h5 class="title">Project Information</h5>
                            <ul class="sidebar__contact__info">
                                <li><span><b>Date :</b></span> January, 2021</li>
                                <li><span><b>Location :</b></span> East Meadow NY 11554</li>
                                <li><span><b>Client :</b></span> American</li>
                                <li class="cagegory"><span><b>Category :</b></span>
                                    <a href="portfolio.html">Photo,</a>
                                    <a href="portfolio.html">UI/UX</a>
                                </li>
                                <li><span><b>Project Link :</b></span> <a href="portfolio-details.html">https://www.yournews.com/</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="title">Contact Information</h5>
                            <ul class="sidebar__contact__info">
                                <li><span><b>Address :</b></span> 8638 Amarica Stranfod, <br> Mailbon Star</li>
                                <li><span><b>Mail :</b></span> yourmail@gmail.com</li>
                                <li><span><b>Phone :</b></span> +7464 0187 3535 645</li>
                                <li><span><b>Fax id :</b></span> +9 659459 49594</li>
                            </ul>
                            <ul class="sidebar__contact__social">
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-details-area-end -->


    <!-- Booking-area -->
    <section class="homeContact homeContact__style__two">
        <div class="container">
            <div class="homeContact__wrap">
                <form action="{{ route('user.booking') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section__title" style="font-family: 'Noto Sans Thai', sans-serif;">
                                <span class="sub-title" style="font-size: 30px">เลือกวันที่เข้าพัก</span>
                                {{-- <h2 class="title">Any questions? Feel free <br> to contact</h2> --}}
                            </div>
                            <div>
                                <input class="form-control" type="text" value="{{ $allroom->id }}" name="room_id">
                            </div>
                            <div>
                                <input class="form-control" type="text" value="{{ $allroom->room_name }}" name="room_name">
                            </div>
                            <div>
                                    <label class="form-label" style="font-family: 'Noto Sans Thai', sans-serif;"><b>วันที่เข้าพัก / วันที่ออก</b></label>
                                    <div class="input-daterange input-group" id="datepicker6"
                                        data-date-format="yyyy-mm-dd" data-date-autoclose="true"
                                        data-provide="datepicker" data-date-container="#datepicker6" style="font-family: 'Noto Sans Thai', sans-serif;">
                                        <input type="taxt" class="form-control" value=""
                                            name="arrival_date" placeholder="วันที่เข้าพัก" style="font-family: 'Noto Sans Thai', sans-serif;">
                                        <input type="taxt" class="form-control"
                                            value="" name="depature_date"
                                            placeholder="วันที่ออก" style="font-family: 'Noto Sans Thai', sans-serif;">
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="font-family: 'Noto Sans Thai', sans-serif;"><br><br>
                            <div class="float-end" style="padding:15px">
                                <button type="submit" value="UserBooking" class="btn btn-primary waves-effect waves-light me-2">จองห้องนี้</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Booking-area-end -->

</main>


@endsection
