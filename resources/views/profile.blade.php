@extends('layouts.app')

@section('title', 'Profil Padukuhan Tritis')

@section('content')

    {{-- =========================
        HEADER HALAMAN
    ========================== --}}
    <section class="profile-hero">

        <div class="container">

            <p class="eyebrow">
                PROFIL PADUKUHAN
            </p>

            <h1>
                Padukuhan Tritis
            </h1>

            <p class="hero-description">
                Mengenal lebih dekat wilayah, masyarakat,
                kehidupan, dan potensi Padukuhan Tritis.
            </p>

        </div>

    </section>


    {{-- =========================
        TENTANG TRITIS
    ========================== --}}
    <section class="section">

        <div class="container">

            <div class="two-column">

                <div class="image-wrapper">
                    <img
                        src="{{ asset('images/tritis.jpg') }}"
                        alt="Padukuhan Tritis"
                    >
                </div>

                <div class="content">

                    <p class="eyebrow">
                        TENTANG TRITIS
                    </p>

                    <h2>
                        Mengenal Padukuhan Tritis
                    </h2>

                    <p>
                        Padukuhan Tritis merupakan salah satu
                        padukuhan yang berada di Kalurahan Ngargosari,
                        Kapanewon Samigaluh, Kabupaten Kulon Progo,
                        Daerah Istimewa Yogyakarta.
                    </p>

                    <p>
                        Wilayah Tritis memiliki lingkungan yang
                        masih asri dengan kehidupan masyarakat
                        yang dekat dengan kegiatan sosial,
                        lingkungan, pertanian, dan berbagai
                        aktivitas kemasyarakatan.
                    </p>

                    <p>
                        Website ini dibuat sebagai media informasi
                        untuk memperkenalkan Padukuhan Tritis,
                        mulai dari profil wilayah, masyarakat,
                        potensi, kegiatan, hingga informasi lainnya.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
        DATA SINGKAT
    ========================== --}}
    <section class="section section-light">

        <div class="container">

            <div class="section-title">

                <p class="eyebrow">
                    DATA SINGKAT
                </p>

                <h2>
                    Tritis dalam Data
                </h2>

                <p>
                    Informasi dasar mengenai Padukuhan Tritis.
                </p>

            </div>


            <div class="stats">

                <div class="stat-card">
                    <span class="stat-icon">🏘️</span>

                    <strong>5</strong>

                    <span>
                        RT
                    </span>
                </div>


                <div class="stat-card">
                    <span class="stat-icon">👨‍👩‍👧‍👦</span>

                    <strong>113</strong>

                    <span>
                        Kepala Keluarga
                    </span>
                </div>


                <div class="stat-card">
                    <span class="stat-icon">👥</span>

                    <strong>341</strong>

                    <span>
                        Jumlah Penduduk
                    </span>
                </div>

            </div>

        </div>

    </section>


    {{-- =========================
        KEHIDUPAN MASYARAKAT
    ========================== --}}
    <section class="section">

        <div class="container">

            <div class="section-title">

                <p class="eyebrow">
                    KEHIDUPAN MASYARAKAT
                </p>

                <h2>
                    Masyarakat Padukuhan Tritis
                </h2>

            </div>


            <div class="information-grid">

                <div class="information-card">

                    <h3>
                        Gotong Royong
                    </h3>

                    <p>
                        Kegiatan gotong royong menjadi bagian
                        dari kehidupan sosial masyarakat dalam
                        menjaga lingkungan dan kebersamaan warga.
                    </p>

                </div>


                <div class="information-card">

                    <h3>
                        Kegiatan Keagamaan
                    </h3>

                    <p>
                        Masyarakat turut melaksanakan berbagai
                        kegiatan keagamaan dan kegiatan sosial
                        yang dilaksanakan di lingkungan padukuhan.
                    </p>

                </div>


                <div class="information-card">

                    <h3>
                        Kegiatan Masyarakat
                    </h3>

                    <p>
                        Berbagai kegiatan masyarakat dilaksanakan
                        untuk mempererat hubungan antarwarga dan
                        meningkatkan kebersamaan.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
        KONDISI WILAYAH
    ========================== --}}
    <section class="section section-light">

        <div class="container">

            <div class="two-column reverse-mobile">

                <div class="content">

                    <p class="eyebrow">
                        KONDISI WILAYAH
                    </p>

                    <h2>
                        Lingkungan Tritis
                    </h2>

                    <p>
                        Padukuhan Tritis berada di kawasan
                        perbukitan dengan lingkungan yang
                        memiliki suasana alami dan asri.
                    </p>

                    <p>
                        Kondisi wilayah tersebut menjadi salah
                        satu faktor yang mendukung keberadaan
                        berbagai potensi masyarakat, terutama
                        pada bidang pertanian, perkebunan,
                        dan wisata.
                    </p>

                </div>


                <div class="image-wrapper">

                    <img
                        src="{{ asset('images/tritis.jpg') }}"
                        alt="Lingkungan Padukuhan Tritis"
                    >

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
        PEMERINTAHAN PADUKUHAN
    ========================== --}}
    <section class="section">

        <div class="container">

            <div class="section-title">

                <p class="eyebrow">
                    PEMERINTAHAN
                </p>

                <h2>
                    Pemerintahan Padukuhan
                </h2>

                <p>
                    Struktur pemerintahan dan pengelolaan
                    masyarakat di tingkat padukuhan.
                </p>

            </div>


            <div class="leader-card">

                <div class="leader-photo">

                <div class="photo-placeholder">
                    <img
                        src="{{ asset('images/dukuh.jpg') }}"
                        alt="Dukuh Tritis"
                    >    
                </div>

                </div>


                <div class="leader-information">

                    <p class="position">
                        DUKUH TRITIS
                    </p>

                    <h3>
                        Tri Ariwibowo
                    </h3>

                    <p>
                        Dukuh merupakan bagian dari pemerintahan
                        padukuhan yang membantu dalam penyelenggaraan
                        pemerintahan serta pelayanan kepada masyarakat.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
        LOKASI
    ========================== --}}
    <section class="location-section">

        <div class="container">

            <div class="location-content">

                <p class="eyebrow">
                    LOKASI
                </p>

                <h2>
                    Padukuhan Tritis
                </h2>

                <p>
                    Kalurahan Ngargosari, Kapanewon Samigaluh,
                    Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta.
                </p>

                <a href="https://maps.app.goo.gl/3bmbmDuuiUeGkEjA6" class="location-button" target="_blank" rel="noopener noreferrer">
    Lihat Lokasi
