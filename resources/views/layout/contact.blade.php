<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt"></i>
            <h3>Addresse</h3>
            <p>Abidjan Côte d'Ivoire</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone"></i>
            <h3>Appelez-nous</h3>
            <p>+225 07 12 09 27 83</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope"></i>
            <h3>Envoyez-nous un courriel</h3>
            <p>contact@ekwatech.com</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row gy-4 mt-1">
        <div class="col-lg-12">

          @if ($errors->any())
              <div style="color:red;">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        
          <form action="{{route('register_customer_msg')}}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
            @csrf
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Entrer votre nom" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Entrer votre adresse email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" placeholder="Object" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" value="{{ old('message') }}" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Envoyer le Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section>
