@extends('layouts.membership')

@section('content')
    <div id="membership">
        <section class="vertical-scrolling">
            <div class="container outer-member">
                <h2 class="title-form">Membership Renewal Form</h2>

                <div class="row">
                    
                    <div class="col-8">
                        <form class="row g-3 renew-form">
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Email</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPassword4" class="form-label">Password</label>
                              <input type="password" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-12">
                              <label for="inputAddress" class="form-label">Address</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-12">
                              <label for="inputAddress2" class="form-label">Address 2</label>
                              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="col-md-6">
                              <label for="inputCity" class="form-label">City</label>
                              <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-4">
                              <label for="inputState" class="form-label">State</label>
                              <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="col-md-2">
                              <label for="inputZip" class="form-label">Zip</label>
                              <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="col-12 submit-btn">
                              <button type="submit" class="btn btn-primary">RENEW MEMBERSHIP</button>
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