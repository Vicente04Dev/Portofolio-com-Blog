@extends('admin.admin_master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <h2 class="fs-2 mb-4">Artigos publicados por você</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top img-fluid" src="{{asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <a href="#"  class="card-title"><h4 class="text-info">Card title</h4></a>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to additional content. This content is a little bit
                                longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="#">Editar</a>
                            <a href="#" class="text-danger">Remover</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection