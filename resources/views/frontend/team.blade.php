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
                        <h2 style="color: #fff;"> Meet Our Team </h2>
                        <p style="color: #eee;">A passionate group of professionals driving creativity, strategy, and impact.</p>
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
</div> -->
<!--== End About Area Wrapper ==-->

<section class="" style="background:#fdfbf9;">
  <div class="container">

    <div class="row gy-5">
      @foreach($teams as $index => $team)
        <div class="col-12">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="row g-0 flex-column flex-md-row {{ $index % 2 ? 'flex-md-row-reverse' : '' }}">
              
              <!-- Image -->
              <div class="col-md-4">
                <img src="{{ asset($team->img_src) }}"
                     alt="{{ $team->name }}"
                     class="img-fluid h-100 w-100 object-fit-cover">
              </div>

              <!-- Content -->
              <div class="col-md-8">
                <div class="card-body p-4 d-flex flex-column h-100">
                  <h4 class="fw-bold mb-1" style="color:#cc5200;">{{ $team->name }}</h4>
                  <p class="text-muted mb-2">{{ $team->title }}</p>
                  <p class="small mb-3">{{ $team->message }}</p>
                  
                  <!-- Quote -->
                  @if(!empty($team->quote))
                  <blockquote class="blockquote border-start ps-3 mb-3" style="border-color:#cc5200;">
                    <p class="mb-0 fst-italic">“{{ $team->quote }}”</p>
                  </blockquote>
                  @endif

                  <!-- Skills -->
                  @if(!empty($team->skills))
                  <div class="mb-3">
                    @foreach($team->skills as $skill)
                      <span class="badge rounded-pill px-3 py-2 me-1 mb-1 text-light" style="background:#cc5200;">
                        {{ $skill }}
                      </span>
                    @endforeach
                  </div>
                  @endif

                  <!-- Contact -->
                  <div class="mt-auto">
                    @if(!empty($team->phone))
                      <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-telephone me-2" style="color:#cc5200;"></i>
                        <small>{{ $team->phone }}</small>
                      </div>
                    @endif
                    @if(!empty($team->email))
                      <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-envelope me-2" style="color:#cc5200;"></i>
                        <small>{{ $team->email }}</small>
                      </div>
                    @endif

                    <!-- Socials -->
                    <div>
                      @if(!empty($team->socials->instagram))
                        <a href="{{ $team->socials->instagram }}" target="_blank" class="me-2 text-decoration-none">
                          <i class="bi bi-instagram fs-5" style="color:#cc5200;"></i>
                        </a>
                      @endif
                      @if(!empty($team->socials->twitter))
                        <a href="{{ $team->socials->twitter }}" target="_blank" class="me-2 text-decoration-none">
                          <i class="bi bi-twitter fs-5" style="color:#cc5200;"></i>
                        </a>
                      @endif
                      @if(!empty($team->socials->linkedin))
                        <a href="{{ $team->socials->linkedin }}" target="_blank" class="text-decoration-none">
                          <i class="bi bi-linkedin fs-5" style="color:#cc5200;"></i>
                        </a>
                      @endif
                    </div>

                    <div>
                        <a href="{{ route('teams.details', $team->slug) }}" 
                        class="btn text-light fw-semibold px-4 py-2 rounded-pill shadow-sm"
                        style="background:#cc5200; transition: all 0.3s ease;">
                        View Profile
                        </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!--== Start Fun Fact Area Wrapper ==-->
<!-- <div class="fun-fact-area sm-top parallax" data-parallax-speed="0.70" data-bg="src="{{ asset("frontend/assets/img/fun-fact-bg.jpg") }}">
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