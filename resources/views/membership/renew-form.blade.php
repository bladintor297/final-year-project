@extends('layouts.membership')

@section('content')
    <div id="membership">
        <section class="vertical-scrolling">
            <div class="container outer-member">
                <h2 class="title-form">Membership Renewal Form</h2>

                <div class="row">
                    
                    <div class="col-8">
                        <form class="row g-3 renew-form">
                            <div class="col-md-8">
                              <label for="name" class="form-label">Full Name</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="e.g., Muhammad Aqid bin Syahiran">
                            </div>
                            <div class="col-md-4">
                              <label for="nric" class="form-label">IC Number (Without '-')</label>
                              <input type="text" name="nric" class="form-control" id="nric" placeholder="e.g. 000729120001">
                            </div>
                            <div class="col-4">
                              <label for="uid" class="form-label">Member ID</label>
                              <input type="text" class="form-control" name="uid" id="uid" value="QZ8501" disabled>
                            </div>
                            <div class="col-5">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="e.g, qid@gmail.com">
                            </div>
                            <div class="col-3">
                              <label for="phone" class="form-label">Phone Number</label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="e.g, 0187673720">
                            </div>

                            <div class="hr"></div>
                            <div class="hr"></div>

                            <div class="col-md-4">
                              <label for="period" class="form-label">Subscription Period</label>
                              <select id="period" name="period" class="form-select">
                                <option selected>Choose...</option>
                                <option value="1"> 1-month</option>
                                <option value="3"> 3-months</option>
                                <option value="6"> 6-months</option>
                                <option value="12"> 12-months</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <label for="payment" class="form-label">Payment Method</label>
                              <select id="payment" name="payment" class="form-select">
                                <option selected>Choose...</option>
                                <option value="1"> Cash</option>
                                <option value="2"> Online (FPX) </option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <label for="payment" class="form-label">Start Date</label>
                              <input type="date" name="start_date" id="start_date" class="form-control">
                            </div>
                            <div class="col-12 submit-btn mt-5">
                              <button type="submit" class="btn btn-primary">RENEW MY MEMBERSHIP</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-4 image-box">
                        <img src="{{ URL::asset('assets/img/register.png'); }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection