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
            <div class="card mb-4 shadow" data-aos="fade-up">
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
            <div class="card mb-4 shadow" data-aos="fade-in">
                <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{ asset('storage/'. $article->user->avatar) }}" class="img-fluid rounded-start avatar">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h4 class="card-title">Penulis</h4>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <p class="mb-0">Panggilan</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $article->user->nickname }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama Lengkap</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $article->user->full_name }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $article->user->email }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <p class="mb-0">Register</p>
                              </div>
                              <div class="col-sm-9">
                                @if ($article->user->role == 1)
                                    <p class="text-muted mb-0">Admin</p>
                                @elseif ($article->user->role == 2)
                                    <p class="text-muted mb-0">Moderator</p>
                                @else
                                    <p class="text-muted mb-0">Authorized Writer</p>
                                @endif
                            </div>
                        </div>
                        <div class="justify-content-end">
                            <p class="card-text">
                                <small class="text-muted">Terdaftar Pada {{ date('d-m-Y', strtotime($article->user->created_at)) }}</small>
                            </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        @include('front.layout.widget')
    </div>
</div>
@endsection


