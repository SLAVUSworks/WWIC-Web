<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="d-flex align-items-center flex-grow-1">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('storage/photos/1/Images/wwic-logo.png') }}" width="30%" draggable="false"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/articles') }}">Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">WWIC</a></li>
            </ul>
        </div>
    </div>
</nav>
