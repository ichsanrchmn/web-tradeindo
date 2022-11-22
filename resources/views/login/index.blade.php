@extends('layouts.main')
<main id="main">
@include('partials.breadcrumbs')

<div class="row justify-content-center">
    <div class="col-md-4">
      
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    </div>
</div>

<main id="main">
    <section class="inner-page min-vh-100 d-flex flex-column align-items-center justify-content-center pb-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
              <a href="" class="logo d-flex align-items-center w-auto">
                <img src="/img/apple-touch-icon.webp" alt="loginAdminTI" class="d-none d-lg-block" />
                <h1 style="color: #353535;">Trade Indo Admin</h1>
              </a>
            </div>
            <div class="card mb-3 mt-4">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Masuk ke Admin Panel</h5>
                  <p class="text-center small">Masukkan email dan password untuk login</p>
                </div>
                <form action="/login" class="row g-3" method="post">
                    @csrf
                  <div class="col-12">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="nama@contoh.com" autofocus required value="{{ old('email') }}" />
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="col-12">
                        <label for="password" class="mt-3">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 mt-3" type="submit">Masuk</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>