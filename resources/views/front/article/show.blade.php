@extends('front.layout.template')

@section('main')
<!-- Page <content-->
    <br>
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow">
                <a href="{{ url('p/'.$article->slug) }}"><img class="card-img-top single-img" src="{{ asset('storage/back/' .$article->img) }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $article->publish_date }} - {{ $article->category->name }}</div>
                    <h1 class="card-title">{{ $article->title }}</h1>
                    <p class="card-text">{!! $article->desc !!}</p>
                </div>
            </div>


        </div>
        @include('front.layout.widget')
    </div>
</div>
@endsection


