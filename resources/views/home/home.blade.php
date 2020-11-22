@extends('home.master')

@section('content')

 <!-- ======= Header ======= -->
  @include('home.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>App landing page template</h1>
            <h2>Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus voluptatibus. His ei nihil feugait</h2>
            <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
            <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{ secure_asset('Appland/assets/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    @include('home.features')
    <!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    @include('home.detail_section')
    <!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    @include('home.gallery')
    <!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('home.testimonial')
    <!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    @include('home.pricing')
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    @include('home.faq')
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    @include('home.contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('home.footer')

@endsection