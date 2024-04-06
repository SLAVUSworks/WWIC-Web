@extends('back.layout.template')

@section('halaman', 'Users')

@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @if (auth()->user()->role == 1)
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Register</h1>
    </div>
    <div class="mt-3">
                <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalCreate">Create</button>
                
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('success'))
            <div class="my-2">
                <div class="alert alert-success">
                    {{ (session('success')) }}
                </div>
            </div>
            @endif
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Dibuat Pada</th>
                        <th>Fungsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nickname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="text-center">
                                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</button>
                                @if (auth()->user()->role == 1)
                                    @if ($item->id != auth()->user()->id)
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}">Delete</button>
                                    @endif
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @else (auth()->user()->role != 1)
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Akun</h1>
        </div>
        @foreach ($users as $item)

        <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="{{ asset('storage/'. $item->avatar) }}" alt="avatar"class="rounded-circle  object-fit-cover" style="width: 30%;">
                  <h5 class="my-3">{{ $item->nickname }}</h5>
                  @if (auth()->user()->role == 1)
                    <p class="text-muted mb-3">Admin</p>
                  @elseif (auth()->user()->role == 2)
                    <p class="text-muted mb-3">Moderator</p>
                  @else (auth()->user()->role == 3)
                    <p class="text-muted mb-3">Writer</p>
                  @endif
                  <div class="d-flex justify-content-center mb-2">
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</button>
                </div>

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
                      <p class="text-muted mb-0">{{ $item->nickname }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Nama Lengkap</p>
                        </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $item->full_name }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $item->email }}</p>
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
                        <p class="text-muted mb-0">{{ $item->created_at }}</p>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endforeach
        @endif
        @include('back.user.create-modal')
        @include('back.user.update-modal')
        @include('back.user.delete-modal')

    </main>

@endsection