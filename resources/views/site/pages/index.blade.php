@extends('site.site_master')
@section('content')
<main>

    <!-- banner-area -->
    <section class="banner">
        <div class="container custom-container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6 order-0 order-lg-2">
                    <div class="banner__img text-center text-xxl-end">
                        <img src="{{asset('frontend/assets/img/banner/banner_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="banner__content">
                        @foreach ($about as $info)
                            <h2 class="title wow fadeInUp" data-wow-delay=".2s">{{$info->title}}</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{$info->short_description}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- banner-area-end -->

    <!-- about-area -->
    <section id="aboutSection" class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="about__icons__wrap">
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/xd_light.png')}}" alt="XD">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/xd.png')}}" alt="XD">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/skeatch_light.png')}}" alt="Skeatch">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/skeatch.png')}}" alt="Skeatch">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/illustrator_light.png')}}" alt="Illustrator">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/illustrator.png')}}" alt="Illustrator">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/hotjar_light.png')}}" alt="Hotjar">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/hotjar.png')}}" alt="Hotjar">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/invision_light.png')}}" alt="Invision">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/invision.png')}}" alt="Invision">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/photoshop_light.png')}}" alt="Photoshop">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/photoshop.png')}}" alt="Photoshop">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/figma_light.png')}}" alt="Figma">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/figma.png')}}" alt="Figma">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">01 Sobre mim</span>
                            <h2 class="title">Transformo suas ideias em produtos digitais incríveis.</h2>
                        </div>
                        <div class="about__exp">
                            <div class="about__exp__icon">
                                <img src="{{asset('frontend/assets/img/icons/about_icon.png')}}" alt="">
                            </div>
                            <div class="about__exp__content">
                                @foreach ($about as $info)
                                <p>{{$info->experience}}</p>
                                @endforeach
                            </div>
                        </div>
                        <p class="desc">I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services">
        <div class="container">
            <div class="services__title__wrap">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section__title">
                            <span class="sub-title">02 - meus Serviços</span>
                            <h2 class="title">Criando experiências digitais incríveis</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-4">
                        <div class="services__arrow"></div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 services__active">
                @foreach ($services as $service)
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <img src="{{asset('frontend/assets/img/images/services_img01.jpg')}}" alt="">
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src='{{asset("upload/services/$service->icon")}}' alt="{{$service->name}}">
                                </div>
                                <h3 class="title">{{$service->name}}</h3>
                                <p>{{$service->short_description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- partner-area -->
    <section class="partner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="partner__logo__wrap">
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/partner_light01.png')}}" alt="">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/partner_01.png')}}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/partner_light02.png')}}" alt="">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/partner_02.png')}}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/partner_light03.png')}}" alt="">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/partner_03.png')}}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/partner_light04.png')}}" alt="">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/partner_04.png')}}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/partner_light05.png')}}" alt="">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/partner_05.png')}}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/partner_light06.png')}}" alt="">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/partner_06.png')}}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="partner__content">
                        <div class="section__title">
                            <span class="sub-title">03 - parceiros</span>
                            <h2 class="title">Estou orgulhoso de ter feito colaboração com empresas incríveis.</h2>
                        </div>
                        <p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partner-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 order-0 order-lg-2">
                    <ul class="testimonial__avatar__img">
                        <li><img src="{{asset('frontend/assets/img/images/testi_img01.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img02.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img03.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img04.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img05.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img06.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img07.png')}}" alt=""></li>
                    </ul>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial__wrap">
                        <div class="section__title">
                            <span class="sub-title">04 - Feedback dos clientes</span>
                            <h2 class="title">Feedback positivos</h2>
                        </div>
                        <div class="testimonial__active">
                            @foreach ($testimonials as $testimonial)  
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>{{$testimonial->description}}</p>
                                        <div class="testimonial__avatar">
                                            <span>{{$testimonial->name}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="testimonial__arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

</main>
@endsection