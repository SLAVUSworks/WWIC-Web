@foreach ($config as $item)
<!-- Modal -->
<div class="modal fade" id="modalUpdate{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Konfigurasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('config/'.$item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="mb-3">Name</label>
                        <input name="name" id="name" cols="30" rows="1" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $item->name) }}"  readonly>

                        @error('name')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="value" class="mb-3">Value</label>
                        <textarea name="value" id="value" cols="30" rows="10" class="form-control @error('value') is-invalid @enderror">{{ old('value', $item->value) }}</textarea>

                        @error('value')
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
@endforeach
