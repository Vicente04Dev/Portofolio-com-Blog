@extends('site.site_master')
@section('content')
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Sobre mim</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('site.index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sobre mim</li>
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

<section class="about about__style__two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about__image">
                    <img src="{{asset('frontend/assets/img/images/about_img.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                @foreach ($abouts as $about)
                    
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - Sobre mim</span>
                        <h2 class="title">I have transform your ideas into remarkable digital products</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{asset('frontend/assets/img/icons/about_icon.png')}}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{$about->experience}}</p>
                        </div>
                    </div>
                    <p class="desc">{{$about->description}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="services__style__two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="section__title text-center">
                    <span class="sub-title">02 - Meus serviços</span>
                    <h2 class="title">Ofereço serviços incríveis</h2>
                </div>
            </div>
        </div>
        <div class="services__style__two__wrap">
            <div class="row gx-0">
                @foreach ($services as $service)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__style__two__item">
                        <div class="services__style__two__icon">
                            <img src='{{asset("upload/services/$service->icon")}}' alt="">
                        </div>
                        <div class="services__style__two__content">
                            <h3 class="title">{{$service->name}}</h3>
                            <p>{{$service->short_description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="testimonial testimonial__style__two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-11">
                <div class="testimonial__wrap">
                    <div class="section__title text-center">
                        <span class="sub-title">03 - Feedback dos clientes</span>
                        <h2 class="title">Alguns feedbacks de clientes satisfitos</h2>
                    </div>
                <div class="testimonial__two__active slick-initialized slick-slider">
                        
                        
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 1380px;">
                            <div class="testimonial__item slick-slide slick-current slick-active" style="width: 690px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0" data-slick-index="0" aria-hidden="false">
                                @foreach ($testimonials as $testimonial)
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>{{$testimonial->description}}.</p>
                                    <div class="testimonial__avatar">
                                        <span>{{$testimonial->name}}</span>
                                        <div class="testi__avatar__img">
                                            <img src="{{asset('frontend/assets/img/images/testi_avatar01.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial__two__icons">
        <ul>
            <li><img src="{{asset('frontend/assets/img/icons/testi_shape01.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/testi_shape02.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/testi_shape03.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/testi_shape04.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/testi_shape05.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/img/icons/testi_shape06.png')}}" alt=""></li>
        </ul>
    </div>
</section>
@endsection