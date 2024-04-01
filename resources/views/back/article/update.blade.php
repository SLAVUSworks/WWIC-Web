@extends('back.layout.template')

@section('halaman', 'Edit Artikel')

@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Artikel</h1>
       
    </div>
        <div class="mt-3">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ url('article/'.$article->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <input type="hidden" name="oldImg" value="{{ $article->img }}">

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title">Judul</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $article->title) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="category">Kategori</label>
                            <select name="category_id" id="category_id" class="form-control text-center">
                                @foreach ($categories as $item)
                                @if ($item->id == $article->category_id)
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="desc">Deskripsi</label>
                    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">{{ old('desc', $article->desc) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="img">Gambar (Maks 2MB)</label>
                    <input type="file" name="img" id="img" class="form-control">
                    <div class="mt-2">
                        <small>Gambar Lama</small><br>
                        <img src="{{ asset('storage/back/'.$article->img) }}" alt="" srcset="" width="100px">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control text-center">
                                <option value="1" class="btn-success" {{ $article->status == 1 ? 'selected' : null }}>Publik</option>
                                <option value="0" class="btn-danger" {{ $article->status == 0 ? 'selected' : null }}>Draft</option>
                            </select>
                        </div> 
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="publish_date">Tanggal Publikasi</label>
                            <input type="date" name="publish_date" id="publish_date" class="form-control" value="{{ old('publish_date', $article->publish_date) }}">
                        </div> 
                    </div>
                </div>
                <div class="float-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </main>

@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
@endpush