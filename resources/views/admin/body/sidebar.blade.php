<div class="vertical-menu">

    <div data-simplebar class="h-100" style="font-family: 'Noto Sans Thai', sans-serif;">


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu" style="font-family: 'Noto Sans Thai', sans-serif;">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>ปฏิทินการจอง</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>การจองห้องพัก</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('form.allbooking')}}">รายการจองที่พักทั้งหมด</a></li>
                        <li><a href="{{ route('form.bookingcreate')}}">แบบเพิ่มการจองที่พัก</a></li>
                        <li><a href="{{ route('form.bookingedit')}}">แบบแก้ไขการจองที่พัก</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>การจัดการห้องพัก</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">ห้องพัก</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('all.rooms')}}">ห้องพักทั้งหมด</a></li>
                                <li><a href="{{ route('add.rooms')}}">เพิ่มห้องพัก</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                {{-- <li class="menu-title">Pages</li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>การจัดการเค้าโครง</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>หน้าหลัก</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('home.slide')}}">Home Slide</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>เกี่ยวกับเรา</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('about.page')}}">About Page</a></li>
                                    <li><a href="{{ route('about.multi.image')}}">About Multi Page</a></li>
                                    <li><a href="{{ route('all.multi.image')}}">All Multi Page</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>ฟีดข่าวสาร</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('about.page')}}">About Page</a></li>
                                    <li><a href="{{ route('about.multi.image')}}">About Multi Page</a></li>
                                    <li><a href="{{ route('all.multi.image')}}">All Multi Page</a></li>
                                </ul>
                            </li>

                        </ul>
                    </ul>



                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
