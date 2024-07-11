@extends('layouts.main')

@section('container')
<!-- header-end -->

<!-- bradcam_area -->
<div class="bradcam_area">
    <div class="single_bradcam  d-flex align-items-center bradcam_bg_1 overlay">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <img src="img/shape/shape_1.svg" alt="">
                        </div>
                        <div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                            <img src="img/shape/shape_2.svg" alt="">
                        </div>
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">About</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area end -->

<!-- about_area_start  -->
<div class="about_area black_bg extra_padd">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title text-center mb-80">
                    <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">About Program</h3>
                    <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">The event regularly attracts
                        a diverse range of attendees from around the world, across different professions, and with
                        different.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="about_thumb">
                    <div class="shap_3  wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                        <img src="img/shape/shape_3.svg" alt="">
                    </div>
                    <div class="thumb_inner  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="img/about/about.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="about_info pl-68">
                    <h4 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">It’s time to book your seat
                    </h4>
                    <p class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">The event regularly attracts
                        a diverse range of attendees from around the world, across different professions, and with
                        different levels of experience transform your business.</p>
                    <a href="#" class="boxed-btn3  wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".7s">Buy
                        Tickets</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end  -->

<!-- performar_area_start  -->
<div class="performar_area black_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-80">
                    <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Performer</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div data-tilt class="thumb">
                                <img src="img/performer/1.png" alt="">
                            </div>
                            <div class="performer_heading">
                                <h4>Mr. Zosoldos</h4>
                                <span>Acoustic drum</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div data-tilt class="thumb">
                                <img src="img/performer/2.png" alt="">
                            </div>
                            <div class="performer_heading">
                                <h4>Protik Hasan</h4>
                                <span>Acoustic drum</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div data-tilt class="thumb">
                                <img src="img/performer/3.png" alt="">
                            </div>
                            <div class="performer_heading">
                                <h4>Salmon Vicky</h4>
                                <span>Acoustic drum</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <div data-tilt class="thumb">
                                <img src="img/performer/4.png" alt="">
                            </div>
                            <div class="performer_heading">
                                <h4>Filaris Habol</h4>
                                <span>Acoustic drum</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- performar_area_end  -->
@endsection