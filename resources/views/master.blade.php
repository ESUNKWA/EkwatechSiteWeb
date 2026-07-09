<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ config('app.name') }} — IT Business Solutions</title>
  <meta name="description" content="Ekwatech-Polyvalent, votre partenaire digital en développement logiciel, conseil IT et Business Intelligence en Côte d'Ivoire.">
  <meta name="keywords" content="IT, logiciel, développement, BI, analytics, Côte d'Ivoire, Abidjan">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo-transparent.png') }}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Inter:wght@400;500;600;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css') }}" rel="stylesheet">

  <style>
    /* ── Couleur de marque Ekwatech ── */
    :root {
      --accent-color: #f85858;
      --nav-hover-color: #f85858;
      --nav-dropdown-hover-color: #f85858;
    }

    /* ── Hero ── */
    .hero { min-height: 100vh; padding: 120px 0 80px; }
    .hero .hero-bg::before {
      background: linear-gradient(135deg, rgba(15,20,30,0.80) 0%, rgba(30,40,60,0.65) 100%);
    }
    .hero h1 { font-size: 54px; line-height: 1.15; font-weight: 800; color: #fff; }
    .hero h1 span { color: #f85858; }
    .hero p { color: rgba(255,255,255,0.80); font-size: 19px; margin: 16px 0 36px; }
    @media (max-width: 640px) {
      .hero h1 { font-size: 32px; }
      .hero p  { font-size: 16px; }
    }
    .hero .btn-hero-primary {
      background: #f85858; color: #fff;
      padding: 13px 34px; border-radius: 50px; font-weight: 600;
      font-family: var(--heading-font); font-size: 15px; letter-spacing: .4px;
      border: 2px solid #f85858; transition: .3s;
    }
    .hero .btn-hero-primary:hover { background: #e04444; border-color: #e04444; color: #fff; }
    .hero .btn-hero-outline {
      background: transparent; color: #fff;
      padding: 13px 34px; border-radius: 50px; font-weight: 600;
      font-family: var(--heading-font); font-size: 15px; letter-spacing: .4px;
      border: 2px solid rgba(255,255,255,.6); transition: .3s;
    }
    .hero .btn-hero-outline:hover { border-color: #fff; background: rgba(255,255,255,.1); }

    /* ── Stats bar ── */
    #stats { background: #fff; padding: 50px 0; border-bottom: 1px solid #f0f0f0; }
    .stat-item { text-align: center; }
    .stat-item .number { font-size: 42px; font-weight: 800; color: #f85858; font-family: var(--heading-font); line-height: 1; }
    .stat-item .label  { font-size: 14px; color: #777; font-weight: 500; margin-top: 6px; text-transform: uppercase; letter-spacing: .8px; }
    .stat-divider { border-right: 1px solid #eee; }
    @media (max-width: 767px) { .stat-divider { border-right: none; } }

    /* ── Nav blanc sur le hero (header transparent) ── */
    .index-page .header .sitename { color: #fff; }
    .index-page .header .navmenu a,
    .index-page .header .navmenu a:focus { color: rgba(255,255,255,.88); }
    .index-page .header .navmenu a:hover,
    .index-page .header .navmenu .active,
    .index-page .header .navmenu .active:focus { color: #fff; }
    .index-page .header .mobile-nav-toggle { color: #fff; }

    /* Restaurer au scroll */
    .index-page.scrolled .header .sitename { color: var(--heading-color); }
    .index-page.scrolled .header .navmenu a,
    .index-page.scrolled .header .navmenu a:focus { color: var(--nav-color); }
    .index-page.scrolled .header .navmenu a:hover,
    .index-page.scrolled .header .navmenu .active,
    .index-page.scrolled .header .navmenu .active:focus { color: #f85858; }
    .index-page.scrolled .header .mobile-nav-toggle { color: var(--nav-color); }

    /* ── Nav CTA ── */
    .header .btn-contact {
      background: #f85858; color: #fff !important;
      padding: 8px 22px; border-radius: 50px; font-weight: 600;
      font-size: 14px; margin-left: 18px; white-space: nowrap;
      transition: .3s; border: 2px solid #f85858;
    }
    .header .btn-contact:hover { background: #e04444; border-color: #e04444; }
    .index-page .header .btn-contact {
      background: transparent; border-color: rgba(255,255,255,.7); color: #fff !important;
    }
    .index-page .header .btn-contact:hover { background: rgba(255,255,255,.15); border-color: #fff; }
    .index-page.scrolled .header .btn-contact { background: #f85858; border-color: #f85858; }
    .index-page.scrolled .header .btn-contact:hover { background: #e04444; border-color: #e04444; }
    @media (max-width: 1200px) { .header .btn-contact { margin: 0 12px 0 0; padding: 6px 16px; } }

    /* ── About cards ── */
    .about .pillar-card {
      background: #fff; border: 1px solid #f0f0f0;
      border-radius: 12px; padding: 36px 28px;
      height: 100%; transition: .3s;
      box-shadow: 0 2px 16px rgba(0,0,0,.04);
    }
    .about .pillar-card:hover { box-shadow: 0 8px 32px rgba(248,88,88,.12); transform: translateY(-4px); }
    .about .pillar-card i { font-size: 2.6rem; color: #f85858; }
    .about .pillar-card h5 { font-weight: 700; margin: 14px 0 8px; color: #2d3748; }
    .about .pillar-card p { color: #6b7280; font-size: 15px; margin: 0; }

    /* ── Services ── */
    .services .service-item { border-radius: 12px; }
    .services .service-item h3 { font-size: 18px; font-weight: 700; }

    /* ── Section titles ── */
    .section-title h2::after { background: #f85858; }

    /* ── Contact form button ── */
    .php-email-form button[type=submit] {
      background: #f85858; color: #fff;
      border: none; padding: 12px 36px; border-radius: 50px;
      font-weight: 600; font-size: 15px; cursor: pointer;
      transition: .3s; font-family: var(--heading-font);
    }
    .php-email-form button[type=submit]:hover { background: #e04444; }

    /* ── Footer ── */
    .footer { padding-top: 48px; }
    .footer .social-links a {
      display: inline-flex; align-items: center; justify-content: center;
      width: 38px; height: 38px; border-radius: 50%;
      background: #f0f0f0; color: #444; margin-right: 8px;
      font-size: 16px; transition: .3s;
    }
    .footer .social-links a:hover { background: #f85858; color: #fff; }
  </style>
</head>

<body class="index-page">

  @include('layout.topBar')

  <main class="main">

    <!-- Hero Section -->
    <section id="accueil" class="hero section dark-background">
      <div class="hero-bg">
        <img src="{{asset('assets/img/it-consulting-2.webp') }}" alt="Ekwatech IT Solutions">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <p class="text-uppercase fw-semibold mb-2" style="color:rgba(255,255,255,.6);letter-spacing:2px;font-size:13px;" data-aos="fade-up">Votre partenaire digital en Côte d'Ivoire</p>
          <h1 data-aos="fade-up" data-aos-delay="50">
            Des solutions IT<br>pensées pour <span>votre succès</span>
          </h1>
          <p data-aos="fade-up" data-aos-delay="150">
            Développement sur mesure, Business Intelligence et accompagnement<br class="d-none d-md-block"> pour propulser la transformation digitale de votre entreprise.
          </p>
          <div data-aos="fade-up" data-aos-delay="250" class="d-flex gap-3 flex-wrap justify-content-center">
            <a href="#contact" class="btn-hero-primary">Nous contacter</a>
            <a href="#services" class="btn-hero-outline">Découvrir nos services</a>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Stats Section -->
    <section id="stats">
      <div class="container">
        <div class="row g-0">
          <div class="col-6 col-md-3 stat-divider" data-aos="fade-up" data-aos-delay="100">
            <div class="stat-item py-2">
              <div class="number">10+</div>
              <div class="label">Projets réalisés</div>
            </div>
          </div>
          <div class="col-6 col-md-3 stat-divider" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-item py-2">
              <div class="number">5+</div>
              <div class="label">Clients satisfaits</div>
            </div>
          </div>
          <div class="col-6 col-md-3 stat-divider" data-aos="fade-up" data-aos-delay="300">
            <div class="stat-item py-2">
              <div class="number">4</div>
              <div class="label">Solutions propres</div>
            </div>
          </div>
          <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
            <div class="stat-item py-2">
              <div class="number">24/7</div>
              <div class="label">Support disponible</div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Stats Section -->

    <!-- About Section -->
    @include('layout.about')

    <!-- Services Section -->
    @include('layout.services')

    <!-- Solutions Section -->
    @include('layout.faq')

    <!-- Contact Section -->
    @include('layout.contact')

  </main>

  @include('layout.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js') }}"></script>

</body>

</html>
