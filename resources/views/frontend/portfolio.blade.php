@extends('layout.app')
@section('content')


<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" style="background-image: url('{{ asset('frontend/assets/banner.jpg') }}'); position: relative;">
  <div style="position:absolute; inset:0; background:rgba(0,0,0,0.55); z-index:1;"></div>

  <div class="container" style="position: relative; z-index: 2;">
    <div class="row">
      <div class="col-lg-10 col-xl-8 m-auto text-center">
        <div class="page-header-content-inner">
          <div class="page-header-content">
            <h2 style="color: #fff;">OUR PORTFOLIO</h2>
            <p style="color: #eee;">
              Discover a showcase of our work — films, photography, animations, graphics, and campaigns crafted
              to help individuals, organizations, and brands share authentic stories and connect with audiences
              across East Africa and beyond.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Portfolio Area Wrapper ==-->
<section class="portfolio-area py-5">
  <div class="container">
    <!-- Section Header -->
    <div class="row mb-4">
      <div class="col text-center">
        <h2 class="fw-bold">OUR PORTFOLIO</h2>
        <p class="text-muted">
          Explore our creative showcase — videos, photos, animations, graphics, and campaigns crafted
          to connect brands with people and tell authentic stories.
        </p>
      </div>
    </div>


    @forelse ($services as $service)
    <section style="display: flex; flex-wrap: wrap; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin: 20px; font-family: Arial, sans-serif; color: #333;">

      <!-- Left Panel -->
      <div style="flex: 1 1 300px; background: #e6f1fb; padding: 20px;">
        <img src="{{ asset($service->pic) }}" alt="{{ $service->title }}" style="width: 120px; display: block; margin-bottom: 10px;">

        <h2 style="color: #0077cc; margin: 10px 0;">{{ $service->title }}</h2>

        @if($service->sub_title)
        <p><strong>{{ $service->sub_title }}</strong></p>
        @endif

        <p><strong>Description</strong><br>{!! nl2br(e($service->description)) !!}</p>
      </div>

      <!-- Right Panel -->
      <div style="flex: 2 1 500px; padding: 20px;">
        <h3 style="color: #0077cc; margin-bottom: 15px;">Images</h3>

        <div style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 10px;
        ">
          @foreach ($service->pics as $pic)
          <img src="{{ asset($pic) }}" style="width: 100%; height: 180px; object-fit: cover; border-radius: 6px;">
          @endforeach
        </div>
      </div>

    </section>
    @empty
    <p>No services found.</p>
    @endforelse





    <!-- Tabs -->
    <!-- <ul class="nav nav-pills justify-content-center mb-5" id="portfolioTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="videos-tab" data-bs-toggle="pill" data-bs-target="#videos" type="button" role="tab">
          🎬 Videos
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="images-tab" data-bs-toggle="pill" data-bs-target="#images" type="button" role="tab">
          📸 Images
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="graphics-tab" data-bs-toggle="pill" data-bs-target="#graphics" type="button" role="tab">
          🎨 Graphics
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="animations-tab" data-bs-toggle="pill" data-bs-target="#animations" type="button" role="tab">
          ✨ Animations
        </button>
      </li>
    </ul> -->

    <!-- Tab Content -->
    <!-- <div class="tab-content" id="portfolioTabsContent">

      <div class="tab-pane fade show active" id="videos" role="tabpanel">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="portfolio-item border rounded shadow-sm overflow-hidden">
              <div class="portfolio-thumb">
                <img src="{{ asset('frontend/assets/new/portfolio-1.jpeg') }}" class="img-fluid" alt="Video Project">
              </div>
              <div class="portfolio-content p-3">
                <h5>Brand Story Video</h5>
                <p>A documentary-style video capturing the journey of a Kenyan entrepreneur.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Watch Video</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-item border rounded shadow-sm overflow-hidden">
              <div class="portfolio-thumb">
                <img src="{{ asset('frontend/assets/new/portfolio-2.jpeg') }}" class="img-fluid" alt="Video Project">
              </div>
              <div class="portfolio-content p-3">
                <h5>Corporate Highlights</h5>
                <p>A clean and engaging highlights video for a corporate client event.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Watch Video</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="images" role="tabpanel">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="portfolio-item border rounded shadow-sm overflow-hidden">
              <div class="portfolio-thumb">
                <img src="{{ asset('frontend/assets/new/portfolio-3.jpeg') }}" class="img-fluid" alt="Photo Project">
              </div>
              <div class="portfolio-content p-3">
                <h5>Photo Series</h5>
                <p>A lifestyle photography series with vibrant, natural storytelling.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">View Gallery</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-item border rounded shadow-sm overflow-hidden">
              <div class="portfolio-thumb">
                <img src="{{ asset('frontend/assets/new/portfolio-4.jpeg') }}" class="img-fluid" alt="Photo Project">
              </div>
              <div class="portfolio-content p-3">
                <h5>Event Coverage</h5>
                <p>Capturing candid and memorable moments from live events and launches.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">View Gallery</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="graphics" role="tabpanel">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="portfolio-item border rounded shadow-sm overflow-hidden">
              <div class="portfolio-thumb">
                <img src="{{ asset('frontend/assets/new/portfolio-5.jpeg') }}" class="img-fluid" alt="Graphics Project">
              </div>
              <div class="portfolio-content p-3">
                <h5>Digital Ads</h5>
                <p>Creative ad designs for social media campaigns and product launches.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">See Designs</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-item border rounded shadow-sm overflow-hidden">
              <div class="portfolio-thumb">
                <img src="{{ asset('frontend/assets/new/portfolio-6.jpeg') }}" class="img-fluid" alt="Graphics Project">
              </div>
              <div class="portfolio-content p-3">
                <h5>Web Graphics</h5>
                <p>Custom graphics designed for websites and interactive campaigns.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">See Designs</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="animations" role="tabpanel">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="portfolio-item border rounded shadow-sm overflow-hidden">
              <div class="portfolio-thumb">
                <img src="{{ asset('frontend/assets/new/portfolio-7.jpeg') }}" class="img-fluid" alt="Animation Project">
              </div>
              <div class="portfolio-content p-3">
                <h5>Social Campaign Animation</h5>
                <p>Motion graphics used in a social awareness campaign with engaging transitions.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Watch Animation</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-item border rounded shadow-sm overflow-hidden">
              <div class="portfolio-thumb">
                <img src="{{ asset('frontend/assets/new/portfolio-8.jpeg') }}" class="img-fluid" alt="Animation Project">
              </div>
              <div class="portfolio-content p-3">
                <h5>Explainer Video</h5>
                <p>An animated explainer that simplifies complex services into clear visuals.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Watch Animation</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div> -->
  </div>
</section>
<!--== End Portfolio Area Wrapper ==-->

@endsection