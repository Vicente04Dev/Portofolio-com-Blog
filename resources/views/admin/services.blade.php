@extends('admin.admin_master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <h2 class="fs-2 mb-4">Serviços</h2>
            <div class="row">
                @foreach ($datas as $data) 
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src='{{asset("upload/services/$data->icon")}}' alt="{{$data->name}}">
                                    </div>
                                    <h5 class="title">{{$data->name}}</h5>
                                    <p>{{$data->short_description}}</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#edit-{{$data->id}}" data-bs-toggle="modal">Editar</a>
                                @include('admin.edit.service')
                                <a href="{{route('service.remove', $data->id)}}" class="text-danger">Remover</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        
    </div>
    <script>

        $(document).ready(function() {
            $('#icon').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showIcon').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    
    </script>
@endsection