@extends('frontend.layouts.master');
@section('content')      <!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h1 class="breadcrumbs-title">Contact Us</h1>
                            <ul class="breadcrumbs-list">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- CONTACT AREA START -->
            <div class="contact-area pt-115 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <!-- get-in-toch -->
                            <div class="get-in-toch">
                                <div class="section-title mb-30">
                                    <h3>Global Business Solution</h3>
                                    
                                </div>
                                <div class="contact-desc mb-50">
                                    <p>We are here to answer all your questions about our services, how we help our customers etc. Ask us anything. We promise to get back to you within 24 hours.</p>
                                </div>
                                <ul class="contact-address">
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="assets/images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span><strong>Registered Office : </strong>198-202, Nawabpur Tower, Room no# 311 Nawabpur Road, Nawabpur, Dhaka-1100 Bangladesh.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="assets/images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span><strong>Corporate Office : </strong>House: 07, Road:11, Sector:01, Uttara Dhaka-1230 Bangladesh.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="assets/images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span><strong>Chittagong Office : </strong> Dewanhat City Corporation College, Dewanhat Overbridge, Chattogram 4000.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="assets/images/icons/phone-3.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span><strong>Phone : </strong>+88 019168 12 21 06</span>
                                            <span><strong>Phone : </strong> +88 01613 23 90 93</span>
                                            <span><strong>Whatsapp : </strong>+88 019168 12 21 06</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="assets/images/icons/world.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span><strong>E-mail : </strong>sales@globalbusinessbd.com</span>
                                            <span><strong>Web : </strong><a href="index.html" target="_blank"> https://globalbusinessbd.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <div class="">
                                <!-- blog-details-reply -->
                                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center">Contact Form</h2>
                        </div>
                    </div>
                    <form action="" method="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12" id="form_main_content">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span>
                                                    <input type="radio" id="General_Enquiry" value="General_Enquiry">
                                                    <label for="General_Enquiry">General Enquiry</label>
                                                </span>
                                            </div>
            
                                            <div class="col-md-4">
                                                <span>
                                                    <input type="radio" id="Feedback" value="Feedback">
                                                    <label for="Feedback">Feedback</label>
                                                </span>
                                            </div>

                                            <div class="col-md-4">
                                                <span>
                                                    <input type="radio" id="Others" value="Others">
                                                    <label for="Others">Others</label>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
            
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="fname">First Name*</label>
                                        <div class="input-group" style="width: 100%;">
                                            <!-- <span class="input-group-addon" id="basic-addon2"></span> -->
                                            <input type="text" class="form-control" style="width: 100%!important;" placeholder="First Name" aria-describedby="basic-addon2">
                                          </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="last_name">Last Name*</label>
                                      <div class="input-group" style="width: 100%;">
                                        <!-- <span class="input-group-addon" id="basic-addon3"></span> -->
                                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" style="width: 100%;" aria-describedby="basic-addon3">
                                      </div>
                                    </div>
                                </div>
            
                                <br>
            
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="email">Email*</label>
                                        <div class="input-group" style="width: 100%;">
                                            <!-- <span class="input-group-addon" id="location"></span> -->
                                            <input type="text" class="form-control" style="width: 100%;" placeholder="Email" aria-describedby="basic-addon2">
                                          </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="contact_no">Contact No*</label>
                                      <div class="input-group" style="width: 100%;">
                                        <!-- <span class="input-group-addon" id="state"></span> -->
                                        <input type="text" class="form-control" id="contact_no" style="width: 100%;" placeholder="Contact No" aria-describedby="basic-addon3">
                                      </div>
                                    </div>
                                </div>
            
                                <br>
            
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="country">Country*</label>
                                      <div class="input-group" style="width: 100%;">
                                        <!-- <span class="input-group-addon" id="postal_code"></span> -->
                                        <input type="text" class="form-control" id="country" style="width: 100%;" placeholder="Country" aria-describedby="basic-addon3">
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="location">City*</label>
                                        <div class="input-group" style="width: 100%;">
                                            <!-- <span class="input-group-addon" id="city"></span> -->
                                            <input type="text" class="form-control" style="width: 100%;" placeholder="City" aria-describedby="basic-addon2">
                                          </div>
                                    </div>
                                    
                                </div>
            
                                <br>
        
            
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="number_of_units_required">Message</label>
                                        <div class="input-group" style="width: 100%;">
                                            <!-- <span class="input-group-addon" id="number_of_units_required"></span> -->
                                            <textarea name="" id="" cols="20" placeholder="Message" style="width: 100%;" rows="5"></textarea>
                                          </div>
                                    </div>
                                </div>
            
                                <br>
            
                               
            
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="row" id="area_of_expertise">
            
                                            <div class="col-md-12">
                                               <button type="submit">Submit</button>
                                            </div>
            
                                        </div>
                                    </div>
            
                                </div>
            
            
                            </div>
                        </div>
                        </form>
                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTACT AREA END -->

            <!-- GOOGLE MAP AREA START -->
            <div class="google-map-area">
                <iframe src="https://www.google.com/maps/search/198-202,+Nawabpur+Tower,+Nawabpur+Road,+Nawabpur,+Dhaka-1100,+Bangladesh/@23.71884,90.410252,17z?hl=en-US" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- GOOGLE MAP AREA END -->
        </section>
        <!-- End page content -->

@endsection