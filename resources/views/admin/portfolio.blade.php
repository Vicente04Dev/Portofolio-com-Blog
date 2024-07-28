@extends('admin.admin_master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <h2 class="fs-2 mb-4">Projectos</h2>
            <div class="row">
                @foreach ($datas as $data)
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-4">
                                    <img class="card-img img-fluid" src='{{asset("upload/portfolio/$data->image")}}' alt="Card image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$data->name}}</h5>
                                        <p class="card-text">{{$data->short_description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#edit-{{$data->id}}" data-bs-toggle="modal">Editar</a>
                                @include('admin.edit.portfolio')
                                <a href="{{route('delete.portfolio', $data->id)}}" class="text-danger">Remover</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>
@endsection