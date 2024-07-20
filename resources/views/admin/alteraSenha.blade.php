@extends('admin.admin_master')

@section('content')

<div class="page-content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="card-title">Alterar Senha</h2>
                    @if (count($errors))
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show">{{$error}}</p>
                        @endforeach
                        
                    @endif
                    <form action="{{route('updatePassword')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="old-password" class="col-sm-2 col-form-label">Senha actual</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="old_password" id="old-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="new-password" class="col-sm-2 col-form-label">Nova senha</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="new_password" id="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="confirm-new-password" class="col-sm-2 col-form-label">Confirmar nova senha</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="confirm_new_password" id="confirm-new-password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Alterar senha</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    </div>
</div>
@endsection