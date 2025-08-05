@extends('layout.app')
@section('content')

<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" data-bg="{{ asset("frontend/assets/img/page-header.jpg") }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>FROM BUSINEX LATEST</h2>
                        <p>Businex always try to provide the best Business Solutions for Clinets
                            to grow up their Business very sharply and smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Blog Page Area Wrapper ==-->
<div class="blog-page-content-area sp-y">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-1 order-lg-0">
                <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60">
                    <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                @forelse ($categories as $category)
                                    <li><a href="{{ route('blogs.categories.show', $category) }}">{{ $category->name }}</a></li>
                                @empty
                                    <li>No categories found</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->

                    <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <h3 class="sidebar-title">Featured Posts</h3>
                        <div class="sidebar-body">
                            <div class="latest-blog-widget">
                                @forelse ($featured as $post)
                                    <div class="single-blog-item">
                                        <div class="post-thumb">
                                            <a href="{{ route('blogs.show', $post->slug) }}">
                                                <img src="{{ optional($post->blogImages->first())->file_path ? asset('storage/' . $post->blogImages->first()->file_path) : asset('frontend/assets/img/placeholder.jpg') }}"
                                                alt="{{ $post->title }}">
                                            </a>
                                        </div>

                                        <div class="post-info">
                                            <h6>
                                                <a href="{{ route('blogs.show', $post->slug) }}">
                                                    {{ \Illuminate\Support\Str::limit($post->title, 40) }}
                                                </a>
                                            </h6>
                                            <span class="post-date">
                                                <i class="fa fa-clock-o"></i> {{ $post->created_at->format('F j, Y') }}
                                            </span>
                                        </div>
                                    </div>
                                @empty
                                    <p>No featured posts.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->

                    <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <h3 class="sidebar-title">Instagram</h3>
                        <div class="sidebar-body">
                            <div class="instagram-feed">
                                <div id="instafeed" class="instagram-gallery"
                                     data-accesstoken="IGQVJWRlI0cGpSWm44eW9qSklnV1hIclZArNi1zbW5xZAVZAZAYXVoYUo0TUtwNDNMQ2o5VzBxRDNTa1lNSHVzVHBWSEtSZAFR3NmlkSWlxZAlUwN2RBRjc2YWVwYWR4QldENFRLUDlCanpCNTBTOS1VMXh6LQZDZD">
                                </div>

                                <h4 class="insta-follow"><i class="fa fa-instagram"></i> Follow Us <a href="#"
                                                                                                      target="_blank">@businex</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->

                    <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <div class="sidebar-body">
                            <a href="#"><img src="{{ asset("frontend/assets/img/banner-poster.jpg") }}" alt="Poster"></a>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->
                </aside>
            </div>

            <div class="col-lg-9 order-0">
                <div class="blog-content-wrapper">
                    <div class="row mtn-30">

                        @forelse ($blogs as $blog)
                            <div class="col-md-6">
                                <div class="blog-item">
                                    <figure class="blog-thumb">
                                        <a href="{{ route('blogs.show', $blog->slug) }}">
                                            <img src="{{ optional($blog->blogImages->first())->file_path ? asset('storage/' . $blog->blogImages->first()->file_path) : asset('frontend/assets/img/placeholder.jpg') }}"
                                            alt="{{ $blog->title }}">
                                        </a>
                                    </figure>
                                    <div class="blog-content">
                                        <h2 class="h5">
                                            <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
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

                <div class="pagination-wrap">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Blog Page Area Wrapper ==-->

@endsection