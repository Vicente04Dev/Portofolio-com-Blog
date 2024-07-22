@extends('admin.admin_master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <h2 class="fs-2 mb-4">Projectos</h2>
            <div class="row">
                <div class="col-sm-6">
                        <div class="card">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-4">
                                    <img class="card-img img-fluid" src="assets/images/small/img-2.jpg" alt="Card image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
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