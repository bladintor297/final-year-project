@extends('layouts.membership')

@section('content')
    <div id="membership">
        <section class="vertical-scrolling">
            <div class="container outer-member">
                <div class="pill-wrapper">
                    <ul class="nav nav-pills mb-3 justify-content-center mt-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active fs-4 fw-bold rounded-pill" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Current</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link fs-4 fw-bold rounded-pill" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">History</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab" tabindex="0">
                        <div class="member-card">
                            <div class="card-header">
                                <h2 class="title-card">MONTHLY MEMBER</h2>
                            </div>
                            <div class="card-body">
                                <div class="row card-details">
                                    <div class="col-8 name"> 
                                        MOHD IDHAM BIN ANUR
                                    </div>
                                    <div class="col-4 memberid"> 
                                        QZ62326
                                    </div>
                                </div>
                                <div class="row expiry-details">
                                    Expiry Date: 26 July 2023
                                    <div class="barcode-expiry">
                                        <img src="https://static.vecteezy.com/system/resources/previews/001/199/360/original/barcode-png.png" alt="x">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h6 class="footnote">
                                    Please show this card upon entrance
                                </h6>
                                <img src='{{ URL::asset('assets/img/qidgym-logo.png'); }}' alt="">
                            </div>
                        </div>
                        <div class="renew-box">
                            <a class="btn renew-btn" href="membership/create">Renew</a>
                        </div>
                    </div>
            
                    <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                        <p class="title-year">This Year</p>
                        <ul class="list-group list-subscription-wrapper">
                            <li class="list-group-item list-subscription">
                              <div class="subcsription">
                                <div class="icon">
                                    <i class="bi bi-calendar2-plus fs-2 p-3"></i>
                                </div>
                                <div class="subscription-detail">
                                    <div>
                                        <div class="fw-bold">MARCH 2023</div>
                                        Payment Successfull
                                    </div>
                                </div>
                              </div>
                              <div class="subscription-date">
                                    <p>17-MAR</p>
                              </div>
                            </li>
                        </ul>
                        <ul class="list-group list-subscription-wrapper">
                            <li class="list-group-item list-subscription">
                              <div class="subcsription">
                                <div class="icon">
                                    <i class="bi bi-calendar2-plus fs-2 p-3"></i>
                                </div>
                                <div class="subscription-detail">
                                    <div>
                                        <div class="fw-bold">FEBRUARY 2023</div>
                                        Payment Successfull
                                    </div>
                                </div>
                              </div>
                              <div class="subscription-date">
                                    <p>17-FEB</p>
                              </div>
                            </li>
                        </ul>
                        <ul class="list-group list-subscription-wrapper">
                            <li class="list-group-item list-subscription">
                              <div class="subcsription">
                                <div class="icon">
                                    <i class="bi bi-calendar2-plus fs-2 p-3"></i>
                                </div>
                                <div class="subscription-detail">
                                    <div>
                                        <div class="fw-bold">JANUARY 2023</div>
                                        Payment Successfull
                                    </div>
                                </div>
                              </div>
                              <div class="subscription-date">
                                    <p>17-JAN</p>
                              </div>
                            </li>
                        </ul>
                        <p class="title-year">2022</p>
                        <ul class="list-group list-subscription-wrapper">
                            <li class="list-group-item list-subscription">
                              <div class="subcsription">
                                <div class="icon">
                                    <i class="bi bi-calendar2-plus fs-2 p-3"></i>
                                </div>
                                <div class="subscription-detail">
                                    <div>
                                        <div class="fw-bold">DECEMBER 2022</div>
                                        Payment Successfull
                                    </div>
                                </div>
                              </div>
                              <div class="subscription-date">
                                    <p>17-DEC</p>
                              </div>
                            </li>
                        </ul>
                        <ul class="list-group list-subscription-wrapper">
                            <li class="list-group-item list-subscription">
                              <div class="subcsription">
                                <div class="icon">
                                    <i class="bi bi-calendar2-plus fs-2 p-3"></i>
                                </div>
                                <div class="subscription-detail">
                                    <div>
                                        <div class="fw-bold">NOVEMBER 2022</div>
                                        Payment Successfull
                                    </div>
                                </div>
                              </div>
                              <div class="subscription-date">
                                    <p>17-NOV</p>
                              </div>
                            </li>
                        </ul>
                    </div>
                </div>

                
            </div>
        </section>
    </div>

@endsection