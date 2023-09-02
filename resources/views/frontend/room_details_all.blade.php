@extends('frontend.main_master')
@section('main')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">Case Study</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Rooms</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- portfolio-area -->
        {{-- @php
        $roomall = App\Models\Rooms::find(1);
        @endphp --}}

        <section class="portfolio__inner">
            <div class="container">

                @foreach ($room as $post)
                    @if ($loop->iteration % 2 == 0)

                        <div class="portfolio__inner__item grid-item cat-one cat-four">
                            <div class="row gx-0 align-items-center">
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__thumb">
                                        <a href="portfolio-details.html">
                                            <img src="{{ asset($post->room_image) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__content">
                                        <h2 class="title"><a href="portfolio-details.html">{{$post->room_name}}</a></h2>
                                        <div style="font-family: 'Noto Sans Thai', sans-serif;">
                                            <p>{!! $post->room_description !!}</p>
                                        </div>
                                        <a href="{{ route('room.details',$post->id)}}" class="link">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="portfolio__inner__item grid-item cat-two">
                            <div class="row gx-0 align-items-center">
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__thumb">
                                        <a href="portfolio-details.html">
                                            <img src="{{ asset($post->room_image) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__content">
                                        <h2 class="title"><a href="portfolio-details.html">{{$post->room_name}}</a></h2>
                                        <div style="font-family: 'Noto Sans Thai', sans-serif;">
                                            <p>{!! $post->room_description !!}</p>
                                        </div>
                                        <a href="{{ route('room.details',$post->id)}} " class="link">View More </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif

                @endforeach

                <div class="pagination-wrap">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- portfolio-area-end -->


        <!-- Booking-area -->
        {{-- <section class="homeContact homeContact__style__two">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section__title" style="font-family: 'Noto Sans Thai', sans-serif;">
                                <span class="sub-title" style="font-size: 30px">จองห้องนี้</span>
                            </div>
                            <div>
                                    <label class="form-label" style="font-family: 'Noto Sans Thai', sans-serif;"><b>วันที่เข้าพัก / วันที่ออก</b></label>
                                    <div class="input-daterange input-group" id="datepicker6"
                                        data-date-format="yyyy-mm-dd" data-date-autoclose="true"
                                        data-provide="datepicker" data-date-container="#datepicker6" style="font-family: 'Noto Sans Thai', sans-serif;">
                                        <input type="taxt" class="form-control" value="{{ old('arrival_date') }}"
                                            name="arrival_date" placeholder="วันที่เข้าพัก" style="font-family: 'Noto Sans Thai', sans-serif;">
                                        <input type="taxt" class="form-control"
                                            value="{{ old('depature_date') }}" name="depature_date"
                                            placeholder="วันที่ออก" style="font-family: 'Noto Sans Thai', sans-serif;">
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="font-family: 'Noto Sans Thai', sans-serif;"><br><br>
                            <div class="float-end" style="padding:15px">
                                <button type="submit" value="Booking Now" class="btn btn-primary waves-effect waves-light me-2">จองห้องนี้</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Booking-area-end -->

    </main>
@endsection
