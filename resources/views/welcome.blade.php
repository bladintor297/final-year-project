@extends('layouts.main')

@section('content')
    <div id="home">
        <section class="vertical-scrolling">
            <div class="container outer-box">
                <div class="row">
                    <div class="col-5">
                        <h2 class="title-sect">Operation Hour</h2>
                        <div class="date-box">
                            <h6 class="subtitle-date">WED</h6>
                            <h2 class="title-date">23</h2>
                        </div>
                        <p class="operation-hour">
                            <i class="bi bi-clock"></i> Open Hours from 10.00 am to 8.00 pm
                        </p>
                        <div class="hour-box">
                            <h2 class="title-day">OPEN: <span class="time">10.00 am</span> </h2>
                            <h2 class="title-day break">BREAK: <span class="time">01.00 pm</span> </h2>
                            <h2 class="title-day">CLOSE: <span class="time">8.00 pm</span> </h2>
                        </div>
                    </div>
                    <div class="col-7">
                        <h2 class="title-sect">Promotion</h2>
                        <h6 class="subtitle-sect">Recently Added</h6>

                        <div class="promotion-box">
                            <div class="promotion-row promo-1"  style="background-image: linear-gradient(0deg, #9e2642a1, #9e2642c9), url(https://thumbs.dreamstime.com/b/abstract-gym-background-strong-arm-chest-bodybuilder-91838676.jpg); background-size: cover; background-repeat: none;">
                                <p class="promo-caption">Summer Body Challenge</p>
                            </div>
                            <div class="promotion-column">
                                <div class="promo-2"  style="background-image: linear-gradient(0deg, #1e3590b7, #1e3590b7), url(https://www.kennedy-center.org/globalassets/education/opportunities-for-artists/pre-professional-artist-training/contemporary-dance-class-series/contemporary-dance-class-series-169.jpg?width=1600&quality=70); background-size: cover; background-repeat: none;">
                                    <p class="promo-caption">Dancing on the Floor</p>
                                </div>
                                <div class="promo-3"  style="background-image: linear-gradient(0deg, #a99600b7, #a99600b7), url(https://stagescycling.com/media/.renditions/wysiwyg/stages-cycling/category-pages/indoor-cycling/stages_lesmills_ic_class_600x400.jpg); background-size: cover; background-repeat: none;">
                                    <p class="promo-caption">Zumba Raya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="vertical-scrolling">
            <h2>#2</h2>
            <h3>This is the second section</h3>
        </section> --}}
        {{-- <section class="vertical-scrolling">
            <h2>#3</h2>
            <h3>This is the third section</h3>
        </section>
        <section class="vertical-scrolling">
            <h2>#4</h2> 
            <h3>This is the fourth section</h3>
        </section>
        <section class="vertical-scrolling">
            <h2>#5</h2> 
            <h3>This is the fourth section</h3>
        </section> --}}
    </div>
@endsection