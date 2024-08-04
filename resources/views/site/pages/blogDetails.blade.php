@extends('site.site_master')
@section('content')
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Artigo do post</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('site.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('site.blog')}}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detalhes</li>
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

<section class="standard__blog blog__details">
    <div class="container">
        <div class="row">
            @foreach ($posts as $info) 
                <div class="col-lg-8">
                    <div class="standard__blog__post">
                        <div class="standard__blog__thumb">
                            <img src='{{asset("upload/posts/$info->image")}}' alt="{{$info->title}}">
                        </div>
                        <div class="blog__details__content services__details__content">
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i> {{date_format($info->created_at, 'd/m/Y')}} </li>
                                <li><i class="fal fa-comments-alt"></i>Comentários ({{count($info->comments)}})</li>
                            </ul>
                            <h2 class="title">{{$info->title}}</h2>
                            <p>{{$info->description}}</p>
                        </div>
                        <hr>
                        @forelse ($commentsPost as $comment)
                            <div class="comment comment__wrap">
                                <ul class="comment__list">
                                    <li class="comment__item">
                                        <div class="comment__thumb">
                                            <img src="{{asset('frontend/assets/img/blog/comment_thumb01.png')}}" alt="">
                                        </div>
                                        <div class="comment__content">
                                            <div class="comment__avatar__info">
                                                <div>
                                                    <h4 class="title">{{$comment->name}}</h4>
                                                    {{--<span class="date">{{date_format($comment->created_at, 'd/m/Y')}}</span>--}}
                                                </div>
                                            </div>
                                            <p>{{$comment->comment}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @empty
                            <p class="fw-bold">Nenhum comentário ainda. Seja o primeiro a comentar.</p>
                        @endforelse
                        <div class="comment__form">
                            <div class="comment__title">
                                <h4 class="title">Escreva seu comentário</h4>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <input type="hidden" name="post_id" value="{{$info->id}}">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Digite seu nome*">
                                    </div>
                                </div>
                                <textarea name="comment" id="message" placeholder="Digite seu comentário*"></textarea>
                                <button type="submit" class="btn">publicar comentário</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-4">
                <aside class="blog__sidebar">
                    <div class="widget">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Pesquisar">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Posts Recentes</h4>
                        <ul class="rc__post">
                            @foreach ($postsAll as $info)
                                <li class="rc__post__item">
                                    <div class="rc__post__thumb">
                                        <a href="{{route('site.blog.details', $info->slug)}}"><img src='{{asset("upload/posts/$info->image")}}' alt=""></a>
                                    </div>
                                    <div class="rc__post__content">
                                        <h5 class="title"><a href="{{route('site.blog.details', $info->slug)}}">{{$info->title}}</a></h5>
                                        <span class="post-date"><i class="fal fa-calendar-alt"></i> {{date_format($info->created_at, 'd/m/Y')}}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Categorias</h4>
                        <ul class="sidebar__cat">
                            @foreach ($categories as $category)
                                <li class="sidebar__cat__item"><a href="blog.html"> {{$category->name}} {{count($category->posts)}}</a></li>
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