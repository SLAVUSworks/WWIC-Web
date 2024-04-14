@extends('back.layout.template')

@section('halaman', 'Profil')

@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-0">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Akun</h1>
    </div>
    <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{ asset('storage/'. auth()->user()->avatar) }}" alt="avatar"class="rounded-circle object-fit-cover" style="width: 30%;">
              <h5 class="my-3">{{ auth()->user()->nickname }}</h5>
              @if (auth()->user()->role == 1)
                <p class="text-muted mb-3">Admin</p>
              @elseif (auth()->user()->role == 2)
                <p class="text-muted mb-3">Moderator</p>
              @else (auth()->user()->role == 3)
                <p class="text-muted mb-3">Writer</p>
              @endif
        </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nickname</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->user()->nickname }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-sm-3">
                      <p class="mb-0">Nama Lengkap</p>
                    </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->user()->full_name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-sm-3">
                      <p class="mb-0">Role</p>
                </div>
                <div class="col-sm-9">
                @if (auth()->user()->role == 1)
                  <p class="text-muted mb-0">Admin</p>
                @elseif (auth()->user()->role == 2)
                  <p class="text-muted mb-0">Moderator</p>
                @else (auth()->user()->role == 3)
                  <p class="text-muted mb-0">Writer</p>
                @endif
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Terdaftar Pada</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ auth()->user()->created_at }}</p>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>

@endsection