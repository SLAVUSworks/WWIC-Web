<!-- Side widgets-->
<div class="col-lg-4" data-aos="fade-left">
    <!-- Search widget-->
    <div class="card mb-4 opacity shadow">
        <div class="card-header">Search</div>
        <div class="card-body">
           <form action="{{ route('search') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="keyword" placeholder="Cari disini ...">
                <button type="submit" class="btn btn-primary" id="button-search">Cari!</button>
            </div>
           </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 opacity shadow">
        <div class="card-header">Kategori</div>
        <div class="card-body">
            <div>
                @foreach ($categories as $item )
                    <span><a class="bg-primary badge unstyle" href="{{ url('category/'.$item->slug) }}">{{ $item->name }} ({{ $item->articles_count }})</a></span>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 opacity shadow">
        <div class="card-header">Artikel Populer</div>
        <div class="card-body">
            @foreach ($popular_posts as $item)
                {{-- <div class="card mb-3" style="max-height: 70px">
                    <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/back/'.$item->img) }}" alt="{{ $item->title }}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <p class="card-title"><a href="{{ url('p/'.$item->slug) }}">{{ $item->title }}</a></p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="card bg-dark text-white card-pop mb-3">
                <span class="notify-badge">Populer</span>
                <img src="{{ asset('storage/back/'.$item->img) }}" class="card-img img-fluid rounded-start" alt="{{ $item->title }}">
                <div class="card-img-overlay"> 
                  <h5 class="card-title"><a class="text-reset" href="{{ url('p/'.$item->slug) }}">{{ $item->title }}</a></h5>
                </div>
              </div>
            @endforeach
        </div>
    </div>
    <div class="card mb-4 opacity shadow">
        <div class="card-header">Facebook Page</div>
        <div class="card-body"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FWorldWitchesIndonesiaCommunity&tabs&width=380&height=150&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></div>
    </div>
    <div class="card mb-4 opacity shadow">
        <div class="card-header">Discord Server</div>
        <div class="card-body"><iframe src="https://discord.com/widget?id=846323175570931724&theme=dark" width="100%" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe></div>
    </div>
</div>