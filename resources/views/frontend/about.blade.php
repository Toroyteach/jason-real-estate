@extends('layout.app')
@section('content')


<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" style="background-image: url('{{ asset('frontend/assets/banner.jpg') }}'); position: relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5); z-index:1;"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2 style="color: #fff;">KNOW ABOUT BUSINEX THE ULTIMATE TEAM</h2>
                        <p style="color: #eee;">Businex always try to provide the best Business Solutions for Clients
                            to grow up their Business very sharply and smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start About Area Wrapper ==-->
<div class="home-two-about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 d-lg-none">
                <figure class="about-thumb">
                    <img src="{{ asset("frontend/assets/img/about-2.jpg") }}" alt="Collines Communications About"/>
                </figure>
            </div>

            <div class="col-lg-10">
                <div class="about-content about-content--2">
                    <h6>ABOUT US</h6>
                    <h2>Our Story</h2>
                    <span class="about-since">Since 2010</span>

                    <p>
                        Collines communications began with a simple belief that every person and brands have a story worth sharing.
                    </p>

                    <p>
                        Founded by a team of visual storytellers with backgrounds in photojournalism, commercial production, and communication strategy, Collines Communications began as a passion project to telling human stories across Kenya.
                    </p>

                    <p>
                        Over time, we evolved into a full-service visual communications studio, blending artistic direction with technical precision and purpose-driven messaging.
                    </p>

                    <p>
                        We are based in Ongata Rongai. Kenya, and our business is understanding what you do and helping guide you through telling your stories to your target clients or markets.
                    </p>

                    <p>
                        We pride ourselves on great customer service, which entails helping you with your long-term project goals through videos, photos, animations, audio, graphics, websites, digital marketing and print media.
                    </p>

                    <p>
                        With roots in creative thinking, filmmaking, photography, graphic designing, web developing, & digital marketing, we tailor each project to reflect authenticity, purpose, and local context which is basically creating visuals that resonate in east Africa and beyond.
                    </p>

                    <p>
                        We have helped different small businesses and entrepreneurs to a diverse range of large corporate clients to tell their stories to the world with the help of our dedicated team of young and creative thinkers.
                    </p>
                </div>
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

<!--== Start Feature Area Wrapper ==-->
<div class="feature-area-wrapper sm-top">
    <div class="container">
        <!-- Our Mission -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="icon-box-item text-center">
                    <div class="icon-box__icon mb-3">
                        <img src="{{ asset("frontend/assets/img/feature/01.png") }}" alt="Mission Icon" />
                    </div>
                    <div class="icon-box__info">
                        <h4>Our Mission</h4>
                        <p>
                            To empower individuals, organizations, and brands by crafting authentic, visually compelling content that captures essence, builds trust, amplifies your message and connects audiences.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Values -->
        <div class="row mtn-sm-40 mtn-md-5">
            <div class="col-md-4">
                <div class="icon-box-item text-center">
                    <div class="icon-box__icon mb-3">
                        <img src="{{ asset("frontend/assets/img/feature/02.png") }}" alt="Integrity Icon" />
                    </div>
                    <div class="icon-box__info">
                        <h5>Integrity</h5>
                        <p>Truthful storytelling with respect and ethical representation.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon-box-item text-center">
                    <div class="icon-box__icon mb-3">
                        <img src="{{ asset("frontend/assets/img/feature/03.png") }}" alt="Innovation Icon" />
                    </div>
                    <div class="icon-box__info">
                        <h5>Innovation</h5>
                        <p>Combining traditional craft with digital trends.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon-box-item text-center">
                    <div class="icon-box__icon mb-3">
                        <img src="{{ asset("frontend/assets/img/feature/03.png") }}" alt="Impact Icon" />
                    </div>
                    <div class="icon-box__info">
                        <h5>Impact</h5>
                        <p>We create visuals that change perceptions and spark action.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Feature Area Wrapper ==-->

<!--== Start Team Area Wrapper ==-->
<div class="team-area bg-brand">
    <div class="row g-0 align-items-center">
            <div class="col-xl-4">
            <div class="team-area-left text-center text-md-start">
                <div class="section-title section-title--light mb-0">
                    <h6>Meet the Team</h6>
                    <h2>Driven by Passion, United by Purpose</h2>
                    <p><strong>Collines Communications</strong> is built on the strength of a visionary team, committed to telling stories that resonate and strategies that create real impact.</p>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="team-area-right team-area-right--2 bg-img" data-bg="{{ asset("frontend/assets/img/team/team-bg-2.jpg") }}">
                <div class="row g-0 align-items-end mtn-40">
                    @foreach($teams as $member)
                        <div class="col-sm-6 col-lg-2">
                            <div class="team-mem-item team-mem-item--2">
                                <figure class="member-pic">
                                    <img src="{{ asset("frontend/assets/img/team/h-2-01.png") }}" alt="Collines Omondi"/>
                                </figure>
                                <div class="member-info">
                                    <h5><a href="{{ route('teams.details', $member->slug) }}">{{ $member->name }}</a></h5>
                                    <span class="designation">{{ $member->title }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!--== End Team Area Wrapper ==-->

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
<div class="fun-fact-area sm-top parallax" data-parallax-speed="0.70" data-bg="{{ asset("frontend/assets/img/fun-fact-bg.jpg") }}">
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