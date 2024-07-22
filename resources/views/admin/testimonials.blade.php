@extends('admin.admin_master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <h2 class="fs-4 mb-4">Testemunhos</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="card-blockquote font-size-14 mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer font-size-12 m-0">
                                    Wilson Vicente
                                </footer>
                            </blockquote>

                            <p class="fw-bold mt-3">Status: <span class="fs-6 badge text-white bg-warning fw-medium">Pendente</span></p>
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