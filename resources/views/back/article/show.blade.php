@extends('back.layout.template')

@section('halaman', "Detail Artikel")

@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Artikel</h1>
       
    </div>
        <div class="mt-3">
            <table class="table table-striped table-bordered">
                <tr>
                    <th width="250px">Judul</th>
                    <td width="100%">{{ $article->title }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>{{ $article->Category->name }}</td>
                </tr>
                <tr>
                    <th>Publikasi</th>
                    <td>{{ $article->publish_date }}</td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>{{ $article->User->nickname }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{!! $article->desc !!}</td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td>
                        <img src="{{ asset('storage/back/'.$article->img) }}" alt="{{ asset('storage/back/'.$article->img) }}" width="50%">
                    </td>
                </tr>
                <tr>
                    <th>Dilihat</th>
                    <td>
                        {{ $article->views }}x
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    @if ($article->status == 0)
                        <td class="bg-danger">Draft</td>
                    @else
                        <td class="bg-success">Publik</td>
                    @endif
                </tr>
            </table>
            <div class="float-end">
                <a href="{{ url('article') }}" class="btn btn-primary mb-3">Back</a>
            </div>
        </div>
    </main>

@endsection
