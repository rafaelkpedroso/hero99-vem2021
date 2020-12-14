@include('layouts.header')

    <!-- Main Screen Section Start -->
    <section id="main" class="main-section fullscreen transparent">

      <!-- Main Section Content Start -->
      <div class="main-section__content absolute">
        <div class="container-fluid p-0 fullheight-mobile">
          <div class="row no-gutters fullheight-mobile">

            <!-- Main Section Intro Start -->
            <div class="col-12 main-section__intro">

              <!-- Main Section Intro Content Start -->
              <div class="intro-content fullheight-mobile">

                <!-- Headline Start -->
                <div id="headline" class="headline headline-bottom">
                  <!-- Animated Headline Start -->
                  <h1 class="headline__title animated-headline large">
                    POR UM <span class="gradient-text">2021</span> +
                    <span id="typed-strings">
                        @foreach($words as $word)
                            <b>{{ $word }}</b>
                        @endforeach
                    </span>
                    <span id="typed"></span>
                  </h1>
                  <!-- Animated Headline End -->
                  <div class="headline__btnholder">
                    <a href="/mensagens" class="btn btn-l btn-gradient">
                      <span class="btn-border"></span>
                      <span class="btn-hover"></span>
                      <span class="btn-caption">Veja as mensagens</span>
                    </a>
                    <a href="/regulamento"  class="btn btn-l btn-outline">
                      <span class="btn-border"></span>
                      <span class="btn-hover"></span>
                      <span class="btn-caption">Como Funciona</span>
                    </a>
                  </div>
                </div>
                <!-- Headline End -->

                <!-- Notify Popup Start-->
                <div id="notify" class="notify transparent">

                  <!-- Popup Controls Start -->
                  <div class="popup-controls">
                    <div class="section-button">
                      <a href="#0" id="notify-close" class="section-close"></a>
                    </div>
                  </div>
                  <!-- Popup Controls End -->

                  <!-- Popup Content Start -->
                  <div class="popup-content">

                    <!-- Popup Title Start -->
                    <div class="content-block popup-title">
                      <span class="popup-title__subtitle">Stay in touch</span>
                      <p class="popup-title__title">We are almost here</p>
                      <p class="popup-title__text">Subscribe to our newsletter and we will send you a notification about the launch of our brand new site.</p>
                    </div>
                    <!-- Popup Title End -->

                    <!-- Popup Content Block Start -->
                    <div class="content-block">
                      <div class="form-container">

                        <!-- Reply Messages Start-->
                        <div class="reply-group subscription-ok">
                          <i class="far fa-check-circle reply-group__icon"></i>
                          <p class="reply-group__title txt-light">Done!</p>
                          <span class="reply-group__text">Thanks for subscribing. We will send you a notification about the launch of our brand new website.</span>
                        </div>
                        <div class="reply-group subscription-error">
                          <i class="far fa-sad-tear reply-group__icon"></i>
                          <p class="reply-group__title">Ooops!</p>
                          <span class="reply-group__text">Something went wrong. Please try again later.</span>
                        </div>
                        <!-- Reply Messages End-->

                        <!-- Notify Contact Form Start-->
                        <form class="form notify-form form-light">
                          <input class="" type="email" placeholder="Email Adress*" required>
                          <span class="inputs-description">*Required fields</span>
                          <button class="btn btn-l btn-gradient" type="submit">
                            <span class="btn-border"></span>
                            <span class="btn-hover"></span>
                            <span class="btn-caption">Send</span>
                          </button>
                        </form>
                        <!-- Notify Contact Form End-->

                      </div>
                    </div>
                    <!-- Popup Content Block End -->

                  </div>
                  <!-- Popup Content End -->

                </div>
                <!-- Notify Popup End-->

              </div>
              <!-- Main Section Intro Content End -->




            </div>
            <!-- Main Section Intro End -->

          </div>
        </div>
      </div>
      <!-- Main Section Content End -->

    </section>


    <!-- Main Screen Section End -->
@include('layouts.footer')
