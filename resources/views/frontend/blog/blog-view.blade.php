@extends('layout.app')
@section('content')

<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" data-bg="{{ asset("frontend/assets/img/page-header.jpg") }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>Blog Details</h2>
                        <p>Businex always try to provide the best Business Solutions for Clinets
                            to grow up their Business very sharply and smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->


<!--== Start Blog Details Page Content ==-->
<div class="blog-details-page-content sp-y">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <article class="blog-post-details">
                    <!-- Blog Cover Image -->
                    <figure class="blog-post-thumb">
                        <img src="{{ $blog->cover_image ?? ($blog->blogImages->first()->file_path ?? asset('frontend/assets/img/blog/blog-details-1.jpg')) }}" alt="Blog Cover">
                    </figure>

                    <!-- Blog Content -->
                    <div class="blog-post-txt">
                        <h2 class="h3">{{ $blog->title }}</h2>
                        <p>{!! $blog->excerpt !!}</p>
                        <p>{!! $blog->content !!}</p>

                        @if($blog->blogImages->count() > 1)
                            @foreach($blog->blogImages->slice(1) as $image)
                                <figure class="blog-post-img">
                                    <img src="{{ $image->file_path ?? asset('frontend/assets/img/blog/blog-details-2.jpg') }}" alt="Blog Image">
                                </figure>
                            @endforeach
                        @endif
                    </div>

                    <div class="share-article text-center">
                        <h6>Share this article</h6>
                        <div class="member-social-icons justify-content-center">
                            <a class="facebook" href="#"><i class="mdi mdi-facebook"></i></a>
                            <a class="twitter" href="#"><i class="mdi mdi-twitter"></i></a>
                            <a class="reddit" href="#"><i class="mdi mdi-reddit"></i></a>
                            <a class="pinterest" href="#"><i class="mdi mdi-pinterest"></i></a>
                        </div>
                    </div>

                    <!-- Comments -->
                    <div class="comment-area-wrapper">
                        <div class="comments-view-area">
                            <h3>Comments ({{ $blog->blogComments->count() }})</h3>
                            @forelse($blog->blogComments as $comment)
                                <div class="single-comment-wrap d-flex">
                                    <figure class="author-thumb">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/team/default.jpg') }}" alt="Author"></a>
                                    </figure>
                                    <div class="comments-info">
                                        <p class="m-0">{{ $comment->content }}</p>
                                        <div class="comment-footer mt-8 d-flex justify-content-between">
                                            <a href="#" class="author"><strong>{{ $comment->name }}</strong> - {{ $comment->created_at->format('F d, Y') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No comments yet.</p>
                            @endforelse
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-box-form mt-50 mt-sm-35">
                            <h3>Leave your thought</h3>
                            <form id="commentForm" action="{{ route('blogs.blog.comment', $blog->id) }}" method="POST">
                                @csrf
                                <div class="row row-20">
                                    <div class="col-12">
                                        <div class="single-input-item">
                                            <textarea name="content" cols="30" rows="5" placeholder="Write your Message*" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="single-input-item">
                                            <input type="text" name="name" placeholder="Name*" required/>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="single-input-item">
                                            <input type="email" name="email" placeholder="Email*" required/>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="single-input-item ">
                                            <input type="url" name="website" placeholder="Website"/>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-outline w-100" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-3">
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
        </div>
    </div>
</div>
<!--== End Blog Details Page Content ==-->
<script>
document.getElementById('commentForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);
    const action = form.getAttribute('action');

    fetch(action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(res => {
        if (!res.ok) throw new Error('Network response was not ok');
        return res.json();
    })
    .then(data => {
        toast(data.message || 'Comment submitted successfully');
        form.reset();
    })
    .catch(() => {
        toast('Something went wrong. Please try again.', true);
    });
});

function toast(msg, error = false) {
    const el = document.createElement('div');
    el.textContent = msg;
    el.style.position = 'fixed';
    el.style.bottom = '20px';
    el.style.right = '20px';
    el.style.padding = '12px 20px';
    el.style.color = '#fff';
    el.style.background = error ? '#dc3545' : '#28a745';
    el.style.borderRadius = '6px';
    el.style.boxShadow = '0 0 10px rgba(0,0,0,0.1)';
    el.style.zIndex = '9999';
    document.body.appendChild(el);
    setTimeout(() => el.remove(), 3000);
}
</script>

@endsection