<nav>
    <div class="container navbar">

        <div class="logo">
            <a href="{{ route('home') }}">
                TRITIS
            </a>
        </div>

        <button class="hamburger" id="hamburgerBtn" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-menu" id="navMenu">
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
        position: relative;
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

    .hamburger {
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 26px;
        height: 20px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .hamburger span {
        display: block;
        height: 3px;
        width: 100%;
        background: #222;
        border-radius: 2px;
    }

    @media (max-width: 768px) {
        .hamburger {
            display: flex;
        }

        .nav-menu {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 70px;
            left: 0;
            width: 100%;
            background: white;
            border-top: 1px solid #eee;
            padding: 20px;
            gap: 18px;
            z-index: 50;
        }

        .nav-menu.active {
            display: flex;
        }
    }
</style>

<script>
    document.getElementById('hamburgerBtn').addEventListener('click', function () {
        document.getElementById('navMenu').classList.toggle('active');
    });
</script>
