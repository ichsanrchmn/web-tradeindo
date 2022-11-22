@extends('layouts.home')
@section('container')
    
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Komunitas Trading Forex <span>Terbaik di Indonesia</span></h2>
            <p data-aos="fade-up">Menciptakan trader sukses di seluruh Indonesia. Dengan berbagai program yang menunjang aktivitas trading dengan mudah, membimbing anda menuju profit konsisten.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="contact.php" class="btn-get-started">Registrasi Member</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(/img/hero-carousel/hero-carousel-5.webp)"></div>
      <div class="carousel-item" style="background-image: url(/img/hero-carousel/hero-carousel-4.webp)"></div>
      <div class="carousel-item" style="background-image: url(/img/hero-carousel/hero-carousel-1.webp)"></div>
      <div class="carousel-item" style="background-image: url(/img/hero-carousel/hero-carousel-3.webp)"></div>
      <div class="carousel-item" style="background-image: url(/img/hero-carousel/hero-carousel-2.webp)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

    <!-- ======= Fasilitas Section ======= -->
    <section id="fasilitas" class="fasilitas">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kami ada untuk Anda</h2>
          <p>Berbagai fasilitas trading forex yang bisa disesuaikan dengan kebutuhan trading anda.<br /> Dapatkan semua fasilitasnya secara gratis</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="kelas-edukasi.php">
                    <div class="card-bg" style="background-image: url(/img/edukasi.webp);"></div></a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="kelas-edukasi.php"><h4 class="card-title">KELAS EDUKASI VIP</h4></a>
                    <p>Signal trading profitable dan edukasi setiap hari secara online & offline bersama mentor berpengalaman. Bimbingan dari trader amatir menjadi trader forex profesional! <br /> Dapatkan semua kemudahan trading forex secara gratis melalui smartphone anda.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="expert-advisor.php"><div class="card-bg" style="background-image: url(/img/advisor.webp);"></div></a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="expert-advisor.php"><h4 class="card-title">EXPERT ADVISOR</h4></a>
                    <p>Program Asistensi Trading menggunakan algoritma terstruktur dan mutakhir ke aplikasi Meta Trader.<br /> Terintegrasi dengan server premium, trading digital sekarang hanya dalam genggaman smartphone! Nikmati WD profit konsisten tanpa harus khawatir human error.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="copytrade.php"><div class="card-bg" style="background-image: url(/img/copytrade.webp);"></div></a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="copytrade.php"><h4 class="card-title">COPYTRADE</h4></a>
                    <p>Program copytrade ini memudahkan anda yang tidak punya banyak waktu, akun anda akan disambungkan secara otomatis ke akun master. Ketika akun master open posisi, akun anda otomatis tersambung. Tidak perlu lagi khawatir salah analisa ataupun entry, semua sudah dihandle oleh tim master Trade Indo.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="pamm.php"><div class="card-bg" style="background-image: url(/img/pamm.webp);"></div></a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="pamm.php"><h4 class="card-title">SUPERSONIC PAMM</h4></a>
                    <p><i>Percent Allocation Management Module</i> adalah layanan spesial yang memungkinkan anda meraih profit tanpa perlu trading sendiri. Hanya perlu deposit balance ke akun manajer, anda akan menerima remunerasi dari profit yang dihasilkan dari transaksi di akun manajer dengan modal tersebut.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
        </div>
      </div>
    </section><!-- End Fasilitas Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          
          <div class="section-header">
            <h2>Overview</h2>
            <p>Simak beberapa keunggulan dari komunitas Trade Indo</p>
          </div>
          
          <div class="row gy-4">
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-people-group"></i>
                </div>
                <h3>Mentor Berpengalaman</h3>
                <p>Edukasi setiap hari bersama para expertise handal dengan berbagai macam teknik super simple yang bisa anda sesuaikan dengan style trading anda.</p>
              </div>
            </div><!-- End Service Item -->
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-headset"></i>
                </div>
                <h3>Full Support Admin 24 Jam</h3>
                <p>Konsultan profesional yang membantu anda memilih berbagai fasilitas di komunitas Trade Indo, demi meraih profit yang konsisten. Full support selama 24 jam!</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h3>Edukasi Online & Offline</h3>
                <p>Trader membutuhkan fleksibilitas! Untuk itu kami menyediakan metode edukasi yang fleksibel, Online maupun Offline. It depends on you!</p>
              </div>
            </div><!-- End Service Item -->
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-comments-dollar"></i>
                </div>
                <h3>Circle positif sesama Trader</h3>
                <p>Diskusi terbuka di forum komunitas dengan sesama trader, membantu aktivitas trading forex menjadi lebih mudah dengan perspektif baru setiap harinya.</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-chart-line"></i>
                </div>
                <h3>Analisis Market Harian</h3>
                <p>Tidak perlu bingung analisis teknikal maupun fundamental. Di kelas edukasi, master akan menyajikan analisis akurat di setiap pair, setiap hari.</p>
              </div>
            </div><!-- End Service Item -->
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-arrow-up-wide-short"></i>
                </div>
                <h3>Amateur to Professional</h3>
                <p>Kami menyediakan apa yang trader butuhkan. Tidak perlu ragu apakah anda seorang trader amatir atau profesional, kami punya yang anda butuhkan.</p>
              </div>
            </div><!-- End Service Item -->
          </div>
        </div>
      </section><!-- End Services Section -->

