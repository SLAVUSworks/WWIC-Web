@extends('back.layout.template')

@section('halaman', 'Dashboard')

@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
                <div class="card-header">Total Artikel</div>
                <div class="card-body">
                  <h5 class="card-title">{{ $total_articles }}</h5>
                  <p class="card-text"></p>
                </div>
              </div>
        </div>
        <div class="col-6">
            <div class="card text-white bg-secondary mb-3" style="max-width: 100%;">
                <div class="card-header">Total Kategori</div>
                <div class="card-body">
                  <h5 class="card-title">{{ $total_categories }}</h5>
                  <p class="card-text"></p>
                </div>
              </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h4>Artikel Terbaru</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Judul</td>
                            <td>Kategori</td>
                            <td>Tanggal</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($latest_article as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->publish_date }}</td>
                                <td class="text-center">
                                    <a href="{{ url('article/'.$item->id) }}" class="btn btn-sm btn-secondary center"> Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <h4>Artikel Populer</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Judul</td>
                            <td>Kategori</td>
                            <td>Dilihat</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($popular_article as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->views }}x</td>
                                <td class="text-center">
                                    <a href="{{ url('article/'.$item->id) }}" class="btn btn-sm btn-secondary center"> Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
</div>
@endsection