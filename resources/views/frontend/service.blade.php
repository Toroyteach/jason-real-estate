@extends('layout.app')
@section('content')

<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" data-bg="{{ asset("frontend/assets/img/page-header.jpg") }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>VISUAL COMMUNICATION THAT CONNECTS</h2>
                        <p>From photography and video to branding and campaigns, we help individuals and organizations tell stories that resonate, inspire, and elevate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start About Area Wrapper ==-->
<div class="about-area-wrapper sm-top">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-6 col-lg-7 order-1">
                <div class="about-content ms-0">
                    <h6>Our Services</h6>
                    <h2>Creative Solutions <br> Rooted in Storytelling</h2>
                    <p><strong>Collines Communications</strong> is a full-service studio blending photography, filmmaking, branding, and digital strategy to deliver purpose-driven content. We tailor every service to reflect authenticity, vision, and local context — capturing the essence of every story.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 order-0 order-md-1">
                <figure class="about-thumb">
                    <img src="{{ asset("frontend/assets/img/about.jpg") }}" alt="About Collines Communications"/>
                </figure>
            </div>
        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->

<!--== Start Service Area Wrapper ==-->
<div class="service-area-wrapper sm-top-wt">
    <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="{{ asset("frontend/assets/img/service/service-bg.jpg") }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 m-auto text-center">
                    <div class="section-title section-title--light">
                        <h6>OUR SERVICES</h6>
                        <h2 class="mb-0">We make it simple, providing best solutions</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-content-area">
        <div class="container">
            <div class="row mtn-30">
                @forelse ($services as $service)
                    <div class="col-sm-6 col-lg-4">
                        <!-- Start Service Item -->
                        <div class="service-item">
                            <figure class="service-thumb">
                                <a href="{{ route('services.details', $service->slug) }}">
                                    <img src="{{ asset("frontend/assets/img/service/01.jpg") }}" alt="{{ $service->title }}"/>
                                </a>
                                <figcaption class="service-txt">
                                    <h5>{{ $service->title }}</h5>
                                </figcaption>
                            </figure>
                            <div class="service-content">
                                <div class="service-content-inner">
                                    <h5>
                                        <a href="{{ route('services.details', $service->slug) }}" class="stretched-link">
                                            {{ $service->title }}
                                        </a>
                                    </h5>
                                    <p>{{ \Illuminate\Support\Str::limit($service->description, 100) }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">No services available at the moment. Please check back soon.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

</div>
<!--== End Service Area Wrapper ==-->

<!--== Start Pricing Table Area  ==-->
<div class="pricing-plan-area sm-top">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h6>Pricing Plan</h6>
                    <h2 class="mb-0">Our Best <br>Suitable Prices</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="pricing-plan-buttons mb-55">
                    <ul class="nav justify-content-center">
                        <li><a class="active" href="#monthly" data-bs-toggle="tab">Monthly</a></li>
                        <li><a href="#yearly" data-bs-toggle="tab">Yearly</a></li>
                    </ul>
                </div>

                <div class="pricing-plan-content-wrap">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="monthly">
                            <div class="pricing-plan-content">
                                <div class="row mtn-30">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="pricing-plan-item">
                                            <div class="pricing-plan-header">
                                                <h6 class="plan-name">Free</h6>
                                                <div class="plan-price">
                                                    <span class="dollar">$</span>
                                                    <span class="price">00</span>
                                                    <span class="price-type">/ mo</span>
                                                </div>
                                            </div>
                                            <div class="pricing-plan-body">
                                                <ul class="price-list">
                                                    <li>Branding strategy identity</li>
                                                    <li>Marketing campaign & PR</li>
                                                    <li>Website and app designing</li>
                                                    <li>Content development</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-plan-footer">
                                                <a href="#" class="btn-outline">Sign Up Today</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="pricing-plan-item">
                                            <div class="pricing-plan-header">
                                                <h6 class="plan-name">Small Business</h6>
                                                <div class="plan-price">
                                                    <span class="dollar">$</span>
                                                    <span class="price">49</span>
                                                    <span class="price-type">/ mo</span>
                                                </div>
                                            </div>
                                            <div class="pricing-plan-body">
                                                <ul class="price-list">
                                                    <li>Branding strategy identity</li>
                                                    <li>Marketing campaign & PR</li>
                                                    <li>Website and app designing</li>
                                                    <li>Content development</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-plan-footer">
                                                <a href="#" class="btn-outline">Sign Up Today</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="pricing-plan-item">
                                            <div class="pricing-plan-header">
                                                <h6 class="plan-name">Professional</h6>
                                                <div class="plan-price">
                                                    <span class="dollar">$</span>
                                                    <span class="price">99</span>
                                                    <span class="price-type">/ mo</span>
                                                </div>
                                            </div>
                                            <div class="pricing-plan-body">
                                                <ul class="price-list">
                                                    <li>Branding strategy identity</li>
                                                    <li>Marketing campaign & PR</li>
                                                    <li>Website and app designing</li>
                                                    <li>Content development</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-plan-footer">
                                                <a href="#" class="btn-outline">Sign Up Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="yearly">
                            <div class="pricing-plan-content">
                                <div class="row mtn-30">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="pricing-plan-item">
                                            <div class="pricing-plan-header">
                                                <h6 class="plan-name">Starter</h6>
                                                <div class="plan-price">
                                                    <span class="dollar">$</span>
                                                    <span class="price">77</span>
                                                    <span class="price-type">/ yer</span>
                                                </div>
                                            </div>
                                            <div class="pricing-plan-body">
                                                <ul class="price-list">
                                                    <li>Branding strategy identity</li>
                                                    <li>Marketing campaign & PR</li>
                                                    <li>Website and app designing</li>
                                                    <li>Content development</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-plan-footer">
                                                <a href="#" class="btn-outline">Sign Up Today</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="pricing-plan-item">
                                            <div class="pricing-plan-header">
                                                <h6 class="plan-name">Small Business</h6>
                                                <div class="plan-price">
                                                    <span class="dollar">$</span>
                                                    <span class="price">149</span>
                                                    <span class="price-type">/ yer</span>
                                                </div>
                                            </div>
                                            <div class="pricing-plan-body">
                                                <ul class="price-list">
                                                    <li>Branding strategy identity</li>
                                                    <li>Marketing campaign & PR</li>
                                                    <li>Website and app designing</li>
                                                    <li>Content development</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-plan-footer">
                                                <a href="#" class="btn-outline">Sign Up Today</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="pricing-plan-item">
                                            <div class="pricing-plan-header">
                                                <h6 class="plan-name">Professional</h6>
                                                <div class="plan-price">
                                                    <span class="dollar">$</span>
                                                    <span class="price">299</span>
                                                    <span class="price-type">/ yer</span>
                                                </div>
                                            </div>
                                            <div class="pricing-plan-body">
                                                <ul class="price-list">
                                                    <li>Branding strategy identity</li>
                                                    <li>Marketing campaign & PR</li>
                                                    <li>Website and app designing</li>
                                                    <li>Content development</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-plan-footer">
                                                <a href="#" class="btn-outline">Sign Up Today</a>
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
    </div>
</div>
<!--== End Pricing Table Area  ==-->

<!--== Start Testimonial Area Wrapper ==-->
<div class="testimonial-area testimonial-area--2 bg-offwhite sm-top">
    <div class="container">
        <div class="row d-lg-none">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h6>TESTIMONIALS</h6>
                    <h2>Don’t Believe us, <br> Check Client Word</h2>
                    <h5 class="tagline">More over <span class="tag-no">1900+</span> <strong>customer</strong></h5>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="testimonial-thumbnail mt-sm-5 mt-md-1">
                    <div class="testimonial-thumbnail-item">
                        <img src="{{ asset("frontend/assets/img/testimonial/h-2-t-01.png") }}" alt="Businex-Testimonial"/>
                    </div>
                    <div class="testimonial-thumbnail-item">
                        <img src="{{ asset("frontend/assets/img/testimonial/h-2-t-02.png") }}" alt="Businex-Testimonial"/>
                    </div>
                    <div class="testimonial-thumbnail-item">
                        <img src="{{ asset("frontend/assets/img/testimonial/h-2-t-03.png") }}" alt="Businex-Testimonial"/>
                    </div>
                </div>
            </div>

            <div class="col-md-7 ms-auto">
                <div class="testimonial-area-right">
                    <div class="section-title d-none d-lg-block">
                        <h6>TESTIMONIALS</h6>
                        <h2>What Our Clients Say<br>About Working With Us</h2>
                        <h5 class="tagline">Featured clients <span class="tag-no">4+</span> <strong>endorsements</strong></h5>
                    </div>

                    <div class="testimonial-content-wrap pl-0">
                        <div class="testimonial-content--2">
                            <!-- Start Testimonial Item -->
                            <div class="testimonial-item testimonial-item--2">
                                <div class="testimonial-txt">
                                    <img src="{{ asset("frontend/assets/img/icons/quote.png") }}" alt="Quote"/>
                                    <p>“Give them a concept, they will always create a good story out of it.”</p>
                                    <h5 class="client-name">Dan Joshua Oduor, <span class="designation">Founder & Director, Stawisha Africa Initiative</span></h5>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->

                            <!-- Start Testimonial Item -->
                            <div class="testimonial-item testimonial-item--2">
                                <div class="testimonial-txt">
                                    <img src="{{ asset("frontend/assets/img/icons/quote.png") }}" alt="Quote"/>
                                    <p>“The team pays attention to detail … We were satisfied by the excellent work and how they conducted themselves from inception to project completion.”</p>
                                    <h5 class="client-name">Rachel Kalera‑Mhango, <span class="designation">Communications & Media Engagement Officer, Urgent Action Fund – Africa</span></h5>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->

                            <!-- Start Testimonial Item -->
                            <div class="testimonial-item testimonial-item--2">
                                <div class="testimonial-txt">
                                    <img src="{{ asset("frontend/assets/img/icons/quote.png") }}" alt="Quote"/>
                                    <p>“They demonstrated professionalism and experience … observed timelines and are always willing to do extra to ensure they have the best outcome.”</p>
                                    <h5 class="client-name">Hillary Omondi, <span class="designation">Coordinator, Siaya Muungano Network</span></h5>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->

                            <!-- Start Testimonial Item -->
                            <div class="testimonial-item testimonial-item--2">
                                <div class="testimonial-txt">
                                    <img src="{{ asset("frontend/assets/img/icons/quote.png") }}" alt="Quote"/>
                                    <p>“They have been responsible for handling the photography and graphic design aspects of all our projects..., they have consistently been of the highest caliber.”</p>
                                    <h5 class="client-name">Joseph Odindo Lare, <span class="designation">COO, Givewatts</span></h5>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->
                        </div>

                        <div class="testimonial-arrows-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Testimonial Area Wrapper ==-->

<!--== Start Brand Logo Area Wrapper ==-->
<div class="brand-logo-area sm-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-logo-content slick-row-20">
                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset("frontend/assets/img/brand-logo/01.png") }}" alt="Businex-Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset("frontend/assets/img/brand-logo/02.png") }}" alt="Businex-Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset("frontend/assets/img/brand-logo/03.png") }}" alt="Businex-Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset("frontend/assets/img/brand-logo/04.png") }}" alt="Businex-Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset("frontend/assets/img/brand-logo/05.png") }}" alt="Businex-Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset("frontend/assets/img/brand-logo/03.png") }}" alt="Businex-Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset("frontend/assets/img/brand-logo/01.png") }}" alt="Businex-Logo"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Brand Logo Area Wrapper ==-->

<!--== Start Fun Fact Area Wrapper ==-->
<div class="fun-fact-area sm-top parallax" data-parallax-speed="0.70" data-bg="src="{{ asset("frontend/assets/img/fun-fact-bg.jpg") }}">
    <div class="container">
        <div class="row mtn-40">
            <div class="col-6 col-md-3 text-center">
                <div class="counter-item">
                    <h2 class="counter-number"><span class="counter">2654</span></h2>
                    <h6 class="counter-txt">Happy Clients</h6>
                </div>
            </div>

            <div class="col-6 col-md-3 text-center">
                <div class="counter-item">
                    <h2 class="counter-number"><span class="counter">1520</span></h2>
                    <h6 class="counter-txt">Project Done</h6>
                </div>
            </div>

            <div class="col-6 col-md-3 text-center">
                <div class="counter-item">
                    <h2 class="counter-number"><span class="counter">120</span></h2>
                    <h6 class="counter-txt">Awards Win</h6>
                </div>
            </div>


            <div class="col-6 col-md-3 text-center">
                <div class="counter-item">
                    <h2 class="counter-number"><span class="counter">3580</span></h2>
                    <h6 class="counter-txt">Cups Coffee</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Fun Fact Area Wrapper ==-->

@endsection