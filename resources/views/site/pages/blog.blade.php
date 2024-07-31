@extends('site.site_master')
@section('content')
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Artigos do post</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('site.index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            <li><img src="{{asset('frontend/assets/img/icons/breadcrumb_icon01.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/breadcrumb_icon02.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/breadcrumb_icon03.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/breadcrumb_icon04.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/breadcrumb_icon05.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/breadcrumb_icon06.png')}}" alt=""></li>
        </ul>
    </div>
</section>

<section class="standard__blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="standard__blog__post">
                    @foreach ($posts as $post)  
                        <div class="standard__blog__thumb">
                            <a href="{{route('site.blog.details', $post->slug)}}"><img src='{{asset("upload/posts/$post->image")}}' alt=""></a>
                        </div>
                        <div class="standard__blog__content">
                            <div class="blog__post__avatar">
                                <div class="thumb"><img src="{{asset('upload/admin_images/'.$post->user->image)}}" alt=""></div>
                                <span class="post__by">Por : <a href="#">{{$post->user->name}}</a></span>
                            </div>
                            <h2 class="title"><a href="{{route('site.blog.details', $post->slug)}}">{{$post->title}}</a></h2>
                            <p>{{$post->short_description}}</p>
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i> {{date_format($post->created_at, 'd/m/Y H:i')}} </li>
                                <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (08)</a></li>
                            </ul>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-wrap">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="blog__sidebar">
                    <div class="widget">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Recent Blog</h4>
                        <ul class="rc__post">
                            <li class="rc__post__item">
                                <div class="rc__post__thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/rc_thumb01.jpg" alt=""></a>
                                </div>
                                <div class="rc__post__content">
                                    <h5 class="title"><a href="blog-details.html">Best website traffick booster with
                                    great tools.</a></h5>
                                    <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january 2021</span>
                                </div>
                            </li>
                            <li class="rc__post__item">
                                <div class="rc__post__thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/rc_thumb02.jpg" alt=""></a>
                                </div>
                                <div class="rc__post__content">
                                    <h5 class="title"><a href="blog-details.html">How to become a best sale marketer
                                    in a year!</a></h5>
                                    <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january 2021</span>
                                </div>
                            </li>
                            <li class="rc__post__item">
                                <div class="rc__post__thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/rc_thumb03.jpg" alt=""></a>
                                </div>
                                <div class="rc__post__content">
                                    <h5 class="title"><a href="blog-details.html">Google take latest step &amp; catch the
                                    black SEO</a></h5>
                                    <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january 2021</span>
                                </div>
                            </li>
                            <li class="rc__post__item">
                                <div class="rc__post__thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/rc_thumb04.jpg" alt=""></a>
                                </div>
                                <div class="rc__post__content">
                                    <h5 class="title"><a href="blog-details.html">Businesses are thriving societies. Time for urgent change</a></h5>
                                    <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january 2021</span>
                                </div>
                            </li>
                            <li class="rc__post__item">
                                <div class="rc__post__thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/rc_thumb05.jpg" alt=""></a>
                                </div>
                                <div class="rc__post__content">
                                    <h5 class="title"><a href="blog-details.html">TikTok influencer marketing:How to
                                    work with influencer</a></h5>
                                    <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january 2021</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="sidebar__cat">
                            <li class="sidebar__cat__item"><a href="blog.html">Web Design (6)</a></li>
                            <li class="sidebar__cat__item"><a href="blog.html">Web Development (4)</a></li>
                            <li class="sidebar__cat__item"><a href="blog.html">Product Design (9)</a></li>
                            <li class="sidebar__cat__item"><a href="blog.html">Animation (6)</a></li>
                            <li class="sidebar__cat__item"><a href="blog.html">Ui/Ux Design (8)</a></li>
                            <li class="sidebar__cat__item"><a href="blog.html">Branding Design (12)</a></li>
                            <li class="sidebar__cat__item"><a href="blog.html">Web Design (6)</a></li>
                            <li class="sidebar__cat__item"><a href="blog.html">Logo Design (6)</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Recent Comment</h4>
                        <ul class="sidebar__comment">
                            <li class="sidebar__comment__item">
                                <a href="blog-details.html">Rasalina Sponde</a>
                                <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                            </li>
                            <li class="sidebar__comment__item">
                                <a href="blog-details.html">Rasalina Sponde</a>
                                <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                            </li>
                            <li class="sidebar__comment__item">
                                <a href="blog-details.html">Rasalina Sponde</a>
                                <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                            </li>
                            <li class="sidebar__comment__item">
                                <a href="blog-details.html">Rasalina Sponde</a>
                                <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Popular Tags</h4>
                        <ul class="sidebar__tags">
                            <li><a href="blog.html">Business</a></li>
                            <li><a href="blog.html">Design</a></li>
                            <li><a href="blog.html">apps</a></li>
                            <li><a href="blog.html">landing page</a></li>
                            <li><a href="blog.html">data</a></li>
                            <li><a href="blog.html">website</a></li>
                            <li><a href="blog.html">book</a></li>
                            <li><a href="blog.html">Design</a></li>
                            <li><a href="blog.html">product design</a></li>
                            <li><a href="blog.html">landing page</a></li>
                            <li><a href="blog.html">data</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection