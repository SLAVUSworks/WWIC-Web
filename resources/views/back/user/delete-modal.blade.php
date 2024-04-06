@foreach ($users as $item)
<!-- Modal -->
<div class="modal fade" id="modalDelete{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Kategori</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ url('users/'.$item->id) }}" method="post">
            @method('DELETE')
            @csrf

            <div class="mb3">
                <p>Yang Bener aja? <b>{{ $item->nickname }}</b> Dihapus, Rugi dong...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Gak dlu</button>
                <button type="submit" class="btn btn-danger">Apus aja deng</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach