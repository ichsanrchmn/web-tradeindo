@extends('layouts.main')
<main id="main">
@include('partials.breadcrumbs')

<!-- ======= Project Details Section ======= -->
<section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="position-relative h-100">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="/img/projects/EDUKASI1.webp" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="/img/projects/edukasi-2.webp" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="/img/projects/signal.webp" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="/img/projects/live-trade5.webp" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="/img/projects/edukasi-7.webp" alt="" />
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
            <h2>Kelas Edukasi VIP</h2>
            <p>
              Private edukasi bagi trader yang lebih mengutamakan insting finansial pribadi. Trading diarahkan bersama mentor berpengalaman melalui analisis market dan signal harian, memberi kemudahan pada anda untuk eksekusi market
              secara mandiri. Diskusi langsung bersama mentor atau member lainnya, semua tersedia di channel Discord Trade Indo.<br /><br />
              Berikut beberapa keunggulan program kelas edukasi VIP:
            </p>
            <ul>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp;Diajarkan sistem & teknik trading</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp;Signal 1-10x dishare setiap hari</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp;Private di room Discord setiap hari</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp;Money management in control</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp;Akun dipantau dan diarahkan</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp;Circle sesama trader yang positif<br /><br /></p>
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
  <!-- End Project Details Section -->
</main>
<!-- End #main -->