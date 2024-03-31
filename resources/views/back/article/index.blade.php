@extends('back.layout.template')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
@endpush

@section('halaman', 'Artikel')

@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Artikel</h1>
       
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

            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Dilihat</th>
                        <th>Status</th>
                        <th>Publikasi</th>
                        <th>Fungsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->views }}x</td>
                            @if ($item->status == 0)
                                <td>
                                    <span class="badge bg-danger">Draft</span>
                                </td>
                            @else 
                                <td>
                                    <span class="badge bg-success">Publik</span>
                                </td>
                            @endif
                            <td>{{ $item->publish_date }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-secondary">Detail</a>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

    <script>
        $(document).ready(function(){
            $('#dataTable').DataTable();
        });
    </script>
@endpush