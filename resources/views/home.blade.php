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

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Youth Connect..</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Youth Empower</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Bright future in you</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">Future Market</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Empowering Youth, Building Futures: Carrier Na Mimi's Impactful Journey.</h3>
                <p class="fst-italic">
                  Transforming Dreams into Realities:
                  Carrier Na Mimi's Commitment to Empowering Youth Entrepreneurship and Building Sustainable Futures.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Through personalized mentorship.</li>
                  <li><i class="ri-check-double-line"></i> ailored programs.</li>
                  <li><i class="ri-check-double-line"></i> dedicated to nurturing the entrepreneurial spirit within youth.</li>
                </ul>
                <p>
                  At Carrier Na Mimi, we're not just shaping businesses; we're shaping futures.
                  Join us on this journey of empowerment and together, let's build a world where every youth has the opportunity to realize their potential and create lasting impact.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/banners  .png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Transforming Dreams into Realities: Carrier Na Mimi's Commitment to Empowering Youth Entrepreneurship</h3>
                <p>
                  At Carrier Na Mimi, we believe in the boundless potential of youth.
                  Our mission is to provide the specialized support and personalized guidance necessary for young entrepreneurs to thrive.
                  By fostering a vibrant community where young minds can connect, collaborate, and inspire one another, we create an environment where innovative ideas flourish.
                </p>
                <p class="fst-italic">
                  Empowering Young Minds, Building Sustainable Futures: Personalized Guidance, Specialized Support, and a Vibrant Community for Aspiring Entrepreneurs
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i>Personalized Guidance:.</li>
                  <li><i class="ri-check-double-line"></i>Specialized Support:.</li>
                  <li><i class="ri-check-double-line"></i>Leadership Skills:</li>
                  <li><i class="ri-check-double-line"></i> Resilience Building:.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/empower.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Empowering Young Minds, Building Sustainable Futures: Personalized Guidance, Specialized Support, and a Vibrant Community for Aspiring Entrepreneurs</h3>
                <p>
                  At Carrier Na Mimi, we believe in the boundless potential of youth.
                   Our mission is to provide the specialized support and personalized guidance necessary for young entrepreneurs to thrive.
                    By fostering a vibrant community where young minds can connect, collaborate, and inspire one another, we create an environment where innovative ideas flourish.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Networking opportunities with fellow young entrepreneurs.</li>
                  <li><i class="ri-check-double-line"></i> Collaborative workshops and peer-to-peer learning.</li>
                  <li><i class="ri-check-double-line"></i> Access to resources and tools for business growth.</li>
                </ul>
                <p class="fst-italic">
                  Join us at Carrier Na Mimi and become part of a movement that transforms aspirations into achievements. Together ..
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/hand.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Empowering Young Minds for a Tech-Driven Future: Personalized Guidance, Specialized Support, and a Vibrant Community for Aspiring Entrepreneurs </h3>
                <p>
                  In the future, we aim to ensure that we connect our members with various opportunities. We will collaborate with organizations such as UNAHA,
                   Career Fair Development, and Carrier Digital to act as a bridge for development, providing access to resources and networks that foster growth and success
                </p>
                <p class="fst-italic">
                  As our slogan says "Wewe na sisi katika kuijenga kesho yetu bora"
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i>Techniques for effective time allocation in a tech-centric world.</li>
                  <li><i class="ri-check-double-line"></i>Workshops on balancing tech-driven business and personal life.</li>
                  <li><i class="ri-check-double-line"></i>Community events to share success stories and challenges.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/talk.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> "Join us at Carrier Na Mimi and unlock your entrepreneurial potential today! Let's shape your future together..</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>What we do offer</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Busness Support</a></h4>
              <p class="description">At Carrier Na Mimi, we empower youth to transform their entrepreneurial dreams into reality.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Education Support</a></h4>
              <p class="description">At Carrier Na Mimi, we're dedicated to studying empowerment and its profound impact on youth development. By understanding the intricacies of empowerment,</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Dedicated pecialist Support</a></h4>
              <p class="description">At Carrier Na Mimi, we provide dedicated specialist support to empower youth entrepreneurs. Our tailored guidance, backed by industry expertise, ensures every aspiring business owner receives the personalized assistance they need to thrive</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Version</a></h4>
              <p class="description">At Carrier Na Mimi, we specialize in providing dedicated support to empower young entrepreneurs. Our tailored guidance ensures each individual receives the personalized assistance they need to thrive in their business endeavors </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Connection to World wide</a></h4>
              <p class="description">At Carrier Na Mimi, we specialize in providing dedicated support to empower young entrepreneurs. Our tailored guidance not only helps individuals thrive but also fosters a vibrant community where youth support and inspire each other on their entrepreneurial journeys.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">TimeWise Empowerment</a></h4>
              <p class="description">At Carrier Na Mimi, we specialize in providing dedicated support to empower young entrepreneurs. Our tailored guidance not only equips them with essential business skills but also emphasizes effective time management,</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Portfolio</h2>
          <p>What we've done</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Mental Trainging</li>
          <li data-filter=".filter-card">Community support</li>
          <li data-filter=".filter-web">Events</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/01.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Trainging</h4>
              <p>at iaa</p>
              <a href="{{url('font/assets/img/portfolio/01.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Trainging"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A0141.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Events</h4>
              <p>at iaa</p>
              <a href="{{url('font/assets/img/portfolio/2F2A0141.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Events"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A0083.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Our content creators with niajiri </h4>
              <p>@iaa</p>
              <a href="{{url('font/assets/img/portfolio/2F2A0083.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A9873.JPG')}}PG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Our partines</h4>
              <p>@iaa</p>
              <a href="{{url('font/assets/img/portfolio/2F2A9873.JPG')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A0195.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Dean mental talk</h4>
              <p>@iaa</p>
              <a href="assets/img/2F2A0195.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/03.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>UNICONNECT 2024</h4>
              <p>@iaa</p>
              <a href="{{url('font/assets/img/portfolio/03.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/Team3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Carrier Ledies Tailk</h4>
              <p>@ iaa</p>
              <a href="{{url('font/assets/img/portfolio/2F2A0068.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A0158.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Mentor ship education</h4>
              <p>@ iaa</p>
              <a href="{{url('font/assets/img/portfolio/2F2A0158.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/work.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Event</h4>
              <p>@ iaa</p>
              <a href="{{url('font/assets/img/portfolio/work.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Event"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Their mentorship program guided me towards my true passions and helped me navigate the complexities of my chosen career path. I'm grateful for the opportunities and support they provided."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('font/assets/img/testimonials/team0.jpg')}}" class="testimonial-img" alt="">
                <h3>Ally Rashid</h3>
                <h4>Graphics &amp; Juniour security analyst</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Their personalized career assessments and professional development resources gave me the confidence to pursue a new direction. Today, I'm thriving in a field I once only dreamed of."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('font/assets/img/testimonials/team1.jpg')}}" class="testimonial-img" alt="">
                <h3>Echa Joseph</h3>
                <h4>Media and communication director</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Thankfully, I discovered carrier digital platform and their comprehensive career exploration tools. With their guidance, I uncovered my strengths and found a career path that aligns perfectly with my goals."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('assets/img/testimonials/team2.jpg')}}" class="testimonial-img" alt="">
                <h3>kareen </h3>
                <h4>Content creator &amp; presentor </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Through their career coaching services, I gained clarity on my goals and discovered new opportunities for growth."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('font/assets/img/testimonials/team3.jpg')}}" class="testimonial-img" alt="">
                <h3>Ismail musa</h3>
                <h4>Graphics &amp; social media monitor </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  From resume writing workshops to interview preparation sessions, their resources equipped me with the skills I needed to successfully transition into a new industry. I couldn't be happier with my decision."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('font/assets/img/testimonials/team4.jpg"')}} class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Marketing manager</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What makes Carrier Na Mimi Digital Platform unique compared to other career mentorship services? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                "What sets Carrier Na Mimi apart is our deeply personalized approach to mentorship.
                 Unlike other services, we don't just match students with mentors based on generic criteria.
                 Instead, we utilize advanced algorithms combined with human intuition to understand each student's unique aspirations, strengths, and learning styles.
                 This ensures that every mentoring relationship is tailored to the individual, maximizing their chances of success in their chosen career path."
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How does Carrier Na Mimi Digital Platform match students with mentors?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                At Carrier Na Mimi, our mentor matching process is driven by a combination of cutting-edge technology and human expertise.
                 Students begin by completing a detailed assessment that helps us understand their career goals, interests, and preferences.
                  We then use this information to match them with mentors who possess relevant experience and expertise. Our goal is to create synergistic mentorship relationships that empower students to achieve their full potential."
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">What types of support and resources does Carrier Na Mimi Digital Platform offer to help students achieve their career goals? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                "Carrier Na Mimi offers a comprehensive suite of support services and resources designed to guide students along their career journey.
                 This includes personalized mentorship from industry professionals, access to curated educational content and workshops, resume and portfolio reviews, interview preparation assistance, networking opportunities, and ongoing guidance to navigate the complexities of the job market.
                 Our holistic approach ensures that students have all the tools they need to succeed in their chosen career paths."
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can you share some success stories of students who have benefited from Carrier Na Mimi Digital Platform? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                "Absolutely! We've had numerous students who have achieved remarkable success with the help of Carrier Na Mimi.
                 One standout example is Sarah, who came to us unsure of her career direction. Through our mentorship program, she discovered her passion for marketing and landed a coveted internship at a top advertising agency. With the guidance of her mentor, Sarah developed the skills and confidence to turn her internship into a full-time job offer upon graduation.
                 Her success story is just one of many that highlight the transformative impact of our platform."
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">How does Carrier Na Mimi Digital Platform adapt to the evolving job market and industry trends? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                "At Carrier Na Mimi, we understand the importance of staying ahead of the curve in today's rapidly changing job market.
                 That's why we're constantly monitoring industry trends, conducting research, and forging partnerships with leading organizations to ensure that our mentorship programs remain relevant and effective.
                 We regularly update our curriculum, integrate emerging technologies, and provide ongoing training to our mentors to equip students with the skills and knowledge they need to succeed in the modern workplace."
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">What is the process for students to get started with Carrier Na Mimi Digital Platform, and what can they expect? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                "Getting started with Carrier Na Mimi is simple and straightforward. Students begin by signing up on our platform and completing a comprehensive assessment to help us understand their career goals and preferences.
                 From there, they'll be matched with a dedicated mentor who will guide them through personalized coaching sessions, educational resources, and practical advice tailored to their needs.
                  Throughout their journey with us, students can expect unwavering support, valuable insights, and the tools they need to confidently navigate their career paths."
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Team</h2>
          <p>Our Hardworking Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{url('font/assets/img/team/rahman.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rahmani Hamis</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{url('font/assets/img/team/02.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Abdulswamad azhary</h4>
                <span>D/Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{url('font/assets/img/team/team6.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ziada Amir</h4>
                <span>Secretary</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{url('font/assets/img/team/team9.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Melissa Sanga</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Njiro Arusha, TANZANIA</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>careernamimidigitalplatform@gmail.c</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+255 628 055 646/750 550 60</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


@endsection
<!--customer scripts-->
@section('script')
@endsection
