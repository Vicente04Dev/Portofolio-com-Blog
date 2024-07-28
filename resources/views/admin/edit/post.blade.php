<div class="modal fade" id="edit-{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Você está editando um post</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('edit.post', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <img class="img-fluid img-thumbnail mt-2" src='{{asset("upload/posts/$data->image")}}' height="auto" alt="Card image cap" id="showImage">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-12 col-form-label">Título do post</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" name="title" id="title" value="{{$data->title}}">
                        <x-input-error :messages="$errors->get('title')" class="mt-2 text-danger" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="categoria" class="col-sm-12 col-form-label">Categoria</label>
                    <div class="col-sm-12">
                        <select name="category_id" id="categoria" class="form-select">
                            <option disabled selected>Selecione uma categoria</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{old('category_id', $data->category_id) ==  $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2 text-danger" />
                    </div>
                </div>
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" class="form-control" name="situation_id" id="situation_id" value="2">
                <div class="row mb-3">
                    <label for="short_description" class="col-sm-12 col-form-label">Breve descrição do post</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" name="short_description" id="short_description" rows="5">{{$data->short_description}}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="elm1" class="col-sm-12 col-form-label">Conteúdo completo do post</label>
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