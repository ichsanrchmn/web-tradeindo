<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Trade Indo | {{ $title }}</title>

  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="/img/favicon.webp" rel="icon" />
  <link href="/img/apple-touch-icon.webp" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" defer />
  <link href="https://fonts.googleapis.com/css2?&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" defer />

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" defer />
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" defer />
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" defer/>
  <link href="/vendor/aos/aos.css" rel="stylesheet" defer />
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" defer />
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" defer />

  <!-- Template Main CSS File -->
  <link href="/css/main.css" rel="stylesheet" />

  <!-- Custom Scrollbar -->
  <style>
    /* width */
    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>
  <!-- End Scrollbar -->

</head>

<body>
  <main id="main">
    @include('partials.header')
    @yield('container')
  </main>
    
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Ticker</span></a> oleh TradingView</div>
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
      "symbols": [{
          "description": "",
          "proName": "FOREXCOM:XAUUSD"
        },
        {
          "description": "",
          "proName": "FOREXCOM:EURUSD"
        },
        {
          "description": "",
          "proName": "FOREXCOM:GBPUSD"
        },
        {
          "description": "",
          "proName": "FOREXCOM:GBPJPY"
        },
        {
          "description": "",
          "proName": "FOREXCOM:USDJPY"
        },
        {
          "description": "",
          "proName": "FOREXCOM:USDCHF"
        }
      ],
      "showSymbolLogo": true,
      "colorTheme": "light",
      "isTransparent": false,
      "displayMode": "adaptive",
      "locale": "id"
    }
  </script>
</div>
<!-- TradingView Widget END -->

    @include('partials.footer')
    
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbwAr_ISBOm2nkKeSrn_n22zCMKWcMqjX8_ldXa2WHuS8vV72jbCQujHVUXPOsWqDSrTBQ/exec'
    const btnKirim = document.querySelector('.btn-kirim')
    const btnLoading = document.querySelector('.btn-loading')
    const myAlert = document.querySelector('.my-alert')
    const form = document.forms['php-email-form']
    form.addEventListener('submit', e => {
      e.preventDefault()
      // ketika tombol submit diklik
      // tampilkan tombol loading, hilangkan tombol kirim
      btnLoading.classList.toggle('d-none')
      btnKirim.classList.toggle('d-none')
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
          // tampilkan tombol kirim, hilangkan tombol loading
          btnLoading.classList.toggle('d-none')
          btnKirim.classList.toggle('d-none')
          // tampilkan alert
          myAlert.classList.toggle('d-none')
          // reset form
          form.reset()
          console.log('Success!', response)
      })
        .catch(error => console.error('Error!', error.message))
    })
  </script>
  <!-- End Form Control -->

  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
  <script src="/vendor/aos/aos.js" defer></script>
  <script src="/vendor/glightbox/js/glightbox.min.js" defer></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js" defer></script>
  <script src="/vendor/swiper/swiper-bundle.min.js" defer></script>
  <script src="/vendor/purecounter/purecounter_vanilla.js" defer></script>
  <script src="/js/main.js"></script>
</body>
</html>