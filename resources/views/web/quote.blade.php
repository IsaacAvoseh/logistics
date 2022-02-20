@extends('web.file')
@section('content')

<!--   quote section start    -->
<div class="quote-section quote-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="row">
                    <div class="col-lg-9">
                        <span class="title">Quote</span>
                        <h2 class="subtitle">Request a qoute</h2>
                    </div>
                </div>
                <form  method="POST">
                    @csrf

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                    @endif


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-element"><input name="name" type="text" placeholder="You name"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element">
                                <div class="select-wrapper">
                                    <select name="carrier">
                                        <option value="" selected>Select a Freight</option>
                                        <option value="Air Freight">Air Freight</option>
                                        <option value="Ocean Freight">Ocean Freight</option>
                                        <option value="Road Freight">Road Freight</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element"><input name="email" type="email" placeholder="Email"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element"><input name="phone" type="text" placeholder="Phone"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element"><input name="pick_address" type="text" placeholder="Pick up Address"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element"><input name="drop_address" type="text" placeholder="Drop off Address"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element"><input name="weight" type="number" placeholder="Weight KG"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element"><input name="distance" type="number" placeholder="Distance in KM"></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-element mb-0"><button type="submit" class="boxed-btn"><span>Submit</span></button></div>
                        </div>
                    </div>
                </form>
            </div>
            <!--  contact infos start  -->
            <div class="col-xl-5 offset-xl-1 col-lg-6">
                <div class="contact-infos">
                    <div class="single-info">
                        <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                        <div class="info-txt">
                            <p>143 castle road 517</p>
                            <p>district, kiyev port south Canada</p>
                        </div>
                    </div>
                    <div class="single-info">
                        <div class="icon-wrapper"><i class="fas fa-phone"></i></div>
                        <div class="info-txt">
                            <p>+3 123 456 789</p>
                            <p>+1 222 345 342</p>
                        </div>
                    </div>
                    <div class="single-info">
                        <div class="icon-wrapper"><i class="far fa-envelope"></i></div>
                        <div class="info-txt">
                            <p>info@yourmail.com</p>
                            <p>transpix@yourmail2.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--  contact infos end  -->
        </div>
    </div>
</div>
<!--   quote section end    -->


<!--  features section start  -->
<div class="features-section home-2 border">
    <div class="container">
        <div class="row feature-content">
            <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6 pr-0">
                <div class="features">
                    <span class="title">Features</span>
                    <h2 class="subtitle">WHY CHOOSE US</h2>
                    <div class="feature-lists">
                        <div class="single-feature wow fadeInUp" data-wow-duration="1s">
                            <div class="icon-wrapper"><i class="flaticon-customer-service"></i></div>
                            <div class="feature-details">
                                <h4>24/7 support</h4>
                                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat. </p>
                            </div>
                        </div>
                        <div class="single-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                            <div class="feature-details">
                                <h4>On time delivery</h4>
                                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat. </p>
                            </div>
                        </div>
                        <div class="single-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="icon-wrapper"><i class="flaticon-worldwide"></i></div>
                            <div class="feature-details">
                                <h4>global service</h4>
                                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  features section end  -->
@endsection