<!-- Modal -->
<div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pengguna</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ url('users') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="nickname" class="mb-3">Nama Pengguna</label>
                <input type="text" name="nickname" id="nickname" class="form-control @error('nickname') is-invalid @enderror" value="{{ old('nickname') }}">

                @error('nickname')
                <div class="invalid-feedback mb-3">
                    {{ $message }}
                </div>
                @enderror
            </div>
              <div class="mb-3">
                <label for="full_name" class="mb-3">Nama Lengkap</label>
                <input type="text" name="full_name" id="full_name" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name') }}">

                @error('full_name')
                <div class="invalid-feedback mb-3">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="mb-3">Email</label>
              <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">

              @error('email')
              <div class="invalid-feedback mb-3">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              {{-- <label for="role" class="mb-3">Role</label>
              <input type="role" name="role" id="role" class="form-control @error('role') is-invalid @enderror" value="{{ old('role') }}"> --}}
              <label for="role">Role</label>
              <select name="role" name="role" id="role" class="form-control @error('role') is-invalid @enderror" value="{{ old('role') }}">
                  <option value="" hidden>Select</option>
                  <option value="1" class="btn">Admin</option>
                  <option value="2" class="btn">Moderator</option>
                  <option value="3" class="btn">Writer</option>
              </select>
              @error('role')
              <div class="invalid-feedback mb-3">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="mb-3">Password</label>
              <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">

              @error('password')
              <div class="invalid-feedback mb-3">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="confirm_password" class="mb-3">Konfirmasi Password</label>
              <input type="password" name="password_confirmation" id="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" value="{{ old('confirm_password') }}">

              @error('confirm_password')
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