
<?php $__env->startSection('main-content'); ?>
 <!-- ...:::: Start Checkout Section:::... -->
 <div class="checkout-section">
    <div class="container">
        <!-- Start User Details Checkout Form -->
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
                            
                            <div class="order_button pt-3">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Proceed to
                                    Razorpay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- Start User Details Checkout Form -->
    </div>
</div><!-- ...:::: End Checkout Section:::... -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mangesh Mylvahanan\Laravel\Template\resources\views/Home/checkout.blade.php ENDPATH**/ ?>