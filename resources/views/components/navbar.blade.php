<nav>
    <div class="container navbar">

        <div class="logo">
            <a href="{{ route('home') }}">
                TRITIS
            </a>
        </div>

        <div class="nav-menu">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('profile') }}">Profil</a>
            <a href="{{ route('potensi') }}">Potensi</a>
            <a href="{{ route('kegiatan') }}">Kegiatan</a>
            <a href="{{ route('galeri') }}">Galeri</a>
            <a href="{{ route('kontak') }}">Kontak</a>
        </div>

    </div>
</nav>

<style>
    nav {
        background: white;
        border-bottom: 1px solid #eee;
    }

    .navbar {
        min-height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo {
        font-size: 22px;
        font-weight: bold;
    }

    .nav-menu {
        display: flex;
        gap: 25px;
    }

    .nav-menu a {
        font-size: 15px;
    }

    .nav-menu a:hover {
        opacity: 0.6;
    }

    @media (max-width: 768px) {
        .nav-menu {
            display: none;
        }
    }
</style>