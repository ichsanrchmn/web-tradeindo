@extends('layouts.main')
@section('container')

<!-- ======= Projet Details Section ======= -->
<section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="position-relative h-100">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="/img/projects/advisor.webp" alt="" />
            </div>

            <div class="swiper-slide">
              <img src="/img/projects/advisor1.webp" alt="" />
            </div>

            <div class="swiper-slide">
              <img src="/img/projects/advisor2.webp" alt="" />
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
            <h2>Expert Advisor</h2>
            <p>
              Jika dilihat dari bahasanya, Expert Advisor artinya penasihat ahli. Namun jika di dunia trading, Expert Advisor adalah software khusus yang diperuntukkan pada aktivitas trading derivatif, yang bisa bertindak atau melakukan
              aktivitas tersebut.
            </p>
            <p>
              Expert Advisor bekerja secara komputasi untuk melakukan online trading. Expert Advisor menggunakan Metatrader dengan bahasa pemrograman MetaQuotes Programming Language Version 4 (MQL4) dan bahasa C++. Semua perhitungan pun
              telah masuk dalam program secara otomatis.
            </p>
            <h3>Fungsi Expert Advisor dalam Trading Forex</h3>
            <p>Software EA dalam dunia trading sendiri banyak digunakan oleh trader untuk meraup banyak cuan. Berikut adalah beberapa fungsi software EA.</p>
            <ul>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Meminimalisir emosi para trader saat trading</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Tetap bisa melakukan trading non-stop selama 24 x 7 hari</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Mengoptimalkan profit serta meminimalisir kerugian trading</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Mampu mendeteksi pola trading dan menjalankan instruksi yang diperintahkan trader secara otomatis</p>
              <p class="bi bi-check-circle-fill flex-shrink-0">&nbsp; &nbsp; Karena Expert Advisor adalah software, maka tidak akan mengalami tekanan, stres atau kecemasan</p>
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