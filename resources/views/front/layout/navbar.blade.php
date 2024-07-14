<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="d-flex align-items-center flex-grow-1">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('front/img/wwic-logo.png') }}" width="30%" draggable="false"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/articles') }}">Artikel</a></li>
                @foreach($parentCategories as $parentCategory)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $parentCategory->name }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($parentCategory->children as $childCategory)
                        <li><a class="dropdown-item" href="{{ url('category/'.$childCategory->slug) }}">{{ $childCategory->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
