@extends('frontend.layouts.master');
@section('content')
<div class="featured-flat-area pt-115 pb-80">
                <div class="container">
                   
<div class="featured-flat">
                        <h2 class="section-title-2 text-center">PAINT & COATING</h2>
                       

              
                            <!-- flat-item -->
                            <div class="col-md-4 hidden-sm col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('fairfaceplaster')}}"><img src="{{asset('frontend/assets/images/flat/20.png')}}" alt="Fair Face Plaster"></a>
                                        <div class="flat-link">
                                            <a href="{{route('fairfaceplaster')}}">More Details</a>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 hidden-sm col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="{{route('waterproofing')}}"><img src="{{asset('frontend/assets/images/flat/21.png')}}" alt="Waterproofing Solutions"></a>
                                        <div class="flat-link">
                                            <a href="{{route('waterproofing')}}">More Details</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 hidden-sm col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href=""><img src="{{asset('frontend/assets/images/flat/22.png')}}" alt="Damp Proofing Solutions"></a>
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
@endsection