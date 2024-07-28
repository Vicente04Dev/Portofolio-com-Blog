@extends('admin.admin_master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <h2 class="fs-2 mb-4">Artigos publicados por você ({{count($datas)}})</h2>
            <div class="row">
                @forelse ($datas as $data)
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top img-fluid" src='{{asset("upload/posts/$data->image")}}' alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <a href="#"  class="card-title"><h4 class="text-info">{{$data->title}}</h4></a>
                                <p class="card-text">{{$data->short_description}}</p>
                                <p class="card-text">
                                    <small class="text-muted">Data da publicação: {{date_format($data->created_at, 'd/m/Y H:i')}} </small>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#edit-{{$data->id}}" data-bs-toggle="modal">Editar</a>
                                @include('admin.edit.post')
                                <a href="{{route('delete.post', $data->id)}}" class="text-danger">Remover</a>
                            </div>
                        </div>
                    </div>

                    @empty
                        <p>Você ainda não cadastrou nenhum artigo. Cadastra <a href="{{route('add.post')}}">aqui</a>.</p>
                @endforelse
            </div>
        </div>
        
    </div>
@endsection