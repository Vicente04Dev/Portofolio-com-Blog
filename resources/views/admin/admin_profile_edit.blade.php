@extends('admin.admin_master')

@section('content')
<script src="{{asset('backend/jquery.js')}}"></script>

<div class="page-content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="card-title">Página de edição de perfil</h2>
                    <form action="{{route('store.profile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" id="name" value="{{$editData->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" id="email" value="{{$editData->email}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Foto de perfil</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="profile_image" id="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img class="rounded avatar-xl mt-2" src="{{ (!empty(Auth::user()->image)) ? url('upload/admin_images/'.Auth::user()->image) : url('upload/no_image.jpg')}}" alt="Card image cap" id="showImage">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Actualizar perfil</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    </div>
</div>

<script>

    $(document).ready(function() {
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>
@endsection