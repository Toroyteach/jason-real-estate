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
                        <h2 style="color: #fff;"> OUR SERVICES </h2>
                        <p style="color: #eee;">At Collines Communications, we craft authentic, visually compelling content — from photography and film to branding and digital campaigns — tailored to resonate with your audience.</p>
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a class="current" href="#">Service Details</a></li>
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
    <div class="service-details-wrapper sm-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-content">
                        <figure class="service-details-thumb">
                            @if (!empty($service->pics))
                                @foreach ($service->pics as $pic)
                                    <img src="{{ asset($pic) }}" alt="{{ $service->title }}"/>
                                @endforeach
                            @endif
                        </figure>
                        <div class="service-details-info">
                            <h3>{{ $service->title }}</h3>

                            @if (!empty($service->sub_title))
                                <p class="text-muted">{{ $service->sub_title }}</p>
                            @endif

                            <div class="about-service mt-sm-35">
                                <p>{{ $service->description }}</p>

                                @if (!empty($service->items))
                                    <ul class="service-feature">
                                        @foreach ($service->items as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>

                            <!-- <div class="pagination-wrap">
                                <ul class="pagination">
                                    <li class="prev"><a href="#"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
                                    <li class="next"><a href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mtn-40">
                    <div class="sidebar-wrap mt-sm-90 mt-md-100">
                        <!-- Start Sidebar Item -->
                        <!-- <div class="sidebar-single">
                            <h3 class="sidebar-heading">Services</h3>
                            <div class="sidebar-body">
                                <ul class="service-list">
                                    <li><a href="service-details.html">Creative Ideas</a></li>
                                    <li><a href="service-details.html">Digital Solutions</a></li>
                                    <li><a href="service-details.html">Brand & Communication</a></li>
                                    <li><a href="service-details.html">Creative Strategy</a></li>
                                    <li><a href="service-details.html">Marketing Policy</a></li>
                                    <li><a href="service-details.html">Campaign & PR</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- End Sidebar Item -->

                        <!-- Start Sidebar Item -->
                        <div class="sidebar-single">
                            <h3 class="sidebar-heading">Download Brochure</h3>
                            <div class="sidebar-body">
                                <ul class="service-list">
                                    <li><a href="#"><i class="fa fa-file-pdf-o"></i>Brochures.PDF</a></li>
                                    <li><a href="#"><i class="fa fa-file-word-o"></i>Brochures.DOC</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Sidebar Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Content Area Wrapper ==-->

@endsection