<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Kegiatan</h2>
        <p>Program trading dan kegiatan dari komunitas Trade Indo</p>
      </div>
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
        <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-seminar">Seminar</li>
          <li data-filter=".filter-edukasi">Edukasi Online & Offline</li>
          <li data-filter=".filter-livetrade">Live Trade & Webinar</li>
          <!-- <li data-filter=".filter-design">Design</li> -->
        </ul>
        <!-- End Projects Filters -->

        <!-- Seminar 1 -->
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-seminar">
            <div class="portfolio-content h-100">
              <img src="/img/projects/seminar-1.webp" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Seminar</h4>
                <p>Seminar di beberapa Kota Besar di Indonesia</p>
                <a href="/img/projects/seminar-1.webp" title="Seminar" data-gallery="portfolio-gallery-seminar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="projects.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          <!-- End Projects Item -->

          <!-- Edukasi 1 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-edukasi">
            <div class="portfolio-content h-100">
              <img src="/img/projects/edukasi-1.webp" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Edukasi Offline</h4>
                <p>Edukasi langsung bersama para mentor Trade Indo</p>
                <a href="/img/projects/edukasi-1.webp" title="Edukasi" data-gallery="portfolio-gallery-edukasi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="projects.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          <!-- End Projects Item -->

          <!-- Live Trade 1 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-livetrade">
            <div class="portfolio-content h-100">
              <img src="/img/projects/live-trade1.webp" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Live Trade</h4>
                <p>Live Trade & Webinar Online melalui berbagai platform live conference</p>
                <a href="/img/projects/live-trade1.webp" title="Live Trade" data-gallery="portfolio-gallery-livetrade" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="projects.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          <!-- End Projects Item -->

          <!-- Edukasi 2 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-edukasi">
            <div class="portfolio-content h-100">
              <img src="/img/projects/live-trade6.webp" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Edukasi Online</h4>
                <p>Edukasi langsung bersama para mentor Trade Indo</p>
                <a href="/img/projects/live-trade6.webp" title="Edukasi" data-gallery="portfolio-gallery-edukasi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="projects.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          <!-- End Projects Item -->

          <!-- Seminar 2 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-seminar">
            <div class="portfolio-content h-100">
              <img src="/img/projects/seminar-2.webp" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Seminar</h4>
                <p>Seminar di beberapa Kota Besar di Indonesia</p>
                <a href="/img/projects/seminar-2.webp" title="Seminar" data-gallery="portfolio-gallery-seminar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="projects.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          <!-- End Projects Item -->

          <!-- Live Trade 2 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-livetrade">
            <div class="portfolio-content h-100">
              <img src="/img/projects/live-trade2.webp" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Live Trade</h4>
                <p>Live Trade & Webinar Online melalui berbagai platform live conference</p>
                <a href="/img/projects/live-trade2.webp" title="Live Trade" data-gallery="portfolio-gallery-livetrade" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="projects.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          <!-- End Projects Item -->
        </div>
        <!-- End Projects Container -->
      </div>
    </div>
  </section>
  <!-- End Our Projects Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Testimoni Member</h2>
        <p>Cerita mereka yang sudah bergabung dengan program trading Trade Indo</p>
      </div>
      <div class="slides-1 swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="/img/testimonials/testimonials-3.webp" class="testimonial-img" alt="">
                <h3>Novrianus Johan</h3>
                <h4>Pengusaha Toko Emas</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Salam sukses buat Tradeindo! Selama saya edukasi disini banyak sekali perubahan dari segi psikologi dan MM. Awalnya trading lot barbar MC terus, tapi berkat pengarahan para mentor saya bisa lebih tenang menghadapi market forex. 
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
          
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="/img/testimonials/testimonials-5.webp" class="testimonial-img" alt="">
                <h3>Djoko H. Lim</h3>
                <h4>Pengusaha Properti</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Saya trading sejak 2010. Baru kali ini menemukan komunitas yang cocok untuk kebutuhan signal trading harian saya dan jarang sekali yang sebagus Trade Indo. Selain melatih skill, psikologi juga makin stabil. Terimakasih untuk seluruh team, yang selalu support saya setiap hari. Salam profit! 
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="/img/testimonials/testimonials-4.webp" class="testimonial-img" alt="">
                <h3>Doni Kusuma</h3>
                <h4>Pengusaha Kuliner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Selama saya trading, baru menemukan tempat edukasi yang bagus seperti Tradeindo. Banyak sekali wawasan baru dalam bisnis forex ini. Terimakasih untuk tim Tradeindo sudah banyak memberikan fasilitas gratis, dengan hasil yang sesungguhnya saya rasakan.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="/img/testimonials/testimonials-2.webp" class="testimonial-img" alt="">
                <h3>Bayu Sutri Yono</h3>
                <h4>Pegawai Negeri</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Puji Tuhan setelah ikut mentoring di Tradeindo akun saya bisa grow meskipun baru 1% per hari. Gak apa-apa yang penting tekun belajar dan atur money management. Terimakasih untuk master dan team Tradeindo selalu sabar membimbing saya.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="/img/testimonials/testimonials-1.webp" class="testimonial-img" alt="">
                <h3>Rika Kristiani</h3>
                <h4>Pengusaha</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Hebat Tradeindo ya Allah, Alhamdulillah bisa dipertemukan dengan Tradeindo. Profit hari ini cukup, ikut trade manual di GBPUSD, GBPJPY, XAUUSD semua hit TP sehari bisa dapat 4 juta. Terimakasih untuk semua tim Tradeindo sukses selalu.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
          
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="/img/testimonials/testimonials-6.webp" class="testimonial-img" alt="">
                <h3>Galih Kresnonegoro</h3>
                <h4>Pengusaha Gadget Store</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Dipertemukan dengan anak muda yang hebat di komunitas ini. Alhamdulillah saya senang bisa belajar bareng mentor yang sabar menghadapi pertanyaan saya tiap hari seputar bisnis forex ini. Skill dan akun saya berkembang setiap harinya, signalnya jitu!
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

<!-- ======= Get Started Section ======= -->
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
  <!-- End Get Started Section -->
@endsection