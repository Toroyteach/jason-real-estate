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
                        <h2 style="color: #fff;"> {{ $team->name ?? 'Team Member' }} </h2>
                        <p style="color: #eee;">{{ $team->title ?? 'Part of the creative force behind Collines Comms' }}</p>
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('teams') }}">Team</a></li>
                                <li><a class="current" href="#">{{ $team->name ?? 'Member Details' }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Area Wrapper ==-->
<div class="page-content-wrapper">
    <div class="member-details-wrapper sm-top">
        <div class="container">
            <div class="member-details-wrap">

            
                <div class="member-details-top">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="member-pic mb-sm-35">
                                <img src="{{ asset("frontend/assets/img/team/team-details.jpg") }}" alt="Businex-Team"/>
                            </div>
                        </div>

                        <div class="col-md-7 ms-auto">
                            <div class="member-desc">
                                <h2>{{ $team->name ?? '' }}</h2>
                                <h5>{{ $team->title ?? '' }}</h5>

                                @isset($team->message)
                                    <p>{{ $team->message }}</p>
                                @endisset

                                @isset($team->quote)
                                    <p><em>"{{ $team->quote }}"</em></p>
                                @endisset

                                @if (!empty($team->socials))
                                    <div class="member-social-icons mt-25">
                                        @foreach($team->socials as $platform => $link)
                                            @if (!empty($link))
                                                <a href="{{ $link }}" class="{{ $platform }}" target="_blank">
                                                    <i class="mdi mdi-{{ $platform }}"></i>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif

                                <div class="contact-info mt-25">
                                    @if (!empty($team->phone))
                                        <p><strong>Phone:</strong> {{ $team->phone }}</p>
                                    @endif
                                    @if (!empty($team->email))
                                        <p><strong>Email:</strong> {{ $team->email }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="member-details-middle sm-top-wt">
                    <div class="row mtn-50">
                        <div class="col-lg-6">
                            <div class="skill-experience-area mem-achieve-item">
                                <h4>Skills & Experience</h4>

                                @if (!empty($team->skills))
                                    <div class="skill-badge-list mb-3">
                                        @foreach($team->skills as $skill)
                                            <span class="badge bg-dark text-white me-1 mb-1">{{ $skill }}</span>
                                        @endforeach
                                    </div>
                                @endif

                                @if (!empty($team->experience))
                                    <p class="mt-3">{{ $team->experience }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="member-details-bottom">
                                        <div class="member-education mem-achieve-item">
                                            <h4>Education</h4>
                                            @if (!empty($team->education))
                                                <p>{{ $team->education }}</p>
                                            @endif
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--== End Page Content Area Wrapper ==-->

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