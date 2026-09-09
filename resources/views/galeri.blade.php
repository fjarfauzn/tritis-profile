@extends('layouts.app')

@section('title', 'Galeri - Padukuhan Tritis')

@section('content')

    {{-- HERO --}}
    <section class="galeri-hero">

        <div class="container">

            <p class="eyebrow">
                GALERI PADUKUHAN
            </p>

            <h1>
                Galeri Tritis
            </h1>

            <p>
                Dokumentasi kegiatan, lingkungan, dan kehidupan
                masyarakat Padukuhan Tritis.
            </p>

        </div>

    </section>


    {{-- GALERI --}}
    <section class="section">

        <div class="container">

            <div class="section-title">

                <p class="eyebrow">
                    DOKUMENTASI
                </p>

                <h2>
                    Momen Tritis
                </h2>

                <p>
                    Kumpulan dokumentasi kegiatan dan berbagai
                    aktivitas masyarakat Padukuhan Tritis.
                </p>

            </div>


            <div class="gallery-grid">

    @forelse ($galeris as $galeri)

        <div class="gallery-item">

            <img
                src="{{ asset('storage/' . $galeri->gambar) }}"
                alt="{{ $galeri->judul }}"
            >

            <div class="gallery-caption">

                <h3>
                    {{ $galeri->judul }}
                </h3>

                @if ($galeri->deskripsi)
                    <p>
                        {{ $galeri->deskripsi }}
                    </p>
                @endif

            </div>

        </div>

    @empty

        <p>
            Belum ada dokumentasi yang tersedia.
        </p>

    @endforelse

</div>

        </div>

    </section>


    {{-- PENUTUP --}}
    <section class="gallery-bottom">

        <div class="container">

            <div class="bottom-content">

                <p class="eyebrow">
                    PADUKUHAN TRITIS
                </p>

                <h2>
                    Setiap Momen Memiliki Cerita
                </h2>

                <p>
                    Dokumentasi menjadi bagian dari upaya untuk
                    menyimpan dan memperkenalkan berbagai aktivitas
                    masyarakat Padukuhan Tritis.
                </p>

            </div>

        </div>

    </section>

@endsection


<style>

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


    /* HERO */

    .galeri-hero {

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

    .galeri-hero h1 {
        font-size: 55px;
        margin-bottom: 20px;
    }

    .galeri-hero p {
        max-width: 650px;
        line-height: 1.8;
    }


    /* SECTION TITLE */

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


    /* GALLERY */

    .gallery-grid {

        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 20px;
    }

    .gallery-item {

        height: 280px;

        overflow: hidden;

        border-radius: 12px;

        background: #eee;
    }

    .gallery-item img {

        width: 100%;
        height: 100%;

        object-fit: cover;

        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {

        transform: scale(1.05);
    }


    /* BOTTOM */

    .gallery-bottom {

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


    /* MOBILE */

    @media (max-width: 768px) {

        .section {
            padding: 60px 0;
        }

        .galeri-hero {
            min-height: 350px;
        }

        .galeri-hero h1 {
            font-size: 40px;
        }

        .section-title h2 {
            font-size: 30px;
        }

        .gallery-grid {
            grid-template-columns: 1fr 1fr;
        }

        .gallery-item {
            height: 200px;
        }

    }


    @media (max-width: 480px) {

        .gallery-grid {
            grid-template-columns: 1fr;
        }

        .gallery-item {
            height: 250px;
        }

    }

</style>