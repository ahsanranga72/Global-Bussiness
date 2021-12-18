@extends('frontend.layouts.master');
@section('content')
<div class="featured-flat-area pt-115 pb-80">
                <div class="container">
                   
<div class="featured-flat">
                        <h2 class="section-title-2 text-center">Heat Proofing</h2>
                       

              
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('puflooring')}}"><img src="{{asset('frontend/assets/images/flat/32.png')}}" alt="PU Flooring Solutions"></a>
                                        <div class="flat-link">
                                            <a href="{{route('puflooring')}}">More Details</a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('epoxyflooring')}}"><img src="{{asset('frontend/assets/images/flat/33.png')}}" alt="Epoxy Flooring Solutions"></a>
                                        <div class="flat-link">
                                            <a href="{{route('epoxyflooring')}}">More Details</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                            </div>
                                </div>
                            </div>
                            </div>
@endsection