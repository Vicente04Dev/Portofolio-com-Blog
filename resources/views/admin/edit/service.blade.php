<div class="modal fade" id="edit-{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Você está editando o serviço de {{$data->name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('edit.service', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-12 col-form-label">Nome do serviço</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" name="name" id="name" value="{{$data->name}}">
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="short_description" class="col-sm-12 col-form-label">Breve descrição do serviço</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" name="short_description" id="short_description" rows="5">{{$data->short_description}}</textarea>
                        <x-input-error :messages="$errors->get('short_description')" class="mt-2 text-danger" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="elm1" class="col-sm-12 col-form-label">Descrição completa</label>
                    <div class="col-sm-12">
                        <div>
                            <div>
                                <textarea id="elm1" name="description">{{$data->description}}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2 text-danger" />
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <button type="submit" class="btn btn-info">Salvar alterações</button>
            </form>
        </div>
      </div>
    </div>
  </div>