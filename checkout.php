<?php include "layout/header.php" ?>
<!-- breadcrumbs Section start -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <h1>Shop</h1>
        </div>
    </div>
</section>
<!-- breadcrumbs Section End -->
<!-- Form Section Start -->
<section class="customer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="border p-4 rounded">
                    Returning customer?
                    <a href="#">Click here</a>
                    to login
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-black">Billing Details</h3>
                <div class="border bg-white p-3">
                    <div class="form-group mb-2">
                        <label for="country-option" class="text-black">Country
                            <span class="text-danger">*</span>
                        </label>
                        <select id="country-option" class="form-control">
                            <option value="1">Select a country</option>
                            <option value="2">bangladesh</option>
                            <option value="3">Algeria</option>
                            <option value="4">Afghanistan</option>
                            <option value="5">Ghana</option>
                            <option value="6">Albania</option>
                            <option value="7">Bahrain</option>
                            <option value="8">Colombia</option>
                            <option value="9">Dominican Republic</option>
                            <option value="10">India</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6 mb-2">
                            <label for="fname" class="text-black">First Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="fname" name="first_name">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="fname" class="text-black">Last Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="lname" name="last_name">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <div class="col-lg-12">
                            <label for="cname" class="text-black">Company Name</label>
                            <input type="text" id="cname" name="companyname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <div class="col-lg-12">
                            <label for="cname" class="text-black">Address <span class="text-danger">*</span></label>
                            <input type="text" id="cname" name="companyname" class="form-control"
                                placeholder="Street Address">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <div class="col-lg-12 mt-2">
                            <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"
                                name="apartment-name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label for="sc_name" class="text-black">State/Country <span
                                    class="text-danger">*</span></label>
                            <input type="text" id="sc_name" class="form-control" name="StateName">
                        </div>
                        <div class="col-lg-6">
                            <label for="Pname" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                            <input type="text" id="Pname" class="form-control" name="Post-Name">

                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-lg-6">
                            <label for="email">Email Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="email" name="Email">
                        </div>
                        <div class="col-lg-6">
                            <label for="mobile" class="text-black"><span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="mobile" name="phone-number"
                                placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="account" class="text-black collapsed" data-bs-toggle="collapse"
                            href="#create-an-account" role="button" aria-expanded="false"
                            aria-controls="create-an-account">
                            <input type="checkbox" value="1" id="account"> Create an account?</label>
                        <div class="collapse" id="create-an-account">
                            <div class="py-2 mb-4">
                                <p class="mb-3">Create an account by entering the information below. If you are a
                                    returning customer please login at the top of the page.</p>
                                <div class="form-group">
                                    <label for="password" class="text-black">Account Password</label>
                                    <input type="email" class="form-control" id="password" name="Account-password"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <label for="c_ship_address" class="text-black" data-bs-toggle="collapse"
                            href="#ship_address" role="button" aria-expanded="false"
                            aria-controls="ship_address"><input type="checkbox" value="1"
                                id="c_ship_address"> Ship To A Different Address?</label>
                        <div class="collapse" id="ship_address">
                            <div class="py-2">

                                <div class="form-group mb-2">
                                    <label for="country-option" class="text-black">Country
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select id="country-option" class="form-control">
                                        <option value="1">Select a country</option>
                                        <option value="2">bangladesh</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">Afghanistan</option>
                                        <option value="5">Ghana</option>
                                        <option value="6">Albania</option>
                                        <option value="7">Bahrain</option>
                                        <option value="8">Colombia</option>
                                        <option value="9">Dominican Republic</option>
                                        <option value="10">India</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6 mb-2">
                                        <label for="fname" class="text-black">First Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="fname" name="first_name">
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <label for="fname" class="text-black">Last Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="lname" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <div class="col-lg-12">
                                        <label for="cname" class="text-black">Company Name</label>
                                        <input type="text" id="cname" name="companyname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <div class="col-lg-12">
                                        <label for="cname" class="text-black">Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="cname" name="companyname" class="form-control"
                                            placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <div class="col-lg-12 mt-2">
                                        <input type="text" class="form-control"
                                            placeholder="Apartment, suite, unit etc. (optional)" name="apartment-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="sc_name" class="text-black">State/Country <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="sc_name" class="form-control" name="StateName">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="Pname" class="text-black">Posta / Zip <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="Pname" class="form-control" name="Post-Name">

                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-lg-6">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="email" name="Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="mobile" class="text-black"><span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="mobile" name="phone-number"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- accordion section -->
                    <div class="form-group">
                        <label for="ordernotes" class="text-dark">Order Notes</label>
                        <textarea name="message" id="ordernotes" class="form-control" rows="5"
                            placeholder="write your notes here..." style="resize:none;"></textarea>

                    </div>
                </div>

            </div>
            <!-- left part start -->
            <div class="col-lg-6">
                <div class="row  mb-5">
                    <div class="col-lg-12 mb-2">
                        <h3 class="text-black">Coupon Code</h3>
                        <div class="p-3 bg-white border">
                            <label for="coup-code" class="text-black mb-3">Enter your coupon code if you have
                                one</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Coupon Code">
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group-append">
                                        <button class="btn btn-dark btn-lg rounded-pill px-3 pe-3" type="button"
                                            id="button-addon2">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <h3>Your order</h3>
                        <div class="p-3 bg-white border">
                            <table class="table mb-5">
                                <thead>
                                    <tr class="border-bottom-2 border-dark">
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                                        <td>$250.00</td>
                                    </tr>
                                    <tr>
                                        <td>Polo Shirt <strong class="mx-2">x</strong> 1</td>
                                        <td>$100.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black font-weight-bold">
                                            <strong>Cart Subtotal</strong>
                                        </td>
                                        <td class="text-black">$350.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black font-weight-bold">
                                            <strong>Order Total</strong>
                                        </td>

                                        <td class="text-black font-weight-bold">
                                            <strong>$350.00</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="border p-3 mb-3">
                                <h3 class="h6 mb-0"><a class="d-block collapsed text-black" data-bs-toggle="collapse"
                                        href="#collapsebank" role="button" aria-expanded="false"
                                        aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                                <div class="collapse" id="collapsebank" style="">
                                    <div class="py-2">
                                        <p class="mb-0">Make your payment directly into our bank account. Please use
                                            your Order ID as the payment reference. Your order won’t be shipped until
                                            the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border p-3 mb-3">
                                <h3 class="h6 mb-0"><a class="d-block text-black" data-bs-toggle="collapse"
                                        href="#collapsecheque" role="button" aria-expanded="false"
                                        aria-controls="collapsecheque">Cheque Payment</a></h3>

                                <div class="collapse" id="collapsecheque">
                                    <div class="py-2">
                                        <p class="mb-0">Make your payment directly into our bank account. Please use
                                            your Order ID as the payment reference. Your order won’t be shipped until
                                            the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border p-3 mb-5">
                                <h3 class="h6 mb-0"><a class="d-block text-black" data-bs-toggle="collapse"
                                        href="#collapsepaypal" role="button" aria-expanded="false"
                                        aria-controls="collapsepaypal">Paypal</a></h3>

                                <div class="collapse" id="collapsepaypal">
                                    <div class="py-2">
                                        <p class="mb-0">Make your payment directly into our bank account. Please use
                                            your Order ID as the payment reference. Your order won’t be shipped until
                                            the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <a href="thankyou.php" class="btn btn-black btn-lg py-3 btn-block"
                            >Place Order</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- left part End -->
        </div>
</section>
<!-- Form Section End -->
<?php include "layout/footer.php" ?>