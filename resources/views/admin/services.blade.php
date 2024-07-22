@extends('admin.admin_master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <h2 class="fs-2 mb-4">Serviços</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{asset('frontend/assets/img/icons/services_light_icon01.png')}}" alt="">
                                </div>
                                <h5 class="title">Business Strategy</h5>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="">Editar</a>
                            <a href="" class="text-danger">Remover</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection