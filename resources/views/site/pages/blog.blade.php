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
                                <li><i class="fal fa-calendar-alt"></i> {{date_format($post->created_at, 'd M Y H:i')}} </li>
                                <li><i class="fal fa-comments-alt"></i>Comentários ({{$post->comments->count()}})</li>
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
                        <h4 class="widget-title">Posts Recentes</h4>
                        <ul class="rc__post">
                            @foreach ($posts as $post)  
                                <li class="rc__post__item">
                                    <div class="rc__post__thumb">
                                        <a href="{{route('site.blog.details', $post->slug)}}"><img src='{{asset("upload/posts/$post->image")}}' alt="{{$post->title}}"></a>
                                    </div>
                                    <div class="rc__post__content">
                                        <h5 class="title"><a href="c__post__thumb">
                                        <a href="{{route('site.blog.details', $post->slug)}}">{{$post->title}}</a></h5>
                                        <span class="post-date"><i class="fal fa-calendar-alt"></i>{{date_format($post->created_at, 'd m Y')}}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Categorias</h4>
                        <ul class="sidebar__cat">
                            @foreach ($categories as $category)
                                <li class="sidebar__cat__item"><a href="blog.html">{{$category->name}} ({{$category->posts->count()}})</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Comentários Recentes</h4>
                        <ul class="sidebar__comment">
                            @foreach ($comments as $comment) 
                                <li class="sidebar__comment__item">
                                    <a href="{{route('site.blog.details', $comment->post->slug)}}">{{$comment->name}}</a>
                                    <p>{{$comment->comment}}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection