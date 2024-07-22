@extends('admin.admin_master')
@section('content')

<script src="{{asset('backend/jquery.js')}}"></script>

<div class="page-content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="card-title fs-4 mb-4">Adicionar novo portfolio</h2>
                    <form action="{{route('store.portfolio')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nome do portfolio</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}" required>
                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Imagem do portfolio</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img class="img-fluid img-thumbnail mt-2" src="{{ url('upload/no_image.jpg')}}" height="auto" alt="Card image cap" id="showImage">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="short_description" class="col-sm-2 col-form-label">Breve descrição do portfolio</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="short_description" id="" rows="5" required>{{old('short_description')}}</textarea>
                                <x-input-error :messages="$errors->get('short_description')" class="mt-2 text-danger" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="elm1" class="col-sm-2 col-form-label">Descrição completa</label>
                            <div class="col-sm-10">
                                <div>
                                    <div>
                                        <textarea id="elm1" name="description">{{old('description')}}</textarea>
                                        <x-input-error :messages="$errors->get('description')" class="mt-2 text-danger" />
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <button type="submit" class="btn btn-info">Cadastrar portfolio</button>
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