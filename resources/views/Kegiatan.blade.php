@extends('layouts.app')

@section('title', 'Kegiatan - Padukuhan Tritis')

@section('content')

    {{-- HEADER --}}
    <section class="kegiatan-hero">

        <div class="container">

            <p class="eyebrow">
                KEGIATAN PADUKUHAN
            </p>

            <h1>
                Kegiatan Masyarakat Tritis
            </h1>

            <p>
                Berbagai kegiatan masyarakat yang dilaksanakan
                di Padukuhan Tritis.
            </p>

        </div>

    </section>


    {{-- KEGIATAN --}}
    <section class="section">

        <div class="container">

            <div class="section-title">

                <p class="eyebrow">
                    DOKUMENTASI
                </p>

                <h2>
                    Kegiatan Terbaru
                </h2>

                <p>
                    Dokumentasi kegiatan dan aktivitas masyarakat
                    Padukuhan Tritis.
                </p>

            </div>


            <div class="activity-grid">

    @forelse ($kegiatans as $kegiatan)

        <article class="activity-card">

            <div class="activity-image">

                @if ($kegiatan->gambar)
                    <img
                        src="{{ asset('storage/' . $kegiatan->gambar) }}"
                        alt="{{ $kegiatan->judul }}"
                    >
                @else
                    <img
                        src="{{ asset('images/tritis.jpg') }}"
                        alt="{{ $kegiatan->judul }}"
                    >
                @endif

            </div>

            <div class="activity-content">

                <span class="activity-date">
                    {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d F Y') }}
                </span>

                <h3>
                    {{ $kegiatan->judul }}
                </h3>

                <p>
                    {{ $kegiatan->deskripsi }}
                </p>

                @if ($kegiatan->lokasi)
                    <p>
                        📍 {{ $kegiatan->lokasi }}
                    </p>
                @endif

            </div>

        </article>

    @empty

        <p>
            Belum ada kegiatan yang tersedia.
        </p>

    @endforelse

</div>
        </div>

    </section>


    {{-- AJAKAN --}}
    <section class="activity-bottom">

        <div class="container">

            <div class="bottom-content">

                <p class="eyebrow">
                    MASYARAKAT TRITIS
                </p>

                <h2>
                    Kebersamaan Masyarakat
                </h2>

                <p>
                    Kegiatan masyarakat menjadi salah satu bagian
                    penting dalam menjaga kebersamaan dan hubungan
                    antarwarga Padukuhan Tritis.
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

    .eyebrow {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 15px;
        text-transform: uppercase;
    }


    /* =========================
       HERO
    ========================== */

    .kegiatan-hero {

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

    .kegiatan-hero h1 {
        font-size: 55px;
        margin-bottom: 20px;
    }

    .kegiatan-hero p {
        max-width: 650px;
        line-height: 1.8;
    }


    /* =========================
       SECTION TITLE
    ========================== */

    .section-title {
        max-width: 700px;
        margin-bottom: 45px;
    }

    .section-title h2 {
        font-size: 38px;
        margin-bottom: 15px;
    }

    .section-title p {
        line-height: 1.8;
    }


    /* =========================
       ACTIVITY GRID
    ========================== */

    .activity-grid {

        display: grid;

        grid-template-columns:
            repeat(2, 1fr);

        gap: 30px;
    }


    /* =========================
       CARD
    ========================== */

    .activity-card {

        background: white;

        border: 1px solid #e5e9e5;

        border-radius: 15px;

        overflow: hidden;

        transition:
            transform 0.2s ease,
            box-shadow 0.2s ease;
    }

    .activity-card:hover {

        transform: translateY(-5px);

        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.08);
    }


    /* =========================
       IMAGE
    ========================== */

    .activity-image {

        width: 100%;
        height: 280px;
    }

    .activity-image img {

        width: 100%;
        height: 100%;

        object-fit: cover;
    }


    /* =========================
       CONTENT
    ========================== */

    .activity-content {

        padding: 30px;
    }

    .activity-date {

        font-size: 12px;

        font-weight: 700;

        letter-spacing: 1.5px;
    }

    .activity-content h3 {

        font-size: 24px;

        margin: 12px 0;
    }

    .activity-content p {

        line-height: 1.8;

        margin: 0;
    }


    /* =========================
       BOTTOM
    ========================== */

    .activity-bottom {

        padding: 90px 0;

        background: #eef3ee;
    }

    .bottom-content {

        max-width: 750px;
    }

    .bottom-content h2 {

        font-size: 38px;

        margin-bottom: 20px;
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

        .kegiatan-hero {
            min-height: 350px;
        }

        .kegiatan-hero h1 {
            font-size: 40px;
        }

        .activity-grid {
            grid-template-columns: 1fr;
        }

        .activity-image {
            height: 230px;
        }

        .section-title h2 {
            font-size: 30px;
        }

    }

</style>