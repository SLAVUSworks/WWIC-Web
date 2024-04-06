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
                    <span><a class="bg-primary badge unstyle" href="">{{ $item->name }}</a></span>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 opacity shadow">
        <div class="card-header">Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
    </div>
</div>