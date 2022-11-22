@extends('layouts.main')
<main id="main">
@include('partials.breadcrumbs')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-7 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <a data-aos="fade-up" data-aos-delay="200" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=tradeindo38@gmail.com" class="btn-get-started">Kirim Email</a>
          </div>
        </div>
        <!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <a data-aos="fade-up" data-aos-delay="200" target="_blank" href="https://linktr.ee/mauprofit" class="btn-get-started">Hubungi Admin</a>
            </div>
          </div>
          <!-- End Info Item -->
        </div>
    </div>
</div>
</section>
<!-- End Contact Section -->

<section id="get-started" class="get-started section-bg">
    <div class="container">
      <div class="row justify-content-between gy-4">
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
          <div class="content">
            <h3>We Hear You</h3>
            <p>Layanan administrator kami terhubung selama 24 Jam. Jika anda ingin menyampaikan saran atau bertanya seputar program trading, anda dapat memberitahu kami lewat pesan yang dikirim melalui website kami.
            <p>Selanjutnya, anda bisa mendapatkan pemberitahuan lebih lanjut melalui email/nomor handphone.</p>
          </div>
        </div>
  
        <div class="col-lg-5" data-aos="fade-right">
          <h3>FAST RESPOND!</h3>
          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <form name="php-email-form" class="php-email-form">
            <div class="row gy-3">
              <div class="col-md-12">
                <label for="name" class="mb-1">Nama Lengkap:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama lengkap" required/>
              </div>
  
              <div class="col-md-12">
                <label for="email" class="mb-1">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email aktif" required/>
              </div>
  
              <div class="col-md-12">
                <label for="phone" class="mb-1">No. Handphone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan Nomor HP" required/>
              </div>
  
              <div class="col-md-12">
                <label for="message" class="mb-1">Pesan:</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Pesan anda"></textarea>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn-kirim">Kirim</button>
                <button class="d-none btn-loading" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading...
                </button>
                </div>
              </div>
  
            </div>
          </form>
        </div><!-- End Quote Form -->
      </div>
    </div>
  </section>
  
</main>
      <!-- End #main -->