@extends('Home.master')
@section('main-content')
<div class="customer-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                    <h3>Seller Register</h3>
                    <form action="#" class="justify-content center">
                        <div class="default-form-box">
                            <label>Seller Name <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="default-form-box">
                            <label>Seller Address <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="default-form-box">
                            <label>Email address <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="default-form-box">
                            <label>Password <span>*</span></label>
                            <input type="password">
                        </div>
                        <div class="login_submit">
                            <button class="btn btn-md btn-black-default-hover" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection