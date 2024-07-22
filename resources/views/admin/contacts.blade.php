@extends('admin.admin_master')
@section('content')

<script src="{{asset('backend/jquery.js')}}"></script>

<div class="page-content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="card-title fs-4 mb-4">Informações de Contacto</h2>
                    <form action="{{route('store.profile.about')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="phone_number" class="col-sm-2 col-form-label">Nº de telefone</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" name="phone_number" id="phone_number" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="facebook" class="col-sm-2 col-form-label">Link do Facebook</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="facebook" id="facebook" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="instagram" class="col-sm-2 col-form-label">Link do Instagram</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="instagram" id="instagram" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="linkedin" class="col-sm-2 col-form-label">Link do LinkedIn</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="linkedin" id="linkedin" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="behance" class="col-sm-2 col-form-label">Link do behance</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="behance" id="behance" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Endereço de Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" id="email" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Endereço de Residência</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="address" id="address" value="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Actualizar Informações</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    </div>
</div>
@endsection