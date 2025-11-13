@extends('layout.app')
@section('content')

<!--== Start Slider Area Wrapper ==-->
<div class="slider-area-wrapper">
    <div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="business-classic"
         data-source="gallery">
        <div id="rev_slider_11_1" class="rev_slider fullwidthabanner" data-version="5.4.7">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-27" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                    data-thumb="assets/img/slider/01_thumb.jpg" data-rotate="0" data-saveperformance="off"
                    data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset("frontend/assets/new/carousel-1.jpeg") }}" alt="Businex" data-bgposition="top center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg"
                         data-no-retina>

                         <div class="tp-caption tp-shape tp-shapewrapper"
                            data-x="center" data-y="center"
                            data-hoffset="0" data-voffset="0"
                            data-width="full" data-height="full"
                            data-basealign="slide"
                            data-responsive_offset="off"
                            data-frames='[{"from":"opacity:0;","speed":500,"to":"o:0.6;","delay":0,"ease":"Power3.easeInOut"}]'
                            style="background-color:rgba(0,0,0,0.6); z-index:2;">
                        </div>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme slide-heading pop-heading" data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                         data-voffset="['250','204','200','180']" data-fontsize="['55','55','40','25']"
                         data-fontweight="['600']" data-lineheight="['65','65','50','35']" data-color="#fff"
                         data-width="['1000','1000','650','320']" data-height="none" data-whitespace="normal"
                         data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":10,"split":"lines","splitdelay":0.1,"speed":600,"split_direction":"forward","frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center']">
                         
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme slide-txt pop-heading" data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                         data-voffset="['400','370','370','310']" data-fontsize="['16','20','20','20']"
                         data-fontweight="['400','400','400','400']" data-color="#fff"
                         data-width="['600','600','600','320']" data-height="none" data-whitespace="normal"
                         data-visibility="['on','on','on','on']" data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":360,"split":"lines","splitdelay":0.1,"speed":500,"split_direction":"forward","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <!-- <div class="tp-caption Button-Outline-Secondary rev-btn pop-heading" id="slide-27-layer-11"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['top','top','top','top']" data-voffset="['490','470','490','475']" data-width="none"
                         data-height="none" data-whitespace="nowrap" data-type="button" data-letterspacing="2"
                         data-responsive_offset="on" data-responsive="off"
                         data-frames='[{"delay":650,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"350","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(8, 11, 26);"}]'
                         data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[40,40,40,30]" data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[40,40,40,30]">Explore Our Work
                    </div> -->
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-28" data-transition="slidingoverlayvertical,slidingoverlayleft,slideoverup"
                    data-slotamount="default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"
                    data-easein="default,default,default" data-easeout="default,default,default"
                    data-masterspeed="default,default,default" data-thumb="assets/img/slider/02_thumb.jpg"
                    data-rotate="0,0,0" data-saveperformance="off" data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset("frontend/assets/new/documentary-2.jpeg") }}" alt="Businex" data-bgposition="top center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg"
                         data-no-retina>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme slide-heading" data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                         data-voffset="['250','204','200','201']" data-fontsize="['55','60','50','30']"
                         data-fontweight="['600']" data-color="#eae1e1ff" data-lineheight="['65','70','60','40']"
                         data-width="['1000','650','600','320']" data-height="none" data-whitespace="normal"
                         data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":10,"split":"chars","splitdelay":0.1,"speed":1000,"split_direction":"forward","frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center']">
                         Visual Storytelling That Elevates Your Brand
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme slide-txt" data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                         data-voffset="['400','370','370','300']" data-fontsize="['16','20','20','20']"
                         data-fontweight="['400','400','400','400']" data-color="#fff"
                         data-width="['600','600','600','320']" data-height="none" data-whitespace="normal"
                         data-visibility="['on','on','on','on']" data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":360,"split":"lines","splitdelay":0.1,"speed":500,"split_direction":"forward","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                         At Collines Communications, we don’t just take pictures — we craft narratives that resonate across cultures, locally and globally.
                    <br>Seamless storytelling from intimate moments to high-impact brand campaigns.
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption Button-Outline-Secondary rev-btn"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['top','top','top','top']" data-voffset="['490','470','490','465']" data-width="none"
                         data-height="none" data-whitespace="nowrap" data-type="button" data-letterspacing="2"
                         data-responsive_offset="on" data-responsive="off"
                         data-frames='[{"delay":650,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"350","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(8, 11, 26);"}]'
                         data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[40,40,40,30]" data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[40,40,40,30]">Book a Consultation
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-29" data-transition="slidingoverlayvertical,slidingoverlayleft,slideoverup"
                    data-slotamount="default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"
                    data-easein="default,default,default" data-easeout="default,default,default"
                    data-masterspeed="default,default,default" data-thumb="assets/img/slider/02_thumb.jpg"
                    data-rotate="0,0,0" data-saveperformance="off" data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset("frontend/assets/new/carousel-2.jpeg") }}" alt="Businex" data-bgposition="top center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg"
                         data-no-retina>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme slide-heading" data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                         data-voffset="['250','204','200','201']" data-fontsize="['55','60','50','30']"
                         data-fontweight="['600']" data-color="#fff" data-lineheight="['65','70','60','40']"
                         data-width="['1000','650','600','320']" data-height="none" data-whitespace="normal"
                         data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":10,"split":"chars","splitdelay":0.1,"speed":1000,"split_direction":"forward","frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center']">
                         From Moments to Motion — We Bring Stories to Life
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme slide-txt" data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                         data-voffset="['400','370','370','300']" data-fontsize="['16','20','20','20']"
                         data-fontweight="['400','400','400','400']" data-color="#fff"
                         data-width="['600','600','600','320']" data-height="none" data-whitespace="normal"
                         data-visibility="['on','on','on','on']" data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":360,"split":"lines","splitdelay":0.1,"speed":500,"split_direction":"forward","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                         From scroll-stopping social campaigns to polished corporate profiles, we combine storytelling, aesthetic, and strategy to amplify your voice.
                    <br>Inspired by design, driven by purpose.
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption Button-Outline-Secondary rev-btn"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['top','top','top','top']" data-voffset="['490','470','490','465']" data-width="none"
                         data-height="none" data-whitespace="nowrap" data-type="button" data-letterspacing="2"
                         data-responsive_offset="on" data-responsive="off"
                         data-frames='[{"delay":650,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"350","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(8, 11, 26);"}]'
                         data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[40,40,40,30]" data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[40,40,40,30]">Book a Consultation
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
</div>
<!--== End Slider Area Wrapper ==-->

<!--== Start About Area Wrapper ==-->
<div class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-content about-content--2">
                    <h6>ABOUT US</h6>
                    <h2>We Tell Stories That Connect Brands with People</h2>
                    <span class="about-since">Since 2010</span>
                    <p><strong>Collines Communications</strong> is a visual communications studio based in Ongata Rongai, Kenya. What began as a passion for storytelling has evolved into a full-service studio blending creativity and strategy to help individuals and brands share authentic, purpose-driven narratives. We specialize in video, photography, graphics, websites, animations, and digital marketing—helping clients across East Africa and beyond reach their audiences with clarity and impact.</p>
                    <a href="{{ route('about') }}" class="btn-about">MORE DETAILS <i class="mdi mdi-chevron-double-right"></i></a>
                </div>
            </div>

            <!-- Image Carousel Section -->
            <div class="col-lg-6">
                <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded shadow">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/assets/new/service-team-1.jpeg') }}" class="d-block" alt="Collines Communications">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/new/service-team-2.jpeg') }}" class="d-block" alt="Collines Communications">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->

<!--== Start Service Area Wrapper ==-->
<div class="service-area-wrapper sm-top-wt">
    <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="{{ asset("frontend/assets/banner.jpg") }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 m-auto text-center">
                    <div class="section-title" style="color:#fff;">
                        <h6 class="fw-bold mb-3" style="color:#fff;">OUR SERVICES</h6>
                        <p style="font-size:16px;" class="mb-0">At Collines Comms, we believe every moment tells a story worth remembering. Our photography and videography services are designed to capture raw emotions, authentic experiences, and timeless memories.</p>
                        <div class="mx-auto mt-3" style="width:60px; height:3px; background:#cc5200;"></div>
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
                            <div id="carousel-{{ $service->slug }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($service->pics as $key => $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <a href="{{ route('services.details', $service->slug) }}">
                                                <img src="{{ asset($image) }}" class="d-block w-100" alt="{{ $service->title }}">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $service->slug }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $service->slug }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
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

