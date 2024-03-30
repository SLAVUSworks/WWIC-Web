<!-- Modal -->
<div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kategori</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ url('categories') }}" method="post">
            @csrf

            <div class="mb3">
                <label for="name" class="mb-3">Nama Kategori</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">

                @error('name')
                <div class="invalid-feedback mb-3">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Gak dlu</button>
                <button type="submit" class="btn btn-success">Iye</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>