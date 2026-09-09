@extends('layouts.app')

@section('title', 'Potensi - Padukuhan Tritis')

@section('content')

    {{-- =========================
        HEADER
    ========================== --}}
    <section class="potensi-hero">

        <div class="container">

            <p class="eyebrow">
                POTENSI PADUKUHAN
            </p>

            <h1>
                Mengenal Potensi Tritis
            </h1>

            <p>
                Berbagai potensi alam, wisata, dan ekonomi
                yang dimiliki Padukuhan Tritis.
            </p>

        </div>

    </section>


    {{-- =========================
        INTRO
    ========================== --}}
    <section class="section">

        <div class="container intro">

            <p class="eyebrow">
                POTENSI TRITIS
            </p>

            <h2>
                Kekayaan dan Potensi Masyarakat
            </h2>

            <p>
                Padukuhan Tritis memiliki berbagai potensi
                yang dapat dikembangkan dan diperkenalkan
                kepada masyarakat luas. Potensi tersebut
                meliputi sektor perkebunan, wisata, pertanian,
                serta usaha masyarakat.
            </p>

        </div>

    </section>


    {{-- =========================
        DAFTAR POTENSI
    ========================== --}}
    <section class="section section-light">

        <div class="container">

            <div class="section-title">

                <p class="eyebrow">
                    POTENSI UTAMA
                </p>

                <h2>
                    Jelajahi Tritis
                </h2>

            </div>


            <div class="potensi-grid">

@forelse ($potensis as $potensi)

    <article class="potensi-card">

        <div class="potensi-image">

            @if ($potensi->gambar)

                <img
                    src="{{ asset('storage/' . $potensi->gambar) }}"
                    alt="{{ $potensi->judul }}"
                >

            @else

                <img
                    src="{{ asset('images/tritis.jpg') }}"
                    alt="{{ $potensi->judul }}"
                >

            @endif

        </div>


        <div class="potensi-content">

            @if ($potensi->kategori)

                <span class="category">
                    {{ $potensi->kategori }}
                </span>

            @endif


            <h3>
                {{ $potensi->judul }}
            </h3>


            <p>
                {{ $potensi->deskripsi }}
            </p>


            <a href="#" class="detail-link">
                Selengkapnya →
            </a>

        </div>

    </article>

@empty

    <p>
        Belum ada data potensi yang tersedia.
    </p>

@endforelse

</div>

        </div>

    </section>


    {{-- =========================
        AJAKAN
    ========================== --}}
    <section class="potensi-bottom">

        <div class="container">

            <div class="bottom-content">

                <p class="eyebrow">
                    POTENSI LOKAL
                </p>

                <h2>
                    Mari Mengenal Tritis Lebih Dekat
                </h2>

                <p>
                    Potensi yang dimiliki Padukuhan Tritis
                    merupakan bagian dari kekayaan masyarakat
                    dan lingkungan yang perlu dijaga serta
                    dikembangkan bersama.
                </p>

            </div>

        </div>

    </section>

@endsection


<style>

    /* =========================
       GENERAL
    ========================== */

    .container {
        width: 90%;
        max-width: 1200px;
        margin: auto;
    }

    .section {
        padding: 90px 0;
    }

    .section-light {
        background: #f7f9f7;
    }

    .eyebrow {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    h2 {
        font-size: 38px;
        line-height: 1.2;
        margin-bottom: 20px;
    }


    /* =========================
       HERO
    ========================== */

    .potensi-hero {
        min-height: 420px;

        display: flex;
        align-items: center;

        background-image:
            linear-gradient(
                rgba(0, 0, 0, 0.45),
                rgba(0, 0, 0, 0.45)
            ),
            url('/images/tritis.jpg');

        background-size: cover;
        background-position: center;

        color: white;
    }

    .potensi-hero h1 {
        font-size: 55px;
        margin-bottom: 20px;
    }

    .potensi-hero p {
        max-width: 650px;
        line-height: 1.8;
    }


    /* =========================
       INTRO
    ========================== */

    .intro {
        max-width: 850px;
    }

    .intro p:last-child {
        line-height: 1.8;
    }


    /* =========================
       SECTION TITLE
    ========================== */

    .section-title {
        margin-bottom: 40px;
    }


    /* =========================
       POTENSI CARD
    ========================== */

    .potensi-grid {
        display: grid;

        grid-template-columns:
            repeat(2, 1fr);

        gap: 30px;
    }

    .potensi-card {
        background: white;

        border-radius: 15px;

        overflow: hidden;

        border: 1px solid #e5e9e5;

        transition:
            transform 0.2s ease,
            box-shadow 0.2s ease;
    }

    .potensi-card:hover {
        transform: translateY(-5px);

        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .potensi-image {
        width: 100%;
        height: 260px;
    }

    .potensi-image img {
        width: 100%;
        height: 100%;

        object-fit: cover;
    }

    .potensi-content {
        padding: 30px;
    }

    .category {
        font-size: 12px;

        font-weight: 700;

        letter-spacing: 1.5px;
    }

    .potensi-content h3 {
        font-size: 25px;

        margin: 12px 0;
    }

    .potensi-content p {
        line-height: 1.8;

        margin-bottom: 20px;
    }

    .detail-link {
        font-weight: 600;
    }


    /* =========================
       BOTTOM
    ========================== */

    .potensi-bottom {
        padding: 90px 0;

        background: #eef3ee;
    }

    .bottom-content {
        max-width: 750px;
    }

    .bottom-content p:last-child {
        line-height: 1.8;
    }


    /* =========================
       MOBILE
    ========================== */

    @media (max-width: 768px) {

        .section {
            padding: 60px 0;
        }

        .potensi-hero {
            min-height: 350px;
        }

        .potensi-hero h1 {
            font-size: 40px;
        }

        h2 {
            font-size: 30px;
        }

        .potensi-grid {
            grid-template-columns: 1fr;
        }

        .potensi-image {
            height: 230px;
        }

    }

</style>