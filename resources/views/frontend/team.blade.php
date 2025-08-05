@extends('layout.app')
@section('content')

<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" data-bg="src="{{ asset("frontend/assets/img/page-header.jpg") }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>KNOW ABOUT BUSINEX THE ULTIMATE TEAM</h2>
                        <p>Businex always try to provide the best Business Solutions for Clinets
                            to grow up their Business very sharply and smoothly.</p>
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
                    <h6>Our Team</h6>
                    <h2>Meet Our <br> Expert Member</h2>
                    <p><strong>Businex</strong> always try to provide the best Business Solutions for Clinets to
                        grow up their Business very sharply and smoothly. We voluptatem quia
                        voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                        magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 order-0 order-md-1">
                <figure class="about-thumb">
                    <img src="{{ asset("frontend/assets/img/about.jpg") }}" alt="Businex-About"/>
                </figure>
            </div>
        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->

<!--== Start Team Area Wrapper ==-->
<div class="team-page-area-wrapper bg-offwhite sp-y sm-top">
    <div class="container">
        <div class="row mtn-30">
            <div class="col-sm-6 col-lg-3">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="{{ asset("frontend/assets/img/team/01.jpg") }}" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="team-details.html" class="stretched-link">Lucy Farnando</a></h5>
                        <span class="designation">CTO & Founder</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="{{ asset("frontend/assets/img/team/02.jpg") }}" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="team-details.html" class="stretched-link">James Anderson</a></h5>
                        <span class="designation">Creative Head</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="{{ asset("frontend/assets/img/team/03.jpg") }}" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="team-details.html" class="stretched-link">Thomas Nancy</a></h5>
                        <span class="designation">Marketing Head</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="{{ asset("frontend/assets/img/team/04.jpg") }}" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="team-details.html" class="stretched-link">Nail Mathue</a></h5>
                        <span class="designation">Head of Research</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="{{ asset("frontend/assets/img/team/05.jpg") }}" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="team-details.html" class="stretched-link">Lucy Farnando</a></h5>
                        <span class="designation">CTO & Founder</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="{{ asset("frontend/assets/img/team/06.jpg") }}" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="team-details.html" class="stretched-link">James Anderson</a></h5>
                        <span class="designation">Creative Head</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="{{ asset("frontend/assets/img/team/01.jpg") }}" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="team-details.html" class="stretched-link">Thomas Nancy</a></h5>
                        <span class="designation">Marketing Head</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="{{ asset("frontend/assets/img/team/02.jpg") }}" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="team-details.html" class="stretched-link">Nail Mathue</a></h5>
                        <span class="designation">Head of Research</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Team Area Wrapper ==-->

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