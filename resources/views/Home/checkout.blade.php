@extends('Home.master')
@section('main-content')
 <div class="checkout-section">
    <div class="container">
        <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Full Name <span>*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            {{-- <div class="col-12">
                                <div class="default-form-box">
                                    <label for="country">City <span>*</span></label>
                                    <select class="country_option nice-select wide" name="country" id="country">
                                        <option value="2">Bangladesh</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">Afghanistan</option>
                                        <option value="5">Ghana</option>
                                        <option value="6">Albania</option>
                                        <option value="7">Bahrain</option>
                                        <option value="8">Colombia</option>
                                        <option value="9">Dominican Republic</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Street address <span>*</span></label>
                                    <input placeholder="House number and street name" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Town / City <span>*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>State / County <span>*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Phone<span>*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Email Address <span>*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="order-notes">
                                    <label for="order_note">Order Notes</label>
                                    <textarea id="order_note"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <h3>Your order</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> Handbag fringilla <strong> × 2</strong></td>
                                        <td> $165.00</td>
                                    </tr>
                                    <tr>
                                        <td> Handbag justo <strong> × 2</strong></td>
                                        <td> $50.00</td>
                                    </tr>
                                    <tr>
                                        <td> Handbag elit <strong> × 2</strong></td>
                                        <td> $50.00</td>
                                    </tr>
                                    <tr>
                                        <td> Handbag Rutrum <strong> × 1</strong></td>
                                        <td> $50.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>$215.00</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>$5.00</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>$220.00</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment_method">
                            {{-- <div class="panel-default">
                                <label class="checkbox-default" for="currencyCod" data-bs-toggle="collapse"
                                    data-bs-target="#methodCod">
                                    <input type="checkbox" id="currencyCod">
                                    <span>Cash on Delivery</span>
                                </label>

                                <div id="methodCod" class="collapse" data-parent="#methodCod">
                                    <div class="card-body1">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State
                                            / County, Store Postcode.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-default">
                                <label class="checkbox-default" for="currencyPaypal" data-bs-toggle="collapse"
                                    data-bs-target="#methodPaypal">
                                    <input type="checkbox" id="currencyPaypal">
                                    <span>Razorpay</span>
                                </label>
                                <div id="methodPaypal" class="collapse " data-parent="#methodPaypal">
                                    <div class="card-body1">
                                        <p>Pay via Razorpay; you can pay with your credit card, Debit card, Netbanking etc...</p>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="order_button pt-3">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Proceed to
                                    Razorpay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection