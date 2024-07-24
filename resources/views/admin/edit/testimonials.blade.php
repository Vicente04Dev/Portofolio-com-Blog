<div class="modal fade" id="edit-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Você está editando um testemunho</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('testimonial.edit', $item->id)}}" method="POST">
              @csrf
            <div class="mb-3">
                <label for="name" class="col-form-label">Nome</label>   
              <input type="text" class="form-control" id="name" name="name" value="{{$item->name}}" readonly>
              <small>Você não pode alterar o nome</small>
            </div>
            <div class="mb-3">
                <label for="message-text" class="description">Comentário</label>    
              <textarea class="form-control" id="description" name="description" disabled> {{$item->description}}</textarea>
              <small>Você não pode alterar o comentário</small>
            </div>
            <div class="mb-3">
                <label for="situation_id" class="form-label">Status</label>
                <select name="situation_id" class="form-select">
                    @foreach ($situations as $situation)
                        <option value="{{$situation->id}}" {{old('situation_id', $item->situation_id) == $situation->id ? 'selected' : ''}}>{{$situation->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Salvar alterações</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>