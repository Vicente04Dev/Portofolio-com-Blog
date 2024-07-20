@extends('admin.admin_master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
    <h1>Profile</h1>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <center>
                <img class="rounded-circle avatar-xl mt-4" src="{{ (!empty($adminData->image)) ? url('upload/admin_images/'.$adminData->image) : url('upload/no_image.jpg')}}" alt="Card image cap">
                </center>
                <div class="card-body">
                    <h4 class="card-title">Nome: <strong>{{$adminData->name}}</strong></h4>
                    <hr>
                    <h4 class="card-title">Email: <strong>{{$adminData->email}}</strong></h4
                    <hr>
                    <a href="{{route('edit.profile')}}" class="btn btn-info">Editar perfil</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection