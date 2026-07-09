<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="#accueil" class="logo d-flex align-items-center me-auto">
      <img src="{{ asset('assets/img/logo-transparent.png') }}" alt="{{ config('app.name') }}">
      <h1 class="sitename">{{ config('app.name') }}</h1>
    </a>

    @include('layout.nav')

    <a href="#contact" class="btn-contact d-none d-xl-inline-block">Nous contacter</a>

  </div>
</header>
