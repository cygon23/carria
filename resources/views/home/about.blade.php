@extends('layouts.app')

@section('style')
@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Career na mimi Digital platform</span></h2>
          <p class="animate__animated fanimate__adeInUp">For the best of future recognization young's and carrier development solution<br>
            offering a right and bright future...</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Career na mimi</h2>
          <p class="animate__animated animate__fadeInUp">Wewe na sisi katika mafanikio na kesho Bora...</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Career na mimi digital foundation Enhancement of future</h2>
          <p class="animate__animated animate__fadeInUp">it's trensformative,combining cutting-edge digital resources with personalized mentorship to create unique and impactful experience.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              carrier na mimi DIgital platform emerges as the bicon foo empowerment and guidence...
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Compressive Guidence</li>
              <li><i class="ri-check-double-line"></i>Personalize Mentorship</li>
              <li><i class="ri-check-double-line"></i> Industry-Specific Workshop</li>
              <li><i class="ri-check-double-line"></i> Advanced Assessments</li>
              <li><i class="ri-check-double-line"></i> Ineternalship and Job Opportunities</li>
              <li><i class="ri-check-double-line"></i> Educational resources</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              carrier na mimi DIgital platform emerges as the bicon foo empowerment and guidence.We are not just a platform; we are a pioneering force commited to revolutionalize how individuals navigate their carrier paths<br><span>At carrier na Mimi,we recognize the multifaced challenges stidents and young proffesionals face in making  informed decisition about their futures.</span>

             <br><span>Our solution is not just compressive; it's trensformative,combining cutting-edge digital resources with personalized mentorship to create unique and impactful experience<br></span>
              We stand as more than a bussiness; we are catalyst for informed decistion-making,partinerin the journey to success and a source, of inspiration  for thoseseeking clarity in their proffessional pursuits.Wellcome to carrier na Mimi Digital Platform,where innovation meets mentorship,and aspirations find their path torealization.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


@endsection

@section('script')

@endsection
