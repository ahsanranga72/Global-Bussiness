@extends('frontend.layouts.master');
@section('content')
    <!-- BREADCRUMBS AREA START -->
	<div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h1 class="breadcrumbs-title">About Us</h1>
                            <ul class="breadcrumbs-list">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            
            <!-- ABOUT SHELTEK AREA START -->
            <div class="about-sheltek-area ptb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-push-6 col-xs-12">
                            <div class="section-title mb-30"> 
                            <h4> Global Business Solution</h4>
                            </div>
                            <div class="about-sheltek-info">
                                <p class="text-justify">
                                <b>Our mission</b> is to supply quality building chemicals, developed to meet latest European Union standards to our valuable Bangladeshi Clients. Our commitment to Bangladesh construction Industry is to identify and bring most tested and proven waterproofing and Insulation products. 
                                </p>

                                <p class="text-justify">
                                <b>Our vision</b> is to become a prominent building chemical company in Bangladesh through continuous efforts to understand local requirements and to share our International experience.                                 </p>

                                <p class="text-justify">
                                We supply bulk quantity of waterproofing product to Government Origination - Rajuk, PWD, LGED, NHA Including mega project- Rampal power plant, Matarbari power plant, Paira Deep sea, Padma Rail way, all project approved our imported product, 
At the core of our values is: 
We value open and honest communication both internally, with our employees, externally, with clients and partners. 
We are a strong company because of our collective knowledge of the industry requirements. 
International experience gives us a foundation for discernment and the ability to carefully select products, application methods to suit client’s expectations. 
We strongly believe the input from employees and end users plays vital role to upgrade product ranges. 
By sustaining the Vision and supporting the Mission, GBS will achieve prominence as an most reliable company in building chemical industry in Bangladesh. 
GBS will hold stock of Imported Bituminous Membrane, Acrylic, PU coatings, cementations waterproofing, PU & epoxy grouting - manufactured from KSA, KOREA, GREECE . To start with, we are holding enough stock of following most established and time tested all Products in Bangladesh.
                                </p>
                                  
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-pull-6 col-xs-12">
                            <div class="about-image">
                                <img src="{{asset('frontend/assets/images/about/web-page--image-01.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT SHELTEK AREA END -->
            <!-- SERVICES AREA END -->
        </section>

         
            <!-- SUBSCRIBE AREA END -->

            <!-- PRODICTS BRAND AREA START -->
            <div class="blog-area pb-60  pt-75">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-2 text-center">
                                <h4>We import and purchase products from this country....</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog-">
                            <!-- blog-item -->
                            <div class="col-md-2 col-md-offset-2">
                                <article class="blog-item bg-gray">
                                    <div class="blog-image">
                                        <img src="{{asset('frontend/assets/images/products/Malaysia.jpg')}}" alt="Global Business Solution">
                                    </div>
                                    <div class="blog-info">
                                        <div class="post-title-time">
                                            <h5>Malaysia</h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- blog-item -->
                            <div class="col-md-2">
                                <article class="blog-item bg-gray">
                                    <div class="blog-image">
                                        <img src="{{asset('frontend/assets/images/products/Thailand.jpg')}}" alt="Global Business Solution">
                                    </div>
                                    <div class="blog-info">
                                        <div class="post-title-time">
                                            <h5>Thailand</h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- blog-item -->
                            <div class="col-md-2">
                                <article class="blog-item bg-gray">
                                    <div class="blog-image">
                                        <img src="{{asset('frontend/assets/images/products/china.jpg')}}" alt="Global Business Solution">
                                    </div>
                                    <div class="blog-info">
                                        <div class="post-title-time">
                                            <h5>China</h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- blog-item -->
                            <div class="col-md-2">
                                <article class="blog-item bg-gray">
                                    <div class="blog-image">
                                        <img src="{{asset('frontend/assets/images/products/India.jpg')}}" alt="Global Business Solution">
                                    </div>
                                    <div class="blog-info">
                                        <div class="post-title-time">
                                            <h5>India</h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('frontend/assets/images/DistributorApplicator/DistributorApplicator.png')}}"" alt="Global Business Solution">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BLOG AREA END -->
        </section>
        <!-- End page content -->
@endsection