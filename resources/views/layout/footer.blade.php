<footer id="footer" class="footer position-relative light-background">

  <div class="container footer-top">
    <div class="row gy-5">

      <div class="col-lg-4 col-md-6 footer-about">
        <a href="#accueil" class="logo d-flex align-items-center mb-3">
          <span class="sitename">{{ config('app.name') }}</span>
        </a>
        <p style="color:#666;font-size:15px;line-height:1.8;">
          Votre partenaire digital de confiance en Côte d'Ivoire. Nous concevons des solutions IT innovantes adaptées à votre réalité.
        </p>
        <div class="social-links d-flex mt-3">
          <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" aria-label="Twitter / X"><i class="bi bi-twitter-x"></i></a>
          <a href="#" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Navigation</h4>
        <ul>
          <li><a href="#accueil">Accueil</a></li>
          <li><a href="#about">À propos</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#solutions">Nos solutions</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-3 footer-links">
        <h4>Nos solutions</h4>
        <ul>
          <li><a href="https://smartdoc.ekwatech.com/login" target="_blank" rel="noopener">GedPro</a></li>
          <li><a href="https://neurostock.ekwatech.com/landing" target="_blank" rel="noopener">Neuro-Stock</a></li>
          <li><a href="#solutions">Ekwatech Analytics</a></li>
          <li><a href="#solutions">Digital Process</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4>Contact</h4>
        <div class="footer-contact">
          <p><i class="bi bi-geo-alt me-2" style="color:#f85858;"></i>Abidjan, Côte d'Ivoire</p>
          <p class="mt-2"><i class="bi bi-telephone me-2" style="color:#f85858;"></i>+225 07 12 09 27 83</p>
          <p class="mt-2"><i class="bi bi-envelope me-2" style="color:#f85858;"></i>contact@ekwatech.com</p>
        </div>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>
      © <span id="footer-year"></span>
      <strong class="px-1 sitename">{{ config('app.name') }}</strong>
      — Tous droits réservés
    </p>
  </div>

  <script>document.getElementById('footer-year').textContent = new Date().getFullYear();</script>

</footer>
