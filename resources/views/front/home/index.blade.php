@extends('front.layout.template')

@push('meta')
    <meta name="description" value="Langit dan Lautan yang Menguhubungkan Kita, Sampai Jumpa Dihamparan Langit yang Luas dan Lautan yang Biru | Website World Witches Indonesia Community, Seputar Informasi Franchise World Witches serta Kegiatan Komunitas">
    <meta name="keyword" value="world witches, strike witches, world witches community, world witches indonesia community, wwic, world witches wiki, brave witches, luminous witches, w witch, s witch, l witch">
    <meta property="og:title" content="WWIC">
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="World Witches Indonesia Community">
    <meta property="og:description" value="Langit dan Lautan yang Menguhubungkan Kita, Sampai Jumpa Dihamparan Langit yang Luas dan Lautan yang Biru | Website World Witches Indonesia Community, Seputar Informasi Franchise World Witches serta Kegiatan Komunitas">
    <meta property="og:image" value="{{ asset('front/img/wwic-bg.jpg') }}">
@endpush

@section('nama-tab', 'WWIC')

@section('main')
@include('front.layout.header')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow opacity-b text-white" data-aos="fade-right">
                <a href="{{ url('p/'.$latest_post->slug) }}"><img class="card-img-top featured-img" src="{{ asset('storage/back/' .$latest_post->img) }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-white">{{ $latest_post->publish_date }} | {{ $latest_post->category->name }} | {{ $latest_post->user->nickname }}</div>
                    <h2 class="card-title">{{ $latest_post->title }}</h2>
                    <p class="card-text">{!! Str::limit(strip_tags($latest_post->desc), 250, '...') !!}</p>
                    <a class="btn btn-primary" href="{{ url('p/'.$latest_post->slug) }}">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @foreach ($articles as $item)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4 shadow opacity-b text-white" data-aos="fade-up">
                        <a href="{{ url('p/'.$item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/back/' .$item->img) }}" alt="..." /></a>
                        <div class="card-body card-height">
                            <div class="small text-white">
                                {{ $item->publish_date }} | {{ $item->user->nickname }} | <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a>
                            </div>
                            <h2 class="card-title h4">{{ $item->title }}</h2>
                            <p class="card-text">{!! Str::limit(strip_tags($item->desc), 150, '...') !!}</p>
                            <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                        </div>
                    </div>
                </div>     
                @endforeach
            </div>
            <!-- Pagination-->
            <div class="pagination justify-content-center my-4" data-aos="zoom-in">
                {{ $articles->onEachSide(5)->links() }}
            </div>
        </div>
        @include('front.layout.widget')
    </div>
</div>
@endsection


