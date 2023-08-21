<section class="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">04 - Rooms</span>
                    <h2 class="title">All creative work</h2>
                </div>
            </div>
        </div>
        {{-- <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12">
                <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
                            role="tab" aria-controls="all" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website" type="button"
                            role="tab" aria-controls="website" aria-selected="false">website</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="apps-tab" data-bs-toggle="tab" data-bs-target="#apps" type="button" role="tab" aria-controls="apps" aria-selected="false">mobile apps</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button"
                            role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="landing-tab" data-bs-toggle="tab" data-bs-target="#landing" type="button"
                            role="tab" aria-controls="landing" aria-selected="false">landing page</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding" type="button"
                            role="tab" aria-controls="branding" aria-selected="false">Branding</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="graphic-tab" data-bs-toggle="tab" data-bs-target="#graphic" type="button"
                            role="tab" aria-controls="graphic" aria-selected="false">Graphic Design</button>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
    <div class="tab-content" id="portfolioTabContent">

        @php
            $room = App\Models\Rooms::latest()->get();
        @endphp
        <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">

                            @foreach ($room as $item )


                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset( $item->room_image) }}" alt="">
                                </div>
                                <div class="portfolio__overlay__content" style="font-family: 'Noto Sans Thai', sans-serif;" >
                                    <span>{{$item->room_name}}</span>
                                    <h4 class="title" style="font-family: 'Noto Sans Thai', sans-serif;  font-size:51px;"><a href="{{ route('room.details',$item->id)}}">{{$item->room_title}}</a></h4>
                                    <a href="{{ route('room.details',$item->id)}}" class="link">Room Detail</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
