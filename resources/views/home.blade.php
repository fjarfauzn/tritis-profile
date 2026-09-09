@extends('layouts.app')

@section('title', 'Beranda - Padukuhan Tritis')

@section('content')

    {{-- HERO --}}
    <section class="hero">
        <div class="hero-overlay">
            <div class="container hero-content">

                <p class="hero-label">
                    WEBSITE PROFIL PADUKUHAN
                </p>

                <h1>
                    Selamat Datang di<br>
                    Padukuhan Tritis
                </h1>

                <p>
                    Mengenal lebih dekat kehidupan, masyarakat,
                    dan potensi Padukuhan Tritis.
                </p>

                <a href="#" class="btn">
                    Jelajahi Tritis
                </a>

            </div>
        </div>
    </section>


    {{-- TENTANG --}}
    <section class="about">
        <div class="container">

            <p class="section-label">TENTANG KAMI</p>

            <h2>
                Mengenal Padukuhan Tritis
            </h2>

            <p>
                Padukuhan Tritis merupakan salah satu wilayah
                yang berada di Kalurahan Ngargosari, Kapanewon
                Samigaluh, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta.
            </p>

        </div>
    </section>


    {{-- POTENSI --}}
    <section class="potensi">
        <div class="container">

            <p class="section-label">POTENSI</p>

            <h2>
                Potensi Padukuhan Tritis
            </h2>

            <div class="cards">

                <div class="card">
                    <h3>🌱 Perkebunan</h3>
                    <p>
                        Mengenal potensi perkebunan yang dimiliki
                        masyarakat Padukuhan Tritis.
                    </p>
                </div>

                <div class="card">
                    <h3>🏞️ Wisata</h3>
                    <p>
                        Menjelajahi potensi wisata dan keindahan
                        alam di Padukuhan Tritis.
                    </p>
                </div>

                <div class="card">
                    <h3>🧺 UMKM</h3>
                    <p>
                        Mengenal produk dan usaha masyarakat
                        Padukuhan Tritis.
                    </p>
                </div>

            </div>

        </div>
    </section>

@endsection


<style>

    .hero {
        min-height: 600px;
        background-image:
            linear-gradient(
                rgba(0, 0, 0, 0.45),
                rgba(0, 0, 0, 0.45)
            ),
            url('/images/tritis.jpg');

        background-size: cover;
        background-position: center;

        display: flex;
        align-items: center;
    }

    .hero-content {
        color: white;
        padding: 80px 0;
    }

    .hero-label,
    .section-label {
        font-size: 14px;
        font-weight: bold;
        letter-spacing: 2px;
        margin-bottom: 15px;
    }

    .hero h1 {
        font-size: 55px;
        line-height: 1.1;
        margin-bottom: 20px;
    }

    .hero p {
        max-width: 600px;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .btn {
        display: inline-block;
        padding: 13px 25px;
        background: white;
        color: #222;
        border-radius: 5px;
        font-weight: bold;
    }

    .about,
    .potensi {
        padding: 80px 0;
    }

    .about h2,
    .potensi h2 {
        font-size: 35px;
        margin-bottom: 20px;
    }

    .about p {
        max-width: 800px;
        line-height: 1.8;
    }

    .cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-top: 35px;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        border: 1px solid #eee;
    }

    .card h3 {
        margin-bottom: 15px;
    }

    .card p {
        line-height: 1.7;
    }

    @media (max-width: 768px) {

        .hero h1 {
            font-size: 38px;
        }

        .cards {
            grid-template-columns: 1fr;
        }

    }

</style>