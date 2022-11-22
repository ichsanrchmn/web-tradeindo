@extends('layouts.main')
<main id="main">
    @include('partials.breadcrumbs')

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">
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
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Edukasi 2 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-edukasi">
              <div class="portfolio-content h-100">
                <img src="/img/projects/edukasi-2.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Edukasi Offline</h4>
                  <p>Edukasi langsung bersama para mentor Trade Indo</p>
                  <a href="/img/projects/edukasi-2.webp" title="Edukasi" data-gallery="portfolio-gallery-edukasi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
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
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Live Trade 3 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-livetrade">
              <div class="portfolio-content h-100">
                <img src="/img/projects/live-trade3.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Live Trade</h4>
                  <p>Live Trade & Webinar Online melalui berbagai platform live conference</p>
                  <a href="/img/projects/live-trade3.webp" title="Live Trade" data-gallery="portfolio-gallery-livetrade" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Edukasi 3 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-edukasi">
              <div class="portfolio-content h-100">
                <img src="/img/projects/edukasi-3.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Edukasi Offline</h4>
                  <p>Edukasi langsung bersama para mentor Trade Indo</p>
                  <a href="/img/projects/edukasi-3.webp" title="Edukasi" data-gallery="portfolio-gallery-edukasi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Seminar 3 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-seminar">
              <div class="portfolio-content h-100">
                <img src="/img/projects/seminar-3.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Seminar</h4>
                  <p>Seminar di beberapa Kota Besar di Indonesia</p>
                  <a href="/img/projects/seminar-3.webp" title="Seminar" data-gallery="portfolio-gallery-seminar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Live Trade 4 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-livetrade">
              <div class="portfolio-content h-100">
                <img src="/img/projects/live-trade4.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Webinar</h4>
                  <p>Live Trade & Webinar Online melalui berbagai platform live conference</p>
                  <a href="/img/projects/live-trade4.webp" title="Webinar" data-gallery="portfolio-gallery-livetrade" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Seminar 4 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-seminar">
              <div class="portfolio-content h-100">
                <img src="/img/projects/seminar-4.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Seminar</h4>
                  <p>Seminar di beberapa Kota Besar di Indonesia</p>
                  <a href="/img/projects/seminar-4.webp" title="Seminar" data-gallery="portfolio-gallery-seminar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Edukasi 4 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-edukasi">
              <div class="portfolio-content h-100">
                <img src="/img/projects/edukasi-4.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Edukasi Offline</h4>
                  <p>Edukasi langsung bersama para mentor Trade Indo</p>
                  <a href="/img/projects/edukasi-4.webp" title="Edukasi" data-gallery="portfolio-gallery-edukasi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Seminar 5 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-seminar">
              <div class="portfolio-content h-100">
                <img src="/img/projects/seminar-5.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Seminar</h4>
                  <p>Seminar di beberapa Kota Besar di Indonesia</p>
                  <a href="/img/projects/seminar-5.webp" title="Seminar" data-gallery="portfolio-gallery-seminar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Live Trade 5 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-livetrade">
              <div class="portfolio-content h-100">
                <img src="/img/projects/live-trade5.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Webinar</h4>
                  <p>Live Trade & Webinar Online melalui berbagai platform live conference</p>
                  <a href="/img/projects/live-trade5.webp" title="Webinar" data-gallery="portfolio-gallery-livetrade" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Edukasi 5 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-edukasi">
              <div class="portfolio-content h-100">
                <img src="/img/projects/edukasi-5.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Edukasi Offline</h4>
                  <p>Edukasi langsung bersama para mentor Trade Indo</p>
                  <a href="/img/projects/edukasi-5.webp" title="Edukasi" data-gallery="portfolio-gallery-edukasi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Seminar 6 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-seminar">
              <div class="portfolio-content h-100">
                <img src="/img/projects/seminar-6.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Seminar</h4>
                  <p>Seminar di beberapa Kota Besar di Indonesia</p>
                  <a href="/img/projects/seminar-6.webp" title="Seminar" data-gallery="portfolio-gallery-seminar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Live Trade 6 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-livetrade">
              <div class="portfolio-content h-100">
                <img src="/img/projects/live-trade6.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Edukasi Online</h4>
                  <p>Edukasi langsung bersama para mentor Trade Indo</p>
                  <a href="/img/projects/live-trade6.webp" title="Live Trade" data-gallery="portfolio-gallery-livetrade" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Edukasi 6 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-edukasi">
              <div class="portfolio-content h-100">
                <img src="/img/projects/edukasi-6.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Edukasi Offline</h4>
                  <p>Edukasi langsung bersama para mentor Trade Indo</p>
                  <a href="/img/projects/edukasi-6.webp" title="Edukasi" data-gallery="portfolio-gallery-edukasi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Seminar 7 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-seminar">
              <div class="portfolio-content h-100">
                <img src="/img/projects/seminar-7.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Seminar</h4>
                  <p>Seminar di beberapa Kota Besar di Indonesia</p>
                  <a href="/img/projects/seminar-7.webp" title="Seminar" data-gallery="portfolio-gallery-seminar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Edukasi 7 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-edukasi">
              <div class="portfolio-content h-100">
                <img src="/img/projects/edukasi-7.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Edukasi Offline</h4>
                  <p>Edukasi langsung bersama para mentor Trade Indo</p>
                  <a href="/img/projects/edukasi-7.webp" title="Edukasi" data-gallery="portfolio-gallery-edukasi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Seminar 8 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-seminar">
              <div class="portfolio-content h-100">
                <img src="/img/projects/seminar-8.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Seminar</h4>
                  <p>Seminar di beberapa Kota Besar di Indonesia</p>
                  <a href="/img/projects/seminar-8.webp" title="Seminar" data-gallery="portfolio-gallery-seminar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <!-- Seminar 9 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-seminar">
              <div class="portfolio-content h-100">
                <img src="/img/projects/seminar-9.webp" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Seminar</h4>
                  <p>Seminar di beberapa Kota Besar di Indonesia</p>
                  <a href="/img/projects/seminar-9.webp" title="Seminar" data-gallery="portfolio-gallery-seminar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
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
  </main>