<!-- Side widgets-->
<div class="col-lg-4">
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
                    <span><a class="bg-primary badge unstyle" href="{{ url('category/'.$item->slug) }}">{{ $item->name }}</a></span>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 opacity shadow">
        <div class="card-header">Discord Server</div>
        <div class="card-body"><iframe src="https://discord.com/widget?id=846323175570931724&theme=dark" width="100%" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe></div>
    </div>
    <div class="card mb-4 opacity shadow">
        <div class="card-header">Facebook Page</div>
        <div class="card-body"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FWorldWitchesIndonesiaCommunity&tabs&width=380&height=150&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></div>
    </div>
</div>