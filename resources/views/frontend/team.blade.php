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
                        <h2 style="color: #fff;"> THE COLLINES COMMS TEAM </h2>
                        <p style="color: #eee;">We are a passionate team of creatives, strategists, and storytellers committed to bringing your vision to life through impactful media and communication.</p>
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
                    <h6>Meet the Team</h6>
                    <h2>People Behind the Vision</h2>
                    <p><strong>At Collines Comms</strong>, our team blends creativity with strategy to deliver outstanding content, design, and campaigns. Every member brings unique expertise that powers our storytelling and execution.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 order-0 order-md-1">
                <figure class="about-thumb">
                    <img src="{{ asset('frontend/assets/img/about.jpg') }}" alt="Collines Comms Team"/>
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
            @forelse ($teams as $member)
                <div class="col-sm-6 col-lg-3">
                    <div class="team-mem-item">
                        <figure class="member-pic">
                            <img src="{{ asset($member->img_src ?? 'frontend/assets/img/team/01.jpg') }}" alt="{{ $member->name }}" />
                        </figure>
                        <div class="member-info">
                            <h5>
                                <a href="{{ route('teams.details', $member->slug) }}" class="stretched-link">
                                    {{ $member->name }}
                                </a>
                            </h5>
                            <span class="designation">{{ $member->title }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">No team members found. Please check back soon.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
<!--== End Team Area Wrapper ==-->

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