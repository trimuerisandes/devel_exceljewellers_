<hr>

<div>
    <p class="text-center mt-5" style="margin-bottom: 0px;">NEWSLETTER</p>
    <div class="text-center mb-5"><img src="{{ asset('storage/image/icons/home_line.png') }}"></div>
    <p class="text-center mb-2">We promise only send the good things</p>
    <div class="text-center">
        <form class="d-inline-flex">
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control form-control-sm" placeholder="Your Email">
                </div>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" placeholder="Your Full Name">
                </div>
                <div class="collectEmailFormGroup collectEmailFormActions mb-5">
                    <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer-container mt-5 mb-5">
    <div class="footer-inner mr-5">
        <div class="footer-open mr-5">
            <div class="d-flex bd-highlight">
                <div class="middle-bar mr-3"><img src="{{ asset('storage/image/page_img/excel_logo.png') }}"></div>
            </div>
        </div>
    </div>
    <div class="footer-inner mr-5">
        <div class="footer-title mr-5"><b>SHOPPING OUR SITE</b><span class="foot-icon icon-chevron-down"></span></div>
        <div class="footer-open">
            <div><a href="{{url('/contact')}}">Contact Us</a></div>
            <div><a href="{{url('/warranty')}}">Warranty</a></div>
            <div><a href="{{url('/shipping-returns')}}">Shipping & Returns</a></div>
            <div><a href="{{url('/insurrance')}}">Insurrance</a></div>
            <div><a href="{{url('/location')}}">Location</a></div>
            <div><a href="{{url('/about')}}">Company Info</a></div>
        </div>
    </div>
    <hr class="phone-hr">
    <div class="footer-inner ml-5 mr-5">
        <div class="footer-title"><b>SAFE & SECURE SHOPPING</b><span class="foot-icon icon-chevron-down"></span></div>
        <div class="footer-open">
            <div><a href="{{url('/terms-condition')}}">Terms & Condition</a></div>
            <div><a href="{{url('/privacy-policy')}}">Privacy Policy</a></div>
        </div>
    </div>
    <hr class="phone-hr">
<!--    <div class="footer-inner">
&lt;!&ndash;        <div class="footer-title"><b>GET OUR NEWSLETTER</b><span class="foot-icon icon-chevron-down"></span></div>
        <div class="footer-open">
            <form id="newsletter-form"
                  action="https://www.snapretail.com/retailer/ConsumerSignupForm.aspx/Save?DataCollectionType=EmbeddedWebForm"
                  method="post" target="_blank"><input id="Token" name="Token" type="hidden"
                                                       value="iOPgyySGcFGjb4nqD0MKeg"/>

                <input id="RedirectUrl" name="RedirectUrl" type="hidden" value=""/>

                <div class="collectEmailFormGroup">
                    <div class="label-error-group">
                        <span class="field-validation-valid validation-message" data-valmsg-for="EmailAddress"
                              data-valmsg-replace="true"></span>
                    </div>
                    <input data-val="true" data-val-required="Required" id="EmailAddress" maxlength="255"
                           name="EmailAddress" placeholder="Your Email" type="email" value=""/>
                </div>


                <div class="collectEmailFormGroup">
                    <div class="label-error-group">
                        <span class="field-validation-valid validation-message" data-valmsg-for="FirstName"
                              data-valmsg-replace="true"></span>
                    </div>
                    <input id="FirstName" maxlength="255" name="FirstName" placeholder="Your Full Name" type="text"
                           value=""/>
                </div>

                <div class="collectEmailFormGroup collectEmailFormActions">
                    <button type="submit" class="newsletter-btn">Submit</button>
                </div>

            </form>
        </div>&ndash;&gt;

    </div>-->
    <div class="footer-inner ml-5">
        <div class="footer-open">
            <hr class="phone-hr">
            <b>FOLLOW US</b>
            <div class="social-media-container">
                <a href="https://www.facebook.com/ExcelJewellersCanada">
                    <div class="icon-facebook"></div>
                </a>
                <a href="https://www.instagram.com/excel_jewellers/">
                    <div class="icon-instagram"></div>
                </a>
                <a href="https://www.pinterest.ca/exceljewellers/">
                    <div class="icon-pinterest2"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="trademark d-flex bd-highlight">
    <div class="p-2 flex-grow-1 bd-highlight">&copy <?php echo date("Y"); ?> Excel Jewellers - All Rights Reserved</div>
    <div class="payment-container ml-3">
        <div class="payment-icon ml-3"><img alt="Visa Icon Card Excel Jewellers"
                                            src="{{ asset('storage/image/icons/visa.png') }}"></div>
        <div class="payment-icon ml-3"><img alt="Mastercard Icon Card Excel Jewellers"
                                            src="{{ asset('storage/image/icons/mastercard.png') }}"></div>
        <div class="payment-icon ml-3"><img alt="Paypal Icon Card Excel Jewellers"
                                            src="{{ asset('storage/image/icons/paypal.png') }}"></div>
        <div class="payment-icon ml-3"><img alt="American Eagle Icon Card Excel Jewellers"
                                            src="{{ asset('storage/image/icons/ae.png') }}"></div>
    </div>
</div>
