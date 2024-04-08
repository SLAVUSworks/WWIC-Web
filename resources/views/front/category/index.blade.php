@extends('front.layout.template')

@section('nama-tab', 'Kategori ' . $category)

@section('main')
<!-- Page <content-->
    <br>
<div class="container">
    <div class="mb-3">
    <form action="{{ route('search') }}" method="POST">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Cari disini ...">
            <button type="submit" class="btn btn-primary" id="button-search">Cari!</button>
        </div>
    </form>
    </div>

    <div class="shadow opacity rounded col-12" style="width: max-content">
        <p class="text-dark mb-4 p-3">Artikel dengan kategori : <i>{{ $category }}</i></p>
    </div>

    <div class="row">
        <!-- Blog entries-->
        @forelse ($articles as $item)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <!-- Blog post-->
                <div class="card shadow">
                    <a href="{{ url('p/'.$item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/back/' .$item->img) }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small">
                            {{ $item->publish_date }} - <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a>
                        </div>
                        <h2 class="card-title h4">{{ $item->title }}</h2>
                        <p class="card-text">{!! Str::limit(strip_tags($item->desc), 150, '...') !!}</p>
                        <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <h4 class="text-danger">Kosong</h4>
            </div>
        @endforelse
    </div>
    

    <div class="pagination justify-content-center my-4">
        {{ $articles->onEachSide(5)->links() }}
    </div>

</div>
@endsection


