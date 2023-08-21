<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
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
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Booking</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('form.allbooking')}}">AllBooking</a></li>
                        <li><a href="{{ route('form.bookingcreate')}}">CreateBooking</a></li>
                        <li><a href="{{ route('form.bookingedit')}}">EditBooking</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Rooms</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('all.rooms')}}">All Rooms</a></li>
                                <li><a href="{{ route('add.rooms')}}">Add Rooms</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Layout Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Home</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('home.slide')}}">Home Slide</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>About</span>
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
                                    <span>Blog Category</span>
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
