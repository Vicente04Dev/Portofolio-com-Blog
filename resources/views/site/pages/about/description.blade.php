@extends('admin.admin_master')
@section('content')

<script src="{{asset('backend/jquery.js')}}"></script>

<div class="page-content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="card-title fs-4 mb-4">Descrição de perfil</h2>
                    <form action="{{route('store.profile.about')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="title" id="title" value="{{$data->title}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="experience" class="col-sm-2 col-form-label">Sobre sua experiência</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="experience" id="experience" value="{{$data->experience}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="short_description" class="col-sm-2 col-form-label">Breve descrição</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="short_description" id="" rows="5">{{$data->short_description}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="elm1" class="col-sm-2 col-form-label">Descrição completa</label>
                            <div class="col-sm-10">
                                <div>
                                    <div>
                                        <textarea id="elm1" name="description">{{$data->description}}</textarea>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <button type="submit" class="btn btn-info">Actualizar Informações</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

<!--tinymce js-->
<script src="{{asset('backend/assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- init js -->
<script src="{{asset('backend/assets/js/pages/form-editor.init.js')}}"></script>
@endsection