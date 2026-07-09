<style>
  /* ── Services cards ── */
  #services .svc-card {
    background: #fff;
    border-radius: 16px;
    padding: 40px 28px 32px;
    height: 100%;
    text-align: center;
    box-shadow: 0 2px 20px rgba(0,0,0,.06);
    border: 1px solid #f3f3f3;
    transition: transform .3s, box-shadow .3s;
    display: flex;
    flex-direction: column;
  }
  #services .svc-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 40px rgba(0,0,0,.10);
  }
  #services .svc-icon {
    width: 72px;
    height: 72px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.9rem;
    margin: 0 auto 22px;
    flex-shrink: 0;
  }
  #services .svc-card h3 {
    font-size: 17px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 12px;
  }
  #services .svc-card p {
    font-size: 14.5px;
    color: #64748b;
    line-height: 1.75;
    flex-grow: 1;
    margin-bottom: 20px;
  }
  #services .svc-link {
    font-size: 14px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    text-decoration: none;
    transition: gap .2s;
  }
  #services .svc-link:hover { gap: 10px; }

  /* Couleurs par service */
  .svc-dev   .svc-icon { background: #eef9f6; color: #0d9488; }
  .svc-dev   .svc-link { color: #0d9488; }
  .svc-train .svc-icon { background: #f3f0ff; color: #7c3aed; }
  .svc-train .svc-link { color: #7c3aed; }
  .svc-strat .svc-icon { background: #fff7ed; color: #ea580c; }
  .svc-strat .svc-link { color: #ea580c; }
  .svc-mail  .svc-icon { background: #fef1f1; color: #f85858; }
  .svc-mail  .svc-link { color: #f85858; }
  .svc-bi    .svc-icon { background: #eef2ff; color: #4f46e5; }
  .svc-bi    .svc-link { color: #4f46e5; }
</style>

<section id="services" class="services section light-background">

  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Ce que nous faisons pour vous</p>
  </div>

  <div class="container">

    <!-- Ligne 1 : 3 cartes -->
    <div class="row g-4 justify-content-center">

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="svc-card svc-dev">
          <div class="svc-icon">
            <i class="bi bi-code-slash"></i>
          </div>
          <h3>Développement de logiciels sur mesure</h3>
          <p>Des solutions logicielles conçues de A à Z pour répondre précisément aux besoins opérationnels de votre entreprise — web, mobile, API et plus.</p>
          <a href="#contact" class="svc-link">Nous contacter <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="svc-card svc-train">
          <div class="svc-icon">
            <i class="bi bi-person-workspace"></i>
          </div>
          <h3>Formation et accompagnement</h3>
          <p>Montée en compétences de vos équipes sur les nouvelles technologies, avec un suivi personnalisé pour une adoption rapide et durable des outils.</p>
          <a href="#contact" class="svc-link">Nous contacter <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="svc-card svc-strat">
          <div class="svc-icon">
            <i class="bi bi-compass-fill"></i>
          </div>
          <h3>Conseil en stratégie digitale</h3>
          <p>Accompagnement dans votre transformation digitale : audit, roadmap, choix technologiques et optimisation de votre présence en ligne.</p>
          <a href="#contact" class="svc-link">Nous contacter <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Ligne 2 : 2 cartes centrées -->
      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="svc-card svc-mail">
          <div class="svc-icon">
            <i class="bi bi-envelope-at-fill"></i>
          </div>
          <h3>Email professionnel</h3>
          <p>Mise en place d'adresses email @votreentreprise.com pour professionnaliser vos communications et renforcer la crédibilité de votre marque.</p>
          <a href="#contact" class="svc-link">Nous contacter <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="svc-card svc-bi">
          <div class="svc-icon">
            <i class="bi bi-bar-chart-fill"></i>
          </div>
          <h3>Ekwatech Analytics</h3>
          <p>Plateforme BI propulsée par Apache Superset — tableaux de bord interactifs, visualisations avancées et analyses en temps réel pour des décisions éclairées.</p>
          <a href="#solutions" class="svc-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>

</section>
