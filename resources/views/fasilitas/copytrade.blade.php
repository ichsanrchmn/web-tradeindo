@extends('layouts.main')
@section('container')

<!-- ======= Projet Details Section ======= -->
<section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="position-relative h-100">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="/img/projects/ctr.webp" alt="" />
            </div>

            <div class="swiper-slide">
              <img src="/img/projects/ct1.webp" alt="" />
            </div>

            <div class="swiper-slide">
              <img src="/img/projects/ct2.webp" alt="" />
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
            <h2>Copytrade</h2>
            <p>
              Copytrading sebetulnya bukan hal yang benar-benar baru, karena sudah dikenal oleh kalangan investor pada era 2000-an di pasar keuangan seperti untuk trading forex. Copytrading Bisa juga diartikan sebagai salah satu layanan
              yang memungkinkan trader secara otomatis mengcopy posisi trading yang dilakukan oleh trader ahli dengan menautkan akun yang dimiliki.<br /><br />
              Salah satu tantangan terbesar bagi seorang copy trader itu adalah memilih dan menentukan trader top manakah yang bisa mendatang profit banyak mewujudkan. Oleh karena itu, seorang copy trader harus menemukan seorang trader
              profesional yang mempunyai konsistensi dan kesabaran yang tinggi, tidak hanya mereka yang dapat mendatangkan profit finansial yang maksimal.
            </p>
            <h3>Beberapa keuntungan Copytrade</h3>
            <ul>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Trader baru lebih sedikit mengalami risiko</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Belajar trading lebih mudah</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Investor hanya perlu pantau akun trading, dan WD profitnya setiap bulan</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Hemat waktu dan meminimalisir <i>error</i> karena dihandle oleh trader profesional</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Efektif untuk menggandakan akumulasi profit bulanan</p>
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
@endsection