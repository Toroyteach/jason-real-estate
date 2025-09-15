@extends('layout.app')
@section('content')


<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" style="background-image: url('{{ asset('frontend/assets/banner.jpg') }}'); position: relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5); z-index:1;"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">

                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start About Area Wrapper ==-->
<div class=" py-5">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Text Section -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-content about-content--2">
                    <h6 class="text-uppercase fw-bold mb-3">ABOUT US</h6>
                    <h2 class="fw-bold mb-3">Our Story</h2>
                    <span class="about-since d-inline-block mb-4 text-muted fst-italic">Since 2010</span>
                    
                    <p class="mb-3">
                        Collines Communications began with a simple belief that every person and brand has a story worth sharing. Founded by a team of visual storytellers with backgrounds in photojournalism, commercial production, and communication strategy, we started as a passion project to tell human stories across Kenya. Over time, we evolved into a full-service visual communications studio, blending artistic direction with technical precision and purpose-driven messaging.
                    </p>
                    
                    <p class="mb-3">
                        Based in Ongata Rongai, Kenya, our mission is to understand what you do and guide you in telling your story to your target clients and markets. We pride ourselves on excellent customer service, helping you with long-term project goals through videos, photos, animations, audio, graphics, websites, digital marketing, and print media.
                    </p>

                    <p class="mb-3">
                        With roots in creative thinking, filmmaking, photography, graphic design, web development, and digital marketing, we tailor each project to reflect authenticity, purpose, and local context — creating visuals that resonate in East Africa and beyond.
                    </p>

                    <p class="mb-4">
                        We have helped small businesses, entrepreneurs, and large corporate clients tell their stories to the world, powered by our dedicated team of young and creative thinkers.
                    </p>

                    <!-- Highlighted Points -->
                    <div class="row g-3">
                        <div class="col-6 col-md-4">
                            <div class="p-3 bg-light rounded-3 shadow-sm text-center h-100">
                                <h6 class="fw-bold mb-1">Creativity</h6>
                                <small class="text-muted">Rooted in storytelling</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="p-3 bg-light rounded-3 shadow-sm text-center h-100">
                                <h6 class="fw-bold mb-1">Experience</h6>
                                <small class="text-muted">Since 2010</small>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="p-3 bg-light rounded-3 shadow-sm text-center h-100">
                                <h6 class="fw-bold mb-1">Impact</h6>
                                <small class="text-muted">East Africa & beyond</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Carousel Section -->
            <div class="col-lg-6">
                <div id="storyCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded shadow">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/assets/new/service-team-1.jpeg') }}" class="d-block" alt="Our Story">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/new/service-team-2.jpeg') }}" class="d-block" alt="Our Story">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#storyCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#storyCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->

<!--== Start Feature Area Wrapper ==-->
<div class="feature-area-wrapper sm-top py-5" style="background:#f9f9f9;">
    <div class="container">
        <!-- Our Mission -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="text-center p-4 rounded shadow-sm bg-white" style="transition:0.3s; border-left:5px solid #cc5200;">
                    <div class="icon-box__icon mb-3">
                        <img src="{{ asset('frontend/assets/img/feature/01.png') }}" alt="Mission Icon" style="width:70px;"/>
                    </div>
                    <div class="icon-box__info">
                        <h3 class="fw-bold mb-3">Our Mission</h3>
                        <p class="text-muted" style="font-size:16px; line-height:1.6;">
                            To empower individuals, organizations, and brands by crafting authentic, visually compelling 
                            content that captures essence, builds trust, amplifies your message and connects audiences.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Values -->
        <div class="row g-4">
            <!-- Integrity -->
            <div class="col-md-4">
                <div class="text-center p-4 rounded shadow-sm bg-white h-100" style="transition:0.3s;">
                    <div class="icon-box__icon mb-3">
                        <img src="{{ asset('frontend/assets/img/feature/02.png') }}" alt="Integrity Icon" style="width:60px;"/>
                    </div>
                    <div class="icon-box__info">
                        <h5 class="fw-bold mb-2">Integrity</h5>
                        <p class="text-muted">Truthful storytelling with respect and ethical representation.</p>
                    </div>
                </div>
            </div>

            <!-- Innovation -->
            <div class="col-md-4">
                <div class="text-center p-4 rounded shadow-sm bg-white h-100" style="transition:0.3s;">
                    <div class="icon-box__icon mb-3">
                        <img src="{{ asset('frontend/assets/img/feature/03.png') }}" alt="Innovation Icon" style="width:60px;"/>
                    </div>
                    <div class="icon-box__info">
                        <h5 class="fw-bold mb-2">Innovation</h5>
                        <p class="text-muted">Combining traditional craft with digital trends.</p>
                    </div>
                </div>
            </div>

            <!-- Impact -->
            <div class="col-md-4">
                <div class="text-center p-4 rounded shadow-sm bg-white h-100" style="transition:0.3s;">
                    <div class="icon-box__icon mb-3">
                        <img src="{{ asset('frontend/assets/img/feature/03.png') }}" alt="Impact Icon" style="width:60px;"/>
                    </div>
                    <div class="icon-box__info">
                        <h5 class="fw-bold mb-2">Impact</h5>
                        <p class="text-muted">We create visuals that change perceptions and spark action.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Feature Area Wrapper ==-->

<!--== Start History Area Wrapper ==-->
<!-- <div class="history-area bg-offwhite sp-y">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="section-title mb-lg-0">
                    <h6>Our History</h6>
                    <h2>We have come a <br>long way </h2>
                    <p><strong>Businex</strong> always try to provide the best business Solutions for Clinets
                        to growth up their Businex very sharply and smoothly. We voluptatem
                        voluptas aspernatur auted odit fugit.</p>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="history-content-wrap pl-5">
                    <div class="row mtn-40">
                        <div class="col-md-6">
                            <div class="history-item">
                                <h6>2005</h6>
                                <h3>Businex was Founded</h3>
                                <p>Lorem ipsum dolor sit ameted, conse ctetur adipisicing elit. Magni, rem?</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="history-item">
                                <h6>2009</h6>
                                <h3>Our Early Days</h3>
                                <p>Lorem ipsum dolor sit ameted, conse ctetur adipisicing elit. Magni, rem?</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="history-item">
                                <h6>2014</h6>
                                <h3>We are leading company</h3>
                                <p>Lorem ipsum dolor sit ameted, conse ctetur adipisicing elit. Magni, rem?</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="history-item">
                                <h6>2017</h6>
                                <h3>Get the best award</h3>
                                <p>Lorem ipsum dolor sit ameted, conse ctetur adipisicing elit. Magni, rem?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--== End History Area Wrapper ==-->

<!--== Start Brand Logo Area Wrapper ==-->
<div class="brand-logo-area sm-top">
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
                        <a href="#"><img src="{{ asset('frontend/assets/brands/Crimson-Realty-logo-Collines-Communications-Concept-client.png') }}" alt="Crimson Realty Logo"/></a>
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

<!--== Start Fun Fact Area Wrapper ==-->
<!-- <div class="fun-fact-area sm-top parallax" data-parallax-speed="0.70" data-bg="{{ asset("frontend/assets/img/fun-fact-bg.jpg") }}">
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
</div> -->
<!--== End Fun Fact Area Wrapper ==-->

@endsection