</a>
<small>
    <a href="https://maps.app.goo.gl/3bmbmDuuiUeGkEjA6" target="_blank" rel="noopener noreferrer">
        
    </a>
</small>

            </div>

        </div>

    </section>

@endsection


{{-- =========================
    CSS
========================== --}}

<style>

    /* GENERAL */

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

    p {
        line-height: 1.8;
    }


    /* HERO */

    .profile-hero {
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

    .profile-hero h1 {
        font-size: 60px;
        margin-bottom: 20px;
    }

    .hero-description {
        max-width: 600px;
        font-size: 17px;
    }


    /* TWO COLUMN */

    .two-column {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 70px;
        align-items: center;
    }

    .image-wrapper img {
        width: 100%;
        height: 430px;

        object-fit: cover;

        border-radius: 15px;
    }

    .content p {
        margin-bottom: 15px;
    }


    /* SECTION TITLE */

    .section-title {
        max-width: 700px;
        margin-bottom: 45px;
    }


    /* STATS */

    .stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* Ubah dari 4 menjadi 3 */
        gap: 20px;
        justify-content: center; /* Tambahkan ini untuk memusatkan */
   }

    .stat-card {
        background: white;

        padding: 35px 20px;

        text-align: center;

        border-radius: 12px;

        border: 1px solid #e8ece8;
    }

    .stat-icon {
        display: block;
        font-size: 28px;
        margin-bottom: 12px;
    }

    .stat-card strong {
        display: block;
        font-size: 32px;
        margin-bottom: 8px;
    }

    .stat-card > span:last-child {
        font-size: 14px;
    }


    /* INFORMATION */

    .information-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .information-card {
        padding: 35px;

        border: 1px solid #e8ece8;

        border-radius: 12px;

        background: white;
    }

    .information-icon {
        font-size: 30px;
        margin-bottom: 20px;
    }

    .information-card h3 {
        font-size: 21px;
        margin-bottom: 12px;
    }


    /* LEADER */

    .leader-card {
        max-width: 800px;

        display: grid;
        grid-template-columns: 220px 1fr;

        gap: 35px;

        padding: 35px;

        border: 1px solid #e8ece8;

        border-radius: 15px;

        background: white;
    }

    .photo-placeholder {
        height: 220px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #e9ece9;

        border-radius: 12px;

        color: #666;
    }

    .position {
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.5px;
        margin-bottom: 10px;
    }

    .leader-information h3 {
        font-size: 28px;
        margin-bottom: 15px;
    }


    /* LOCATION */

    .location-section {
        padding: 80px 0;

        background: #eef3ee;
    }

    .location-content {
        max-width: 700px;
    }

    .location-button {
        display: inline-block;

        margin-top: 20px;

        padding: 13px 25px;

        background: #222;
        color: white;

        border-radius: 6px;

        font-weight: 600;
    }


    /* MOBILE */

    @media (max-width: 768px) {

        .section {
            padding: 60px 0;
        }

        .profile-hero {
            min-height: 350px;
        }

        .profile-hero h1 {
            font-size: 40px;
        }

        h2 {
            font-size: 30px;
        }

        .two-column {
            grid-template-columns: 1fr;
            gap: 35px;
        }

        .image-wrapper img {
            height: 280px;
        }

        .stats {
            grid-template-columns: 1fr 1fr;
        }

        .information-grid {
            grid-template-columns: 1fr;
        }

        .leader-card {
            grid-template-columns: 1fr;
        }
        
        

        .photo-placeholder {
            height: 280px;
        }

    }
    .leader-photo img {
           width: 100%;
           height: 220px;
           object-fit: cover;
           border-radius: 12px;
        }
</style>