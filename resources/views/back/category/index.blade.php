@extends('back.layout.template')

@section('halaman', 'Kategori')

@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori</h1>
       
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
                {{ session('success') }}
            </div>
        </div>
        @endif


<h2 class="h3 mb-3">Kategori Induk</h2>

<!-- Parent Categories Table -->
<table class="table table-bordered mb-4">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Slug</th>
            <th>Dibuat Pada</th>
            <th>Fungsi</th>
        </tr>
    </thead>
    <tbody>
        {{-- Loop through parent categories --}}
        @foreach ($parentCategories as $parentCategory)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $parentCategory->name }}</td>
                <td>{{ $parentCategory->slug }}</td>
                <td>{{ $parentCategory->created_at }}</td>
                <td>
                    <div class="text-center">
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $parentCategory->id }}">Edit</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $parentCategory->id }}">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<h2 class="h3 mb-3">Kategori</h2>

<!-- Child Categories Table -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kategori Induk</th>
            <th>Slug</th>
            <th>Dibuat Pada</th>
            <th>Fungsi</th>
        </tr>
    </thead>
    <tbody>
        {{-- Loop through parent categories and their child categories --}}
        @foreach ($parentCategories as $parentCategory)
            @foreach ($parentCategory->children as $childCategory)
                <tr>
                    <td>{{ $loop->parent->iteration }}.{{ $loop->iteration }}</td>
                    <td>{{ $childCategory->name }}</td>
                    <td>{{ $parentCategory->name }}</td>
                    <td>{{ $childCategory->slug }}</td>
                    <td>{{ $childCategory->created_at }}</td>
                    <td>
                        <div class="text-center">
                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $childCategory->id }}">Edit</button>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $childCategory->id }}">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>

    </div>
    {{-- Modal --}}
    @include('back.category.create-modal')
    @include('back.category.update-modal')
    @include('back.category.delete-modal')
</main>

@endsection
