@extends('layouts.main')
<main id="main">
@include('partials.breadcrumbs')

<!-- ======= Broker Section ======= -->
<section id="broker" class="broker">
    <div class="container-fluid" data-aos="fade-up">
      <div class="container-fluid pt-5 pb-5"></div>
      <h2>Trade Indo Recommendations</h2>
      <p>Berikut adalah beberapa pilihan broker partner yang bekerja sama dengan kami.</p>
      <div class="row pt-5">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card-group">
            <div class="card">
              <img src="/img/logo-fxb.webp" class="card-img-top mb-3" alt="FX Billions" />
              <div class="card-body">
                <h3 class="card-title">FXBillions Market</h3>
                <p class="card-text">Berdiri sejak 2012, berdedikasi untuk membangun hubungan jangka panjang dengan para Trader dengan visi kami adalah membantu para Trader meraih kesuksesan di dunia trading.</p>
                <a href="https://app.id-fxbillionsmarket.com/#/sign-up" target="_blank" class="btn-broker">Buka Akun Trading</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card-group">
            <div class="card">
              <img src="/img/logo-tsc.webp" class="card-img-top mb-3" alt="Trade Socio CY" />
              <div class="card-body">
                <h3 class="card-title">Trade Socio CY</h3>
                <p class="card-text">Broker dengan dukungan penuh pada trader dengan fitur lengkap, spread terendah, dan eksekusi super instan. Tersedia di berbagai platform trading kesayangan anda.</p>
                <a href="https://client.sociomarkets.live/signup" target="_blank" class="btn-broker">Buka Akun Trading</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card-group">
            <div class="card">
              <img src="/img/coming-soon.webp" class="card-img-top" alt="Coming Soon" />
              <div class="card-body">
                <h3 class="card-title">Coming Soon!</h3>
                <p class="card-text">Trade Indo membuka peluang untuk broker manapun untuk bekerja sama sebagai broker yang kami rekomendasikan dalam melakukan transaksi di market forex.</p>
                <a class="btn-broker-disabled">Coming Soon</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Broker Section -->
</main>
<!-- End #main -->