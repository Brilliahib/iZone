<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand mb-0 d-flex gap-3 h-full align-items-center" href="/">
            <h2 class="font-big text-black fw-semibold mb-0">iZone</h2>
            <img src="{{ asset('img/verified.png') }}" alt="" width="14px" height="14px"
                style="margin-left: -10px;">
        </a>
        <button class="navbar-toggler m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Ganti dengan SVG icon -->
            <div class="p-1 rounded" style="background-color: #efefef;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000"
                    class="bi bi-list fw-extrabold" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </div>
            <!-- /Ganti dengan SVG icon -->
        </button>
        <div class="collapse navbar-collapse list-navbar" id="navbarNav" style="margin-left: -10rem;">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('projects') ? 'active' : '' }}" href="/projects">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li>
                    <a style="display: flex; align-items: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                            class="bi bi-cart3" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                        <span style="margin-left: 5px;">3</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
