@extends('admin.admin_master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <h2 class="fs-4 mb-4">Testemunhos</h2>
            <div class="row">
                @foreach ($datas as $item)
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="card-blockquote font-size-14 mb-0">
                                <p>{{$item->description}}</p>
                                <footer class="blockquote-footer font-size-12 m-0">
                                    {{$item->name}}
                                </footer>
                            </blockquote>

                            @php
                                $bg = ($item->situation_id == 1 ? 'bg-warning' : 'bg-success');
                                $texto = ($item->situation_id == 2 ? 'Publicado' : 'Pendente');
                            @endphp
                            <p class="fw-bold mt-3">Status: <span class="fs-6 badge text-white {{$bg}} fw-medium">{{$texto}}</span></p>
                        </div>
                        <div class="card-footer">
                            <a href="#edit-{{$item->id}}" data-bs-toggle="modal">Editar</a>
                            @include('admin.edit.testimonials')
                            <a href="" class="text-danger">Remover</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>   
    </div>
@endsection