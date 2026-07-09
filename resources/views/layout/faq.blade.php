<style>
  /* ── Solutions cards ── */
  #solutions .sol-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    height: 100%;
    box-shadow: 0 2px 20px rgba(0,0,0,.06);
    border: 1px solid #f0f0f0;
    transition: transform .3s, box-shadow .3s;
    display: flex;
    flex-direction: column;
  }
  #solutions .sol-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 40px rgba(0,0,0,.10);
  }
  #solutions .sol-top-bar {
    height: 5px;
    width: 100%;
    flex-shrink: 0;
  }
  #solutions .sol-body {
    padding: 32px 30px 28px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }
  #solutions .sol-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 16px;
  }
  #solutions .sol-icon {
    width: 54px;
    height: 54px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.55rem;
    flex-shrink: 0;
  }
  #solutions .sol-header h3 {
    font-size: 17px;
    font-weight: 800;
    color: #1e293b;
    margin: 0 0 3px;
    line-height: 1.3;
  }
  #solutions .sol-header .sol-tag {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .6px;
    text-transform: uppercase;
    padding: 3px 10px;
    border-radius: 50px;
  }
  #solutions .sol-desc {
    font-size: 14.5px;
    color: #64748b;
    line-height: 1.75;
    margin-bottom: 20px;
    flex-grow: 1;
  }
  #solutions .sol-features {
    list-style: none;
    padding: 0;
    margin: 0 0 24px;
    display: flex;
    flex-direction: column;
    gap: 8px;
  }
  #solutions .sol-features li {
    font-size: 14px;
    color: #475569;
    display: flex;
    align-items: flex-start;
    gap: 9px;
    line-height: 1.5;
  }
  #solutions .sol-features li i {
    font-size: 15px;
    margin-top: 1px;
    flex-shrink: 0;
  }
  #solutions .sol-cta {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 10px 24px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    font-family: var(--heading-font);
    text-decoration: none;
    transition: .25s;
    align-self: flex-start;
    margin-top: auto;
  }
  #solutions .sol-cta:hover { gap: 12px; opacity: .88; }

  /* Palette par solution */
  .sol-smartdoc  .sol-top-bar { background: #2563eb; }
  .sol-smartdoc  .sol-icon    { background: #eff6ff; color: #2563eb; }
  .sol-smartdoc  .sol-tag     { background: #eff6ff; color: #2563eb; }
  .sol-smartdoc  .sol-features li i { color: #2563eb; }
  .sol-smartdoc  .sol-cta     { background: #2563eb; color: #fff; }

  .sol-neuro     .sol-top-bar { background: #16a34a; }
  .sol-neuro     .sol-icon    { background: #f0fdf4; color: #16a34a; }
  .sol-neuro     .sol-tag     { background: #f0fdf4; color: #16a34a; }
  .sol-neuro     .sol-features li i { color: #16a34a; }
  .sol-neuro     .sol-cta     { background: #16a34a; color: #fff; }

  .sol-dolibarr  .sol-top-bar { background: #ea580c; }
  .sol-dolibarr  .sol-icon    { background: #fff7ed; color: #ea580c; }
  .sol-dolibarr  .sol-tag     { background: #fff7ed; color: #ea580c; }
  .sol-dolibarr  .sol-features li i { color: #ea580c; }
  .sol-dolibarr  .sol-cta     { background: #ea580c; color: #fff; }

  .sol-analytics .sol-top-bar { background: #4f46e5; }
  .sol-analytics .sol-icon    { background: #eef2ff; color: #4f46e5; }
  .sol-analytics .sol-tag     { background: #eef2ff; color: #4f46e5; }
  .sol-analytics .sol-features li i { color: #4f46e5; }
  .sol-analytics .sol-cta     { background: #4f46e5; color: #fff; }
</style>

<section id="solutions" class="section light-background">

  <div class="container section-title" data-aos="fade-up">
    <h2>Nos solutions</h2>
    <p>Des produits pensés pour votre croissance</p>
  </div>

  <div class="container">
    <div class="row g-4">

      {{-- GedPro --}}
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="sol-card sol-smartdoc">
          <div class="sol-top-bar"></div>
          <div class="sol-body">
            <div class="sol-header">
              <div class="sol-icon"><i class="bi bi-folder-fill"></i></div>
              <div>
                <h3>GedPro</h3>
                <span class="sol-tag">Gestion Documentaire</span>
              </div>
            </div>
            <p class="sol-desc">
              Centralisez, organisez et sécurisez tous vos documents d'entreprise dans un espace unique.
              GedPro facilite l'accès, le partage et l'archivage tout en garantissant la conformité et la traçabilité.
            </p>
            <ul class="sol-features">
              <li><i class="bi bi-check-circle-fill"></i> Centralisation et archivage sécurisé des documents</li>
              <li><i class="bi bi-check-circle-fill"></i> Contrôle des accès et partage collaboratif</li>
              <li><i class="bi bi-check-circle-fill"></i> Recherche avancée et interface intuitive</li>
            </ul>
            <a href="https://smartdoc.ekwatech.com/login" target="_blank" rel="noopener" class="sol-cta">
              Accéder à GedPro <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      {{-- Neuro-Stock --}}
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="sol-card sol-neuro">
          <div class="sol-top-bar"></div>
          <div class="sol-body">
            <div class="sol-header">
              <div class="sol-icon"><i class="bi bi-graph-up-arrow"></i></div>
              <div>
                <h3>Neuro-Stock</h3>
                <span class="sol-tag">Gestion de Stock</span>
              </div>
            </div>
            <p class="sol-desc">
              Une solution complète pour piloter vos inventaires en temps réel. Suivez vos entrées et sorties,
              gérez vos fournisseurs et commandes, et générez des rapports détaillés pour une prise de décision éclairée.
            </p>
            <ul class="sol-features">
              <li><i class="bi bi-check-circle-fill"></i> Suivi des stocks en temps réel</li>
              <li><i class="bi bi-check-circle-fill"></i> Gestion des fournisseurs et commandes</li>
              <li><i class="bi bi-check-circle-fill"></i> Rapports et alertes de seuil automatiques</li>
            </ul>
            <a href="https://neurostock.ekwatech.com/landing" target="_blank" rel="noopener" class="sol-cta">
              Découvrir Neuro-Stock <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      {{-- Digital Process --}}
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="sol-card sol-dolibarr">
          <div class="sol-top-bar"></div>
          <div class="sol-body">
            <div class="sol-header">
              <div class="sol-icon"><i class="bi bi-diagram-3-fill"></i></div>
              <div>
                <h3>Digital Process</h3>
                <span class="sol-tag">Automatisation de processus</span>
              </div>
            </div>
            <p class="sol-desc">
              <strong>Digital Process</strong> automatise vos processus métier grâce à la configuration de workflows sur mesure —
              sans développement, sans friction, pour une entreprise plus agile et performante.
            </p>
            <ul class="sol-features">
              <li><i class="bi bi-check-circle-fill"></i> Modélisation et automatisation de workflows métier</li>
              <li><i class="bi bi-check-circle-fill"></i> Gestion des validations, alertes et tâches automatiques</li>
              <li><i class="bi bi-check-circle-fill"></i> Suivi en temps réel de l'avancement des processus</li>
            </ul>
            <a href="#contact" class="sol-cta">Demander une démo <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      {{-- Ekwatech Analytics --}}
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="sol-card sol-analytics">
          <div class="sol-top-bar"></div>
          <div class="sol-body">
            <div class="sol-header">
              <div class="sol-icon"><i class="bi bi-bar-chart-fill"></i></div>
              <div>
                <h3>Ekwatech Analytics</h3>
                <span class="sol-tag">Business Intelligence</span>
              </div>
            </div>
            <p class="sol-desc">
              Transformez vos données brutes en insights actionnables grâce à Apache Superset.
              Créez des tableaux de bord interactifs, explorez vos données en temps réel et partagez vos visualisations en équipe.
            </p>
            <ul class="sol-features">
              <li><i class="bi bi-check-circle-fill"></i> Tableaux de bord interactifs et personnalisables</li>
              <li><i class="bi bi-check-circle-fill"></i> Compatible MySQL, PostgreSQL, BigQuery…</li>
              <li><i class="bi bi-check-circle-fill"></i> Collaboration et partage en temps réel</li>
            </ul>
            <a href="#contact" class="sol-cta">Demander une démo <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
