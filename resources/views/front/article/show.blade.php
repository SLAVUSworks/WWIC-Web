@extends('front.layout.template')

@section('nama-tab', $article->title)

@section('main')
<!-- Page <content-->
    <br>
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow">
                <a href="{{ url('p/'.$article->slug) }}"><img class="card-img-top single-img" src="{{ asset('storage/back/' .$article->img) }}" alt="{{ $article->title }}" /></a>
                <div class="card-body">
                    <div class="small text-muted">
                        <span class="ml-2"><i class="fa-solid fa-calendar"></i>  {{ $article->publish_date }} </span>
                        <span class="ml-2"><i class="fa-solid fa-list"></i>  {{ $article->category->name }} </span>
                        <span class="ml-2"><i class="fa-solid fa-eye"></i>  {{ $article->views }} </span>
                    </div>
                    <h1 class="card-title">{{ $article->title }}</h1>
                    <p class="card-text">{!! $article->desc !!}</p>
                </div>
            </div>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </div>
        @include('front.layout.widget')
    </div>
</div>
@endsection


