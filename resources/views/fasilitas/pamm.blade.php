@extends('layouts.main')
<main id="main">
@include('partials.breadcrumbs')

<!-- ======= Projet Details Section ======= -->
<section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="position-relative h-100">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="/img/projects/pamm.webp" alt="" />
            </div>

            <div class="swiper-slide">
              <img src="/img/projects/pamm1.webp" alt="" />
            </div>

            <div class="swiper-slide">
              <img src="/img/projects/pamm2.webp" alt="" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>

      <div class="row justify-content-between gy-4 mt-4">
        <div class="col-lg-12">
          <div class="portfolio-description">
            <h2>PAMM</h2>
            <p>
              <i>Percent Allocation Management Module</i> adalah layanan spesial yang memungkinkan anda meraih profit tanpa perlu trading sendiri. Hanya perlu deposit balance ke akun manajer, anda akan menerima remunerasi dari profit
              yang dihasilkan dari transaksi di akun manajer dengan modal tersebut.<br /><br />
              Investor menganalisis efektivitas kinerja manajer melalui rating dan menginvestasikan dananya pada akun PAMM pilihannya. Jika hasil trading positif, investor akan menerima profit dengan sebagian profit tersebut akan
              diberikan kepada manajer sebagai komisi atau biasa dikenal dengan istilah <i>sharing profit</i> atas kinerjanya yang baik dalam mengelola akun.
            </p>
            <h3>Beberapa keuntungan PAMM</h3>
            <ul>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Investor tak perlu untuk memiliki sejumlah pengalaman perdangan di pasar forex</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Kemudahan dalam berinvestasi, yakni hanya dengan memiliki account dan modal yang sesuai untuk membuat transaksi</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Investor dapat menerima semua informasi dengan lengkap melalui portofolio</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Resiko yang yang harus ditanggung investor lebih kecil dengan diversifikasi resiko</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Akumulasi profit lebih jelas tanpa ada persentase transaksi manual dari akun trading pribadi</p>
            </ul>
            <h3>Bagaimana cara untuk join?</h3>
            <p>
              Fasilitas yang kami sediakan ini <strong>GRATIS</strong> tanpa tambahan biaya apapun. Cukup siapkan akun & balance untuk trading di broker yang sudah kami rekomendasikan yaitu FX Billions atau TradeSocio.<br /><br />
              Info lebih lanjut bisa hubungi admin di bawah ini:
            </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="portfolio-info">
            <ul>
              <li><a href="/kontak" class="btn-visit align-self-start">Hubungi Admin</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projet Details Section -->
</main>
<!-- End #main -->