@extends('layout.app')
@section('content')

<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" style="background-image: url('{{ asset('frontend/assets/img/page-header.jpg') }}'); position: relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5); z-index:1;"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2 style="color: #fff;"> VISUAL COMMUNICATION THAT CONNECTS </h2>
                        <p style="color: #eee;">From photography and video to branding and campaigns, we help individuals and organizations tell stories that resonate, inspire, and elevate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start About Area Wrapper ==-->
<!-- <div class="about-area-wrapper sm-top">
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
                    <img src="{{ asset("frontend/assets/new/about-service.jpeg") }}" alt="About Collines Communications"/>
                </figure>
            </div>
        </div>
    </div>
</div> -->
<!--== End About Area Wrapper ==-->

<!--== Start Services Section ==-->
<div class="about-area-wrapper py-5" role="region" aria-labelledby="our-services">
  <div class="container">

    @if(!empty($services) && count($services) > 0)
      @foreach($services as $index => $service)
        <div class="row align-items-center mb-5 flex-lg-row{{ $index % 2 === 0 ? '' : '-reverse' }}">
          
          <!-- Text -->
          <div class="col-lg-6">
            <div class="about-content px-3">
              <h2 class="fw-bold mb-3">{{ $service->title }}</h2>
              @if(!empty($service->sub_title))
                <h5 class="text-muted mb-3 fst-italic">{{ $service->sub_title }}</h5>
              @endif
              <p class="lead">{{ $service->description }}</p>
              <div class="mt-3">
              </div>
            </div>
          </div>

          <!-- Image / Carousel -->
          <div class="col-lg-6">
            @if(!empty($service->pics))
              <div id="carousel-{{ $index }}" class="carousel slide shadow rounded-4 overflow-hidden" data-bs-ride="carousel" aria-label="Service Images">
                <div class="carousel-inner">
                  @foreach($service->pics as $key => $pic)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                      <img src="{{ asset($pic) }}" class="d-block w-100" alt="{{ $service->title }} image {{ $loop->iteration }}">
                    </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $index }}" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1) sepia(1) saturate(5) hue-rotate(10deg);"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $index }}" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1) sepia(1) saturate(5) hue-rotate(10deg);"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            @else
              <figure class="shadow rounded-4 overflow-hidden">
                <img src="{{ asset($service->pic) }}" class="img-fluid" alt="{{ $service->title }}">
              </figure>
            @endif
          </div>

        </div>
      @endforeach
    @else
      <!-- Empty State -->
      <div class="text-center py-5">
        <div class="p-5 shadow-sm rounded-4" style="background:#fff3e6;">
          <h3 class="fw-bold mb-3" style="color:#cc5200;">No Services Available</h3>
          <p class="text-muted mb-4">We’re currently updating our service offerings. Please check back soon — exciting updates are on the way!</p>
          <a href="{{ route('home') }}" 
             class="btn btn-lg shadow-sm" 
             style="background-color:#cc5200; color:#fff; border-radius:30px;">
             Back to Home
          </a>
        </div>
      </div>
    @endif

  </div>
</div>
<!--== End Services Section ==-->

<!--== Start Pricing Table Area  ==-->
<!-- <div class="pricing-plan-area sm-top">
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
</div> -->
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
                        <img src="{{ asset("frontend/assets/new/testi.jpeg") }}" alt="Businex-Testimonial"/>
                    </div>
                    <div class="testimonial-thumbnail-item">
                        <img src="{{ asset("frontend/assets/new/testi.jpeg") }}" alt="Businex-Testimonial"/>
                    </div>
                    <div class="testimonial-thumbnail-item">
                        <img src="{{ asset("frontend/assets/new/testi.jpeg") }}" alt="Businex-Testimonial"/>
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
            <div class="col-lg-6 col-xl-5 m-auto text-center">
                <div class="section-title mb-5">
                    <h6 class="text-uppercase text-dark fw-bold mb-2" style="letter-spacing:2px;">Our Work</h6>
                    <h4 class="mb-2">Different Industries. Same Quality Work</h4>
                    <div class="mx-auto mt-3" style="width:60px; height:3px; background:#cc5200;"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-logo-content slick-row-20">

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/GiveWatts-logo-Collines-Communications-Concept-client.png') }}" alt="GiveWatts Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Good-Kenyan-logo-Collines-Communications-Concept-client.png') }}" alt="Good Kenyan Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Hand-in-Hand-logo-Collines-Communications-Concept-client.png') }}" alt="Hand in Hand Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Urgent-Action-Fund-Africa-logo-Collines-Communications-Concept-Client.png') }}" alt="Urgent Action Fund Africa Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Network-for-Ecofarming-in-Africa-logo-Collines-Communications-Concept-client.png') }}" alt="Network for Ecofarming in Africa Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Crimson-Realty-logo-Collines-Communications-Concept-client.png') }}" alt="Crimson Realty Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Winnie-Rohi-Co-Advocates-logo-Collines-Communications-Concept-client.png') }}" alt="Winnie Rohi Co Advocates Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Utmost-Precision-logo-Collines-Communications-Concept-client.png') }}" alt="Utmost Precision Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/The-Master-Green-Organic-Foods-Collines-Communications-Concept-client.png') }}" alt="The Master Green Organic Foods Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Tahmo-logo-Collines-Communications-Concept-client.png') }}" alt="Tahmo Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Serv-International-logo-Collines-Communications-Concept-client.png') }}" alt="Serv International Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Samaritans-logo-Collines-Communications-Concept-client.png') }}" alt="Samaritans Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Premier-Academy-logo-Collines-Communications-Concept-client.png') }}" alt="Premier Academy Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/NAYA-logo-Collines-Communications-Concept-client.png') }}" alt="NAYA Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/MP-Shah-Hospital-logo-Collines-Communications-Concept-client.png') }}" alt="MP Shah Hospital Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Metis-logo-Collines-Communications-Concept-client.png') }}" alt="Metis Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Lactone-Investments-logo-Collines-Communications-Concept-client.png') }}" alt="Lactone Investments Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Kodera-Greenhouses-logo-Collines-Communications-Concept-client.png') }}" alt="Kodera Greenhouses Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Kotra-logo-Collines-Communications-Concept-client.png') }}" alt="Kotra Logo"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Kenya-National-Bureue-Of-Statistics-logo-Collines-Communications-Concept-client.png') }}" alt="Kenya National Bureau Of Statistics Logo"/></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Brand Logo Area Wrapper ==-->

@endsection