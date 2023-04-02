@extends('layouts.booking')

@section('content')
    <div id="booking">
        <section class="vertical-scrolling">
            <div class="container outer-member">
                <div class="pill-wrapper">
                    <ul class="nav nav-pills mb-3 justify-content-center mt-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active fs-4 fw-bold rounded-pill" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">New Booking</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link fs-4 fw-bold rounded-pill" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">My Bookings</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab" tabindex="0">
                        <div class="row outer-booking">
                            <div class="space-box">
                                <a href="#">
                                  {{-- <p>xx</p> --}}
                                  <img src="https://www.verywellfit.com/thmb/WtaRzGOCbJdVYFlWr_7VOfwn_Ow=/3000x2002/filters:no_upscale():max_bytes(150000):strip_icc()/zumba-fatcamera-c9d4ee824a0f4fda883484f878abc8ae.jpg" alt="">
                                </a>
                            </div>
                            <div class="space-box">
                                <a href="">
                                    <img src="https://a.storyblok.com/f/115220/2400x990/4bd3c366bb/muay-thai-vs-kickboxing-whats-the-difference.png/m/1250x625/smart"  alt="">
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                        <p class="title-year p-0">Upcoming</p>
                        <ul class="list-group booking-list">
                            <li class="list-group-item my-booking">
                              <div class="row">
                                <div class="col-md-3 image-thumbnail">
                                  <img src="https://a.storyblok.com/f/115220/2400x990/4bd3c366bb/muay-thai-vs-kickboxing-whats-the-difference.png/m/1250x625/smart"alt="Booking 1">
                                </div>
                                <div class="col-md-4 booking-detail">
                                  <h4 class="heading">General Information</h4>
                                  <p class="text">A spacious hall that is suitable to organize Zumba Club
                                                  with your crackhead friends from day to night.
                                  </p>
                                  <p class="text"><b>RM 150.00/hour</b> &nbsp;&nbsp;|&nbsp;&nbsp; 300 - 350 people</p>

                                </div>
                                <div class="col-md-3 booking-detail">
                                  <h4 class="heading">Booking Date</h4>
                                  <div class="row date-box" >
                                    <div class="col-6 date book-date">
                                        <p>DATE</p>
                                        <h3>26</h3>
                                        <p class="month">Oct 2022</p>                                        
                                    </div>
                                    <div class="col-6 date">
                                        <p>TIME</p>
                                        <div class="d-flex justify-content-center">
                                            <h3>5</h3> 
                                            <small class="pt-4"> &nbsp;&nbsp;pm</small>
                                        </div>
                                        <p class="month">Until 6.00 pm</p>   
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2 status">
                                    <h4 class="heading">Status</h4>
                                    <span class="badge">Pending</span>
                                    <div class="view-more">
                                        {{-- <a href="#" class="view-more">View More</a> --}}
                                    </div>
                                </div>
                              </div>
                            </li>
                        </ul>
                        <p class="title-year p-0 mt-4">History</p>
                        <ul class="list-group booking-list">
                            <li class="list-group-item my-booking">
                              <div class="row">
                                <div class="col-md-3 image-thumbnail">
                                  <img src="https://a.storyblok.com/f/115220/2400x990/4bd3c366bb/muay-thai-vs-kickboxing-whats-the-difference.png/m/1250x625/smart"alt="Booking 1">
                                </div>
                                <div class="col-md-4 booking-detail">
                                  <h4 class="heading">General Information</h4>
                                  <p class="text">A spacious hall that is suitable to organize Zumba Club
                                                  with your crackhead friends from day to night.
                                  </p>
                                  <p class="text"><b>RM 150.00/hour</b> &nbsp;&nbsp;|&nbsp;&nbsp; 300 - 350 people</p>

                                </div>
                                <div class="col-md-3 booking-detail">
                                  <h4 class="heading">Booking Date</h4>
                                  <div class="row date-box" >
                                    <div class="col-6 date book-date">
                                        <p>DATE</p>
                                        <h3>26</h3>
                                        <p class="month">Oct 2022</p>                                        
                                    </div>
                                    <div class="col-6 date">
                                        <p>TIME</p>
                                        <div class="d-flex justify-content-center">
                                            <h3>5</h3> 
                                            <small class="pt-4"> &nbsp;&nbsp;pm</small>
                                        </div>
                                        <p class="month">Until 6.00 pm</p>   
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2 status">
                                    <h4 class="heading">Status</h4>
                                    <span class="badge bg-success text-white">Approved</span>
                                    <div class="view-more">
                                        {{-- <a href="#" class="view-more">View More</a> --}}
                                    </div>
                                </div>
                              </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection