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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" defer />
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" defer/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" integrity="sha512-okkLcBJE+U19Dpd0QdHA1wn4YY6rW3CwaxeLJT3Jmj9ZcNSbln/VYw8UdqXRIwLX7J8PmtHs0I/FPAhozFvXKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
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
    @include('partials.header')
    
    <main id="main">
      @yield('container')
    
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
</main>

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js" integrity="sha512-S/H9RQ6govCzeA7F9D0m8NGfsGf0/HjJEiLEfWGaMCjFzavo+DkRbYtZLSO+X6cZsIKQ6JvV/7Y9YMaYnSGnAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js" integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/vendor/purecounter/purecounter_vanilla.js" defer></script>
  <script src="/js/main.js"></script>
</body>
</html>