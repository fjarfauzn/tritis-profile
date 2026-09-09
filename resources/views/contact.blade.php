@extends('layouts.app')

@section('title', 'Kontak - Padukuhan Tritis')

@section('content')

<section class="kontak-hero">
    <div class="container">
        <p class="eyebrow">HUBUNGI KAMI</p>
        <h1>Kontak Padukuhan Tritis</h1>
        <p>
            Informasi kontak dan lokasi Padukuhan Tritis untuk memudahkan
            masyarakat maupun pengunjung mendapatkan informasi.
        </p>
    </div>
</section>


<section class="section">
    <div class="container">

        <div class="section-title">
            <p class="eyebrow"></p>
            <h2>Informasi Kontak</h2>
            <p>
                Silakan menghubungi pihak Padukuhan Tritis untuk memperoleh
                informasi lebih lanjut mengenai kegiatan dan pelayanan padukuhan.
            </p>
        </div>


        <div class="contact-grid">

            <div class="contact-card">
                <div class="contact-icon">📍</div>

                <h3>Alamat</h3>

                <p>
                    Padukuhan Tritis<br>
                    Kalurahan Ngargosari<br>
                    Kapanewon Samigaluh<br>
                    Kabupaten Kulon Progo<br>
                    Daerah Istimewa Yogyakarta
                </p>
            </div>


            <div class="contact-card">
                <div class="contact-icon">👤</div>

                <h3>Dukuh</h3>

                <p>
                    <strong>Tri Ariwibowo</strong>
                </p>

                <span>
                    Dukuh Padukuhan Tritis
                </span>
            </div>


            <div class="contact-card">
                <div class="contact-icon">💬</div>

                <h3>Media Informasi</h3>

                <p>
                    Informasi media sosial dan kontak resmi
                    Padukuhan Tritis akan ditambahkan setelah
                    data resmi tersedia.
                </p>
            </div>

        </div>

    </div>
</section>


<section class="contact-location">

    <div class="container">

        <div class="location-box">

            <div>
                <p class="eyebrow">LOKASI</p>

                <h2>Padukuhan Tritis</h2>

                <p>
                    Padukuhan Tritis merupakan bagian dari
                    Kalurahan Ngargosari, Kapanewon Samigaluh,
                    Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta.
                </p>
            </div>

            <div class="map-placeholder">
                <span>📍</span>
                <p>Lokasi Google Maps</p>
                <small>
                   <a href="https://maps.app.goo.gl/3bmbmDuuiUeGkEjA6" target="_blank" rel="noopener noreferrer">
                       Buka di Google Maps
                    </a>
                </small>
            </div>

        </div>

    </div>

</section>

@endsection

<style>
/* =========================
   KONTAK
========================= */

.kontak-hero {
    min-height: 420px;
    display: flex;
    align-items: center;
    text-align: center;
    color: white;
    background:
        linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)),
        url('/images/tritis.jpg') center/cover;
}

.kontak-hero .container {
    width: 90%;
    max-width: 900px;
    margin: auto;
}

.kontak-hero h1 {
    font-size: 55px;
    margin: 15px 0;
}

.kontak-hero p:not(.eyebrow) {
    font-size: 18px;
    line-height: 1.7;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-top: 50px;
}

.contact-card {
    padding: 35px 30px;
    border-radius: 16px;
    background: #f8faf8;
    text-align: center;
    border: 1px solid #e5ebe5;
}

.contact-icon {
    font-size: 38px;
    margin-bottom: 15px;
}

.contact-card h3 {
    margin-bottom: 15px;
    font-size: 22px;
}

.contact-card p {
    line-height: 1.7;
    color: #555;
}

.contact-card span {
    color: #777;
}

.contact-location {
    padding: 80px 0;
    background: #f1f6f1;
}

.location-box {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
}

.location-box h2 {
    font-size: 38px;
    margin: 15px 0;
}

.location-box p {
    line-height: 1.8;
    color: #555;
}

.map-placeholder {
    min-height: 280px;
    border-radius: 16px;
    background: #e4ebe4;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.map-placeholder span {
    font-size: 45px;
}

.map-placeholder p {
    margin: 10px 0 5px;
    font-weight: bold;
    color: #333;
}

.map-placeholder small {
    color: #777;
    max-width: 300px;
}


/* RESPONSIVE */

@media (max-width: 768px) {

    .kontak-hero h1 {
        font-size: 40px;
    }

    .contact-grid {
        grid-template-columns: 1fr;
    }

    .location-box {
        grid-template-columns: 1fr;
    }

}

@media (max-width: 480px) {

    .kontak-hero {
        min-height: 350px;
    }

    .kontak-hero h1 {
        font-size: 32px;
    }

}

</style>
