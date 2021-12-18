@extends('frontend.layouts.master');
@section('content')

<div class="featured-flat-area pt-115 pb-80">
                <div class="container">
                   
<div class="featured-flat">
                        <h2 class="section-title-2 text-center">Flooring</h2>
                        <div class="row">
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('puflooring')}}"><img src="{{asset('frontend/assets/images/flat/7.png')}}" alt="PU Flooring Solutions"></a>
                                        <div class="flat-link">
                                            <a href="{{route('puflooring')}}">More Details</a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('epoxyflooring')}}"><img src="{{asset('frontend/assets/images/flat/8.png')}}" alt="Epoxy Flooring Solutions"></a>
                                        <div class="flat-link">
                                            <a href="{{route('epoxyflooring')}}">More Details</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                            
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href=""><img src="{{asset('frontend/assets/images/flat/9.png')}}" alt="Polished Concrete"></a>
                                        <div class="flat-link">
                                            <a href="">More Details</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                            
                            </div>
                        </div>
                       
                        </div>
                    </div>
                </div>
            </div>

@endsection