<!--== Start Featured Area Wrapper ==-->
<div class="about-area-wrapper sm-top">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-6 col-lg-5 order-lg-1">
                <div id="featuredCarousel" class="carousel slide video-button-thumb" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="about-thumb">
                                <img src="https://img.youtube.com/vi/lCIW9HvxULY/hqdefault.jpg" class="d-block w-100" alt="Featured Story 1"/>
                                <a href="https://www.youtube.com/watch?v=lCIW9HvxULY" class="btn-play"><i class="fa fa-play"></i></a>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="about-thumb">
                                <img src="https://img.youtube.com/vi/FycwNjqYMQk/hqdefault.jpg" class="d-block w-100" alt="Featured Story 2"/>
                                <a href="https://www.youtube.com/watch?v=FycwNjqYMQk" class="btn-play"><i class="fa fa-play"></i></a>
                            </figure>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-6 col-lg-7 order-lg-0">
                <div class="about-content">
                    <h6>FEATURED</h6>
                    <h2>Stories That Inspire<br> And Connect Audiences</h2>
                    <span class="about-since">Highlights</span>
                    <p><strong>Our portfolio</strong> is a living archive of stories that matter. Each project reflects our dedication to authenticity, impact, and visual excellence.</p>
                    <a href="{{ route('about') }}" class="btn-about">EXPLORE MORE <i class="mdi mdi-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Featured Area Wrapper ==-->

<!--== Start Team Area Wrapper ==-->
<div class="team-area bg-brand">
    <div class="row g-0 align-items-center" style="background:#cc5200; color:#fff;">
        <div class="col-xl-4">
            <div class="team-area-left text-center text-md-start" style="background:#cc5200; color:#fff;">
                <div class="section-title section-title--light mb-0" style="background:#cc5200; color:#fff;">
                    <h6>Meet the Team</h6>
                    <h2>Driven by Passion, United by Purpose</h2>
                    <p><strong>Collines Communications</strong> is built on the strength of a visionary team, committed to telling stories that resonate and strategies that create real impact.</p>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="team-area-right team-area-right--2 bg-img" data-bg="{{ asset("frontend/assets/banner.jpg") }}">
                <div class="row g-0 align-items-end mtn-40">
                    @foreach($teams as $member)
                        <div class="col-sm-6 col-lg-2">
                            <div class="team-mem-item team-mem-item--2">
                                <figure class="member-pic">
                                    <img style="max-width: 200px; max-height: 409px; object-fit: cover;" src="{{ asset($member->img_src ?? '') }}" alt="{{ $member->name }}" />
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

<!--== Start Blog Area Wrapper ==-->
<!-- <div class="blog-area-wrapper sm-top">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h6>Our Blog</h6>
                    <h2 class="mb-0">Latest update <br>from our blog post</h2>
                </div>
            </div>
        </div>

        <div class="row mtn-35">
            @forelse ($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-content">
                            <h2 class="h5">
                                <a href="{{ route('blogs.show', $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h2>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->excerpt), 100) }}</p>
                            <div class="blog-meta">
                                <a href="#">By: {{ $blog->user->name ?? 'Unknown' }}</a>
                                <a href="#">{{ $blog->created_at->format('F d, Y') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>No blog posts available at this time.</p>
                </div>
            @endforelse
        </div>
    </div>
</div> -->
<!--== End Blog Area Wrapper ==-->

<!--== Start Brand Logo Area Wrapper ==-->
<div class="brand-logo-area sm-top">

<div class="brand-logo-area sm-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5 m-auto text-center">
                <div class="section-title mb-5">
                    <h3 class="text-uppercase text-dark fw-bold mb-2" style="letter-spacing:2px;"><strong>Our Work</strong></h3>
                    <h4 class="mb-2" style="white-space: nowrap;">Different Industries. Same Quality Work</h4>
                    <div class="mx-auto mt-3" style="width:100%; max-width:400px; height:3px; background:#cc5200;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-logo-content slick-row-20">
                    <!-- ...existing code... -->
                </div>
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