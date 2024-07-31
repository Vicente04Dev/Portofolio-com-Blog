@extends('site.site_master')
@section('content')
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Meus contactos</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contacto</li>
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

<div class="contact-area">
    <div class="container">
        <form action="#" class="contact__form">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="Digite seu nome*">
                </div>
                <div class="col-md-6">
                    <input type="email" placeholder="Digite seu mail*">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Digite o aassunto*">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Seu orçamento*">
                </div>
            </div>
            <textarea name="message" id="message" placeholder="Escreva sua mensagem*"></textarea>
            <button type="submit" class="btn">Enviar mensagem</button>
        </form>
    </div>
</div>

<section class="contact-info-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img src="{{asset('frontend/assets/img/icons/contact_icon01.png')}}" alt="">
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Endereço</h4>
                        @foreach ($contacts as $contact)
                            <span>{{$contact->address}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img src="{{asset('frontend/assets/img/icons/contact_icon02.png')}}" alt="">
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Número de telefone</h4>
                        @foreach ($contacts as $contact)
                            <span>{{$contact->phone_number}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img src="{{asset('frontend/assets/img/icons/contact_icon03.png')}}" alt="">
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Endereço de email</h4>
                        @foreach ($contacts as $contact)
                            <span>{{$contact->email}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection