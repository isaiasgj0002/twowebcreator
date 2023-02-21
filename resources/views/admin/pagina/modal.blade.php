<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="{{ route('destroy.pagina',$item->id) }}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="DELETE">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar pagina</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ¿Esta seguro que desea eliminar la pagina?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </div>
            </div>
          </div>
    </form>
  </div>
