@extends('front.layout.template')

@section('main')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="{{ asset('storage/back/' .$latest_post->img) }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $latest_post->publish_date }}</div>
                    <h2 class="card-title">{{ $latest_post->title }}</h2>
                    <p class="card-text">{!! Str::limit(strip_tags($latest_post->desc), 250, '...') !!}</p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @foreach ($articles as $item)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/back/' .$item->img) }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $item->publish_date }}</div>
                            <h2 class="card-title h4">{{ $item->title }}</h2>
                            <p class="card-text">{!! Str::limit(strip_tags($item->desc), 250, '...') !!}</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>     
                @endforeach
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        @include('front.layout.widget')
    </div>
</div>
@endsection


