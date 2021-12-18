@extends('frontend.layouts.master')
@section('content')
<div class="slider-1 pos-relative slider-overlay">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">   
                    <img src="{{asset('frontend/assets/images/slider/1.jpg')}}" alt="PU Flooring Solutions" title="#slider-direction-1"  />
                    <img src="{{asset('frontend/assets/images/slider/2.jpg')}}" alt="Epoxy Flooring Solutions" title="#slider-direction-2"  />
                    <img src="{{asset('frontend/assets/images/slider/3.jpg')}}" alt="Polished Concrete" title="#slider-direction-3"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1"> </h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h2 class="slider-1-title-2"></h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc"></p>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content text-left">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1"> </h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h2 class="slider-1-title-2"></h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc"></p>
                        </div>
                    </div>
                </div>
                <!-- direction 3 -->
                <div id="slider-direction-3" class="slider-direction">
                    <div class="slider-content text-right">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1"></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h2 class="slider-1-title-2"></h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER SECTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            
            <!-- ABOUT SHELTEK AREA START -->
            <div class="about-sheltek-area ptb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="section-title mb-30">
                                <h3>WELCOME TO</h3>
                                <h1>Global Business Solution</h1>
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
                        <div class="col-sm-6 col-xs-12">
                            <div class="about-image">
                                <img src="{{asset('frontend/assets/images/about/web-page--image02.jpg')}}" alt="Epoyx Flooring in Bangladesh" title="Epoxy Flooring in Bangladesh">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT SHELTEK AREA END -->
            <h1 class="text-center">Global Business Solution</h1>
    
    <section id="form_main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img src="{{asset('frontend/assets/images/about/web-page--image03.jpg')}}" style="width: 100%;" alt="">
                    </div>
                </div>

                <!-- dealership form -->
                <div class="col-md-6">
                    <form action="" method="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" id="form_main_content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="basic-url">Name*</label>
                                        <div class="input-group" style="width: 100%;">
                                            <!-- <span class="input-group-addon" id="basic-addon2"></span> -->
                                            <input type="text" class="form-control" style="width: 100%!important;" placeholder="Name" aria-describedby="basic-addon2">
                                          </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="company_associated_dealer-url">Phone No*</label>
                                      <div class="input-group" style="width: 100%;">
                                        <!-- <span class="input-group-addon" id="basic-addon3"></span> -->
                                        <input type="text" class="form-control" id="phone" placeholder="Phone No" style="width: 100%;" aria-describedby="basic-addon3">
                                      </div>
                                    </div>
                                </div>
            
                                <br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="servicearea-url">Service Area*</label>
                                      <div class="input-group" style="width: 100%;">
                                        <!-- <span class="input-group-addon" id="basic-addon3"></span> -->
                                        <input type="text" class="form-control" id="servicearea" placeholder="Your Service Area" style="width: 100%;" aria-describedby="basic-addon3">
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="area_of_expertise">Area of Expertise*</label>
                                        <div class="row" id="area_of_expertise">
                                            <div class="col-md-12">
                                                <span>
                                                    <input type="checkbox" id="area_of_expertise" value="tiling">
                                                    <label for="area_of_expertise">&nbsp; I have a Construction related Shop</label>
                                                </span>
                                            </div>
            
                                            <div class="col-md-12">
                                                <span>
                                                    <input type="checkbox" id="waterproofing" value="waterproofing">
                                                    <label for="waterproofing">&nbsp; I am a Construction Engineer</label>
                                                </span>
                                            </div>
            
                                            <div class="col-md-12">
                                                <span>
                                                    <input type="checkbox" id="flooring" value="flooring">
                                                    <label for="flooring">&nbsp; I am a construction contractor</label>
                                                </span>
                                            </div>
            
                                            <div class="col-md-12">
                                                <span>
                                                    <input type="checkbox" id="painting" value="painting">
                                                    <label for="painting">&nbsp; Other</label>
                                                </span>
                                            </div>
            
                                        </div>
                                    </div>
            
                                </div>
            
                                <br>
            
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="row" id="area_of_expertise">
            
                                            <div class="col-md-12">
                                               <button type="submit" style="border: none; background-color: #1E1E1E; color: white;padding: 5px; padding-left: 5px; padding-right: 5px;border-radius: 5px;">Apply For Dealership</button>
                                            </div>
            
                                        </div>
                                    </div>
            
                                </div>
            
            
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </section>

            <!-- WHY CHOOSE US AREA START -->
            <div class="services-area pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-2 text-center">
                                <h2>WHY CHOOSE US</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="service-carousel">
                            <!-- service-item -->
                            <div class="col-md-12">
                                <div class="service-item">
                                    <div class="service-item-image">
                                        <a href="#"><i class="fa fa-handshake-o"></i></a>
                                    </div>
                                    <div class="service-item-info">
                                        <h5><a href="#">COMMITMENT</a></h5>
                                        <p>We are looking for customer satisfaction because we need to provide a high standard of service to our client's.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- service-item -->
                            <div class="col-md-12">
                                <div class="service-item">
                                    <div class="service-item-image">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                    <div class="service-item-info">
                                        <h5><a href="#">BEST QUALITY</a></h5>
                                        <p>Quality has always been our prime importance & we have strictly stuck to stern quality norms in the products.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- service-item -->
                            <div class="col-md-12">
                                <div class="service-item">
                                    <div class="service-item-image">
                                        <a href="#"><i class="fa fa-cogs"></i></a>
                                    </div>
                                    <div class="service-item-info">
                                        <h5><a href="#">SERVICE</a></h5>
                                        <p>Service is important to you, so it is important to us. Our business success depends on the best service.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- service-item -->
                            <div class="col-md-12">
                                <div class="service-item">
                                    <div class="service-item-image">
                                        <a href="#"><i class="fa fa-life-ring"></i></a>
                                    </div>
                                    <div class="service-item-info">
                                        <h5><a href="#">VISION</a></h5>
                                        <P>We give primary importance to the principle of adding value to the client by high-quality, responsive & qualified pre-end sales services.</P>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WHY CHOOSE US AREA END -->
            
            <!-- SERVICES AREA START -->
            <div class="featured-flat-area pt-115 pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-2 text-center">
                                <h2>OUR SERVICES</h2>
                            </div>
                        </div>
                    </div>
                    <div class="featured-flat">
                        <div class="row">
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('flooring')}}"><img src="{{asset('frontend/assets/images/flat/1.png')}}" alt="Polished Concrete in Bangladesh" titls="Polished Concrete in Bangladesh"></a>
                                        <div class="flat-link">
                                            <a href="{{route('flooring')}}" title="Polished Concrete in Bangladesh" titls="Polished Concrete in Bangladesh">More Details</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('concretewaterprofing')}}"><img src="{{asset('frontend/assets/images/flat/2.png')}}" alt="PU PU Flooring in Bangladesh" title="PU Flooring in Bangladesh"></a>
                                        <div class="flat-link">
                                            <a href="{{route('concretewaterprofing')}}"  title="PU Flooring in Bangladesh">More Details</a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('PAINTCOATING')}}"><img src="{{asset('frontend/assets/images/flat/3.png')}}" alt="Epoxy Flooring in Bangladesh" Title="Epoxy Flooring in Bangladesh"></a>
                                        <div class="flat-link">
                                            <a href="{{route('PAINTCOATING')}}" alt="Epoxy Flooring in Bangladesh" Title="Epoxy Flooring in Bangladesh">More Details</a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 hidden-sm col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('repearing')}}"><img src="{{asset('frontend/assets/images/flat/4.png')}}" alt="Fair Face Plaster in Bangladesh" title="Fair Face Plaster in Bangladesh"></a>
                                        <div class="flat-link">
                                            <a href="{{route('repearing')}}"  title="Fair Face Plaster in Bangladesh">More Details</a>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 hidden-sm col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('hetprofing')}}"><img src="{{asset('frontend/assets/images/flat/31.png')}}" alt="Waterproofing in Bangladesh" Title="Waterproofing in Bangladesh"></a>
                                        <div class="flat-link">
                                            <a href="{{route('hetprofing')}}" Title="Waterproofing in Bangladesh">More Details</a>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 hidden-sm col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('constructionchemicals')}}"><img src="{{asset('frontend/assets/images/flat/6.png')}}" alt="Construction Chemicals in Bangladesh" title="Construction Chemicals in Bangladesh"></a>
                                        <div class="flat-link">
                                            <a href="{{route('constructionchemicals')}}" title="Construction Chemicals in Bangladesh">More Details</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- SERVICES AREA END -->
            
            <!-- BOOKING AREA START -->
            <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="section-title text-white">
                                <h3>SOME</h3>
                                <h2 class="h1">FUN FACTOR</h2>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <div class="booking-conternt  clearfix">
                                <div class="counter-content">
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span class="counter">170</span> 
                                        </h2>
                                        <p>Complete Projects</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                                            <span class="counter">105</span> 
                                        </h2>
                                        <p>Clients in List</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                            <span class="counter">05</span> 
                                        </h2>
                                        <p>Years of Experience</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span class="counter">99.9</span>%
                                        </h2>
                                        <p>On Time Delivery</p>
                                    </div>
                                </div>
                                <div class="booking-imgae">
                                    <img src="{{asset('frontend/assets/images/others/booking.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- BRAND AREA START -->
            <div class="brand-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-2 text-center">
                                <h2>Our Honorable Clients</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="brand">
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/1.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/2.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/3.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/4.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/5.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/6.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/7.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/8.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/9.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/10.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/11.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-2">
                                <div class="brand-item">
                                    <img src="{{asset('frontend/assets/images/brand/12.png')}}" alt="Global Business Solution">
                                </div>
                            </div>
                          
                          
                         
                        </div>
                    </div>
                </div>
            </div>
            <!-- BRAND AREA END -->
@endsection