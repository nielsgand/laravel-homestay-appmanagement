@php
$room = App\Models\Rooms::latest()->get();
@endphp

<header>
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                <a href="{{ url('/') }}" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                <a href="{{ url('/') }}" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                            </div>
                            <div class="navbar__wrap main__menu d-none d-xl-flex " style="font-family: 'Noto Sans Thai', sans-serif;">
                                <ul class="navigation">
                                    <li class=""><a href="{{ url('/') }}">หน้าแรก</a></li>
                                    <li><a href="{{ route('home.about')}}">เกี่ยวกับเรา</a></li>
                                    <li><a href="services-details.html">บริการ</a></li>
                                    <li class="menu-item-has-children"><a href="#">ห้องพัก</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/room/all') }}">ห้องพัก</a></li>
                                            {{-- <li><a href="{{ route('room.details',$item->id)}}">Room Details</a></li> --}}
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">ข่าวสาร</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">ข่าวสาร</a></li>
                                            <li><a href="blog-details.html">รายละเอียด</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">ติดต่อเรา</a></li>
                                    <li class="menu-item-has-children"><a href="#">ข้อมูลผู้ใช้</a>
                                        <ul class="sub-menu">
                                            {{-- <li><a href="{{ route('user.profile')}}">ข้อมูลส่วนตัว</a></li> --}}
                                            <li><a href="{{ url('/payment')}}">รายการจอง</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__btn d-none d-md-block" style="font-family: 'Noto Sans Thai', sans-serif;">
                                <a href="{{ route('all.room.details') }}" class="btn">จองห้องพัก</a>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                            </div>
                            <div class="menu__outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
