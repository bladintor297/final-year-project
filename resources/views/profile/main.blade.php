@extends('layouts.profile')

@section('content')
    <div id="profile">
        <section class="vertical-scrolling">
            <div class="container outer-profile ">
                {{-- <h2 class="title-form">Membership Renewal Form</h2> --}}
                    <div class="image-box" >
                        <div class="avatar-box">
                            <div class="header">IDHAM ANUR</div>
                                <img src="https://www.w3schools.com/howto/img_avatar.png" alt="">
                            <div class="footer fst-italic">QZ 8371</div>
                        </div>
                    </div>
                    <div class="detail-box">
                        <form class="row g-3 profile-form">
                            <div class="col-md-8">
                              <label for="name" class="form-label">Full Name</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="e.g., Muhammad Aqid bin Syahiran">
                            </div>
                            <div class="col-md-4">
                              <label for="nric" class="form-label">IC Number (Without '-')</label>
                              <input type="text" name="nric" class="form-control" id="nric" placeholder="e.g. 000729120001">
                            </div>
                            <div class="col-5">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="e.g, qid@gmail.com">
                            </div>
                            <div class="col-3">
                              <label for="phone" class="form-label">Phone Number</label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="e.g, 0187673720">
                            </div>
                            <div class="col-4">
                              <label for="password" class="form-label">Password</label>
                              <div class="input-group">
                                <input type="text" class="form-control" name="password" id="password" value="-ENCRYPTED-" aria-describedby="change-password" disabled>
                                <button class="btn btn-outline-warning" type="button" id="change-password"><i class="bi bi-unlock-fill border-none"></i></button>
                              </div>
                            </div>
                            <div class="col-12">
                              <label for="inputAddress2" class="form-label">Address </label>
                              <input type="text" class="form-control" id="Address" placeholder="No.15, Jalan Pengkalan 5, Kampung Pasir Putih">
                            </div>
                            <div class="col-md-5">
                              <label for="city" class="form-label">City</label>
                              <input type="text" class="form-control" name="city" id="city">
                            </div>
                            <div class="col-md-4">
                              <label for="inputState" class="form-label">State</label>
                              <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <label for="zip" class="form-label">Zip Code</label>
                              <input type="text" class="form-control" id="zip" name="zip" placeholder="e.g. 81700">
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-3">
                              <button type="submit" class="btn update-btn ">Update</button>
                            </div>
                          </form>
                        {{-- <img src="{{ URL::asset('assets/img/register.png'); }}" alt=""> --}}
                    </div>
            </div>
        </section>
    </div>
@